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

    public function gerar_fatura(int $id_estudante): void
    {

        $pagamento = $this->load_model('pagamento');
        $pagamentos  = $pagamento->busca_meses($id_estudante);


        $html = '<h1>Lista de Estudantes</h1>';
        $html .= '<table border="1" cellpadding="10" cellspacing="0" width="100%">';
        $html .= '<thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do estudante</th>
                        <th>Meses</th>
                        <th>Ano de pagamento</th>
                    </tr>
                </thead><tbody>';

        foreach ($pagamentos as $pagamento) {
            $html .= '<tr>';
            $html .= '<td>' . htmlspecialchars($pagamento->id_pagamento) . '</td>';
            $html .= '<td>' . htmlspecialchars($pagamento->nome) . '</td>';
            $html .= '<td>' . htmlspecialchars($pagamento->mes) . '</td>';
            $html .= '<td>' . htmlspecialchars($pagamento->ano) . '</td>';
            $html .= '</tr>';

        }

        $html .= '</tbody></table>';

        $mpdf = new \Mpdf\Mpdf();

        $mpdf->WriteHTML($html);
        $mpdf->Output('estudantes.pdf', 'D');
    }
}

