<?php 

namespace App\Model;
use App\Core\Model;

class Estudante extends Model
{
    public array $erros = [];

    protected array $allowed_columns = [
        'nome',
        'contacto',
        'endereco',
        'data_nascimento',
        'data_criacao',
        'classe_id'
    ];

    protected array $before_insert = [];

    public function validar(array $dados_estudante): bool
    {
        if(empty($dados_estudante['nome'])) {
            $this->erros['nome'] = 'nome invalido';
        }

        if(empty($dados_estudante['contacto'])) {
            $this->erros['contacto'] = 'endereco invalido';
        }

        if(empty($dados_estudante['endereco'])) {
            $this->erros['endereco'] = 'endereco invalido';
        }

        if(empty($dados_estudante['data_nascimento'])) {
            $this->erros['data_nascimento'] = 'data de nascimento invalido';
        }

        if(empty($dados_estudante['classe_id'])) {
            $this->erros['classe_id'] = 'Por favor selecione as do estudante';
        }

        if(count($this->erros) > 0) {
            return true;
        }

        return false;
    }


}