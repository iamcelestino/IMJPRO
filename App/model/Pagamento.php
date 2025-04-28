<?php

namespace App\Model;
use App\Core\Model;

class Pagamento extends Model
{
    public array $erros = [];
    
    protected array $allowed_columns = [
        'id_estudante',
        'forma_pagamento_id',
        'valor_pago',
        'descricao',
        'data_pagamento'
    ];

    protected array $after_select = [
        'busca_estudante',
        'busca_mespagamento'
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

    public function busca_estudante(array $dados): array
    {
        $estudante = new Estudante();

        foreach ($dados as $chave => $coluna) {
            $resultado = $estudante->where('id_estudante', $coluna->id_estudante);
            $dados[$chave]->estudante = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

    public function busca_mespagamento(array $dados): array
    {
        $mespagamento = new Mespagamento();

        foreach ($dados as $chave => $coluna) {
            $resultado = $mespagamento->where('id_pagamento', $coluna->id_pagamento);
            $dados[$chave]->pagamento = is_array($resultado) ? $resultado[0] : false;
        }
        return $dados;
    }

    public function pagamentos_atrasados() {
        return $this->query("SELECT * FROM mespagamento WHERE status = 'Atrasado'");
    }

    public function busca_meses(int $id_estudante): array|bool
    {
        return $this->query(
            "SELECT DISTINCT a.*, b.*, c.*
            FROM estudante as a 
            INNER JOIN pagamento as b ON a.id_estudante = b.id_estudante
            INNER JOIN mespagamento as c ON b.id_pagamento = c.id_pagamento
            WHERE a.id_estudante = :id_estudante AND `c`.`status` = 'pago'
            ",
            ['id_estudante' => $id_estudante]
        );
    }

    public function numero_meses_pagos(): array
    {
        return $this->query(
            "SELECT count(id) AS 'numero_de_meses_pagaos' 
            FROM mespagamento 
            WHERE status = 'pago'
            "
        );
    }

}