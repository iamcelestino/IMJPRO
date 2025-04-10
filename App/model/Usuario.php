<?php

namespace App\Model;
use App\Core\Model;

class Usuario extends Model
{
    protected array $allowed_columns = [
        'nome_usuario',
        'tipo_usuario',
        'email',
        'palavra_passe'
    ];

    protected array $before_insert = [
        'hash_password'
    ];

    public function validar(array $dados_usuario): bool
    {
        if (empty($dados_usuario['nome_usuario'])) {
            $this->errors['nome_usuario'] = "Nome inválido.";
        }

        if (empty($dados_usuario['email']) || !filter_var($dados_usuario['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email inválido, por favor insira um email válido.";
        }

        // $tipo_usuario = ['funcionario', 'admin'];
        // if (empty($dados_usuario['tipo_usuario']) || in_array($dados_usuario['tipo_usuario'], $tipo_usuario)) {
        //     $this->errors['tipo_usuario'] = "tipo_usuario inválido, por favor insira um tipo_usuario válido.";
        // }

        if (empty($dados_usuario['palavra_passe'])) {
            $this->errors['palavra_passe'] = "tipo_usuario inválido, por favor insira um tipo_usuario válido.";
        }

        if(count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function hash_password(array $dados_usuario): array 
    {
        $dados_usuario['palavra_passe'] = password_hash($dados_usuario['palavra_passe'], PASSWORD_DEFAULT);
        return $dados_usuario;
    }
}