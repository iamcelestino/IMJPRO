<?php

namespace App\Model;
use App\Core\Model;

class   Mespagamento extends Model
{
    public array $erros = [];
    
    protected array $allowed_columns = [
        'id_pagamento',
        'mes',
        'ano',
        'status',
    ];

    protected array $before_insert = [];

    public function validar(array $dados_pagamento): bool
    {

        if(empty($dados_pagamento['id_pagamento']) || !is_int($dados_pagamento['id_pagamento'])) {
            $this->erros['id_pagamento'] = "Identificacao de pagamento  errada";
            
        }

        $mes= [
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

        if(empty($mes_referencia) || !in_array($dados_pagamento['mes'], $mes)) {
            $this->erros['mes'] = 'Mes referencia invalido';
        }

        $status = ['Pendente', 'Pago', 'Atrasado'];
        if(empty($dados_pagamento['satus']) || !in_array($dados_pagamento['mes'], $status)) {
            $this->erros['status'] = 'Status Inserido invalido';
        }


        if(count($this->erros) == 0) {
            return true;
        }
        
        return false;
    }
}