<?php

namespace App\controllers;
use App\Core\Controller;
use App\Model\{Fatura as modelo_fatura};


class Fatura extends Controller
{
    public mixed $fatura;

    public function __construct()
    {
        $this->fatura = new modelo_fatura();
    
    }

    public function index(): void
    {
        $faturas = $this->load_model('fatura');
        $dados_fatura = $faturas->findAll();

        $this->view('faturas', [
            'faturas' => $dados_fatura
        ]);
    }

    public function criar(int $id): void
    {
        $pagamento_id = $id;

        dd($pagamento_id);

        $dados_pagamento = [
            'pagamento_id' => $pagamento_id ?? null
        ];

        $this->fatura->insert($dados_pagamento);
    
    }
}

