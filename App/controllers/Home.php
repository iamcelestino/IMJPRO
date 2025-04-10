<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Mespagamento;

class home extends Controller 
{
    public function index() 
    {
        $estudante = $this->load_model('estudante');
        $dados_estudantes = $estudante->findAll();

        $pagamentos = $this->load_model('pagamento');
        $dados_pagamento = $pagamentos->findAll();

        $mespagamento = $this->load_model('mespagamento');
        $dados_mespagamento = $mespagamento->findAll();

        $pago = 0;
        $pendente = 0;
        $atrasado = 0;
        $status_array = [];

        foreach ($dados_mespagamento as $item) {
            switch (strtolower($item->status)) {
                case 'pago':
                    $pago++;
                    break;
                case 'pendente':
                    $pendente++;
                    break;
                case 'atrasado':
                    $atrasado++;
                    break;
            }
        }

        $status_array = [$pago, $pendente, $atrasado];
        
        $this->view('home', [
            'estudantes' => $dados_estudantes,
            'pagamentos' => $dados_pagamento,
            'status' => $status_array
        ]);
    }
}