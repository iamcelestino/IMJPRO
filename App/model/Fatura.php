<?php

namespace App\Model;
use App\Core\Model;

class Fatura extends Model
{
    public array $erros = [];

    protected array $allowed_columns = [
        'numero_factura',
        'data_emissao',
        'total',
        'pagamento_id',
        'data_criacao'
    ];
    
    protected array $before_insert = [];

    public function validar($dados): bool
    {
        if(empty($dados['numero_fatura'])) {
            $this->erros['numero_fatura'] = "Numero invalido insira o numero de fatura";
        }

        if(empty($dados['data_emissao'])) {
            $this->erros['data_emissao'] = "data emissao invalida";
        }

        if(empty('total_pagamento_id')) {
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
}
