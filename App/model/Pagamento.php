<?php

namespace App\Model;
use App\Core\Model;

class Pagamento extends Model
{
    public array $erros = [];
    
    protected array $allowed_columns = [
        'id_estudante',
        'forma_pagamento_id',
        'mes_referencia',
        'status',
        'valor_pago',
        'descricao',
        'data_pagamento'
    ];

    protected array $before_insert = [];

    public function validar(array $dados_pagamento): bool
    {
        if(empty($dados_pagamento['id_estudante']) || !is_int($dados_pagamento['id_estudante'])) {
            $this->erros['id_estudante'] = "Identificacao de estudante errada";

        }

        if(empty($dados_pagamento['id_forma_pagamento']) || !is_int($dados_pagamento['id_forma_pagamento'])) {
            $this->erros['id_forma_pagamento'] = "Identificacao de pagamento  errada";
            
        }

        $mes_referencia = [
            'Janeiro', 
            'Fevereiro', 
            'Março', 
            'Abril', 
            'Maio', 
            'Junho', 
            'Julho', 
            'Agosto',
            'Setembro',
            'Outubro',
            'Novembro',
            'Dezembro'
        ];
        if(empty($mes_referencia) || !in_array($dados_pagamento['mes_referencia'], $mes_referencia)) {
            $this->erros['mes_referencia'] = 'Mes referencia invalido';
        }

        $status = ['Pendente', 'Pago', 'Atrasado'];
        if(empty($dados_pagamento['satus']) || !in_array($dados_pagamento['mes_referencia'], $status)) {
            $this->erros['status'] = 'Status Inserido invalido';
        }

        if(empty($dados_pagamento['valor_pago']) || !is_float($dados_pagamento['valor_pago'])) {
            $this->erros['status'] = 'valor pago invalido, insira valores corretos';
        }

        if(empty($dados_pagamento['data_pagamento'])) {
            $this->erros['data_pagamento'] = 'data de pagamento invalida';;
        }

        if(empty($dados_pagamento['descricao'])) {
            $this->erros['descricao'] = 'descricao invalida';
        }

        if(count($this->erros) == 0) {
            return true;
        }
        
        return false;
    }

}