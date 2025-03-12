<?php 

namespace App\Model;
use App\Core\Model;


class Classe extends Model
{
    public array $erros = [];

    protected array $allowed_columns = [
        'nome_classe',
        'valor_propina',
        'periodo_letivo'
    ];

    protected array $before_insert = [];

    public function validar(array $dados_classe): bool
    {

        if(empty($dados_classe['nome_classe'])) {
            $this->erros['nome_classe'] = 'Nome de classe invalido';
        }

        if(empty($dados_classe['valor_propina']) || !is_numeric($dados_classe['valor_propina']))
        {
            $this->erros['valor_propina'] = 'Valor da propina invalid0';
        }

        if(empty($dados_classe['periodo_letivo'])) {
            $this->erros['periodo_letivo'] = 'valor letivo invalido';
        }

        if(count($this->erros) == 0) {
            return true;
        }

        return false;
    }

}



