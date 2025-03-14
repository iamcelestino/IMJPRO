<?php

namespace App\Model;
use App\Core\Model;

class Formapagamento extends Model
{
    public array $erros = [];

    protected array $allowed_columns = [
        'nome'
    ];
    
    protected array $before_insert = [];

    public function validar(array $dados_formapagamento): bool
    {
        if(empty($dados_formapagamento['nome'])) {
            $this->erros['nome'] = 'Nome Invalido';
        }

        if(count($this->erros) == 0) {
            return true;
        }
        return false;
    }
}