<?php

namespace App\Model;
use App\Core\Model;

class Fatura extends Model
{
    public array $erros = [];

    protected array $allowed_columns = [
        'numero_fatura',
        'data_emissao',
        'total',
        'pagamento_id',
        'data_criacao'
    ];

    protected array $after_select = [
        'busca_pagamento',
        'busca_estudante'
    ];
    
    protected array $before_insert = [
        // 'numero_fatura'
    ];

    public function validar($dados): bool
    {
        if(empty($dados['numero_fatura'])) {
            $this->erros['numero_fatura'] = "Numero invalido insira o numero de fatura";
        }

        if(empty($dados['data_emissao'])) {
            $this->erros['data_emissao'] = "data emissao invalida";
        }

        if(empty('pagamento_id')) {
            $this->erros['pagamento_id'] = "Id Pagamento invalido";
        }

        if(empty($dados['data_criacao'])) {
            $this->erros['data_criacao'] = "data criacao invalida";
        }

        if(empty($dados['total'])) {
            $this->erros['total'] = "total invalida";
        }

        if(count($this->erros) == 0) {
            return true;
        }

        return false;

    }

    // public function numero_fatura(array $dados): array
    // {
    //     $fatura =  "FA" . rand(1, 10000) . "/". $dados['pagamento_id'];

    //     $numero_fatura = [
    //         'numero_fatura' => $fatura ?? null
    //     ];

    //     return $numero_fatura;
    // }

    public function busca_pagamento(array $dados): array
    {
        $pagamento = new Pagamento();

        foreach($dados as $chave => $coluna) {
            $resultado = $pagamento->where('id_pagamento', $coluna->pagamento_id);
            $dados[$chave]->pagamento = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

    public function busca_estudante(array $dados): array
    {
        $estudante = new Estudante();

        foreach($dados as $chave => $coluna) {
            $resultado = $estudante->where('id_estudante', $coluna->pagamento->id_estudante);
            $dados[$chave]->estudante = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

}
