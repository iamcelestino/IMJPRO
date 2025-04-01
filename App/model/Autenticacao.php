<?php

namespace App\Model;

use stdClass;

class Autenticacao {
    
    public static function autenticar(stdClass $dados_usuario): void
    {
        $_SESSION['USUARIO'] = $dados_usuario;
    }

    public static function esta_logado(): bool
    {
        if(isset($_SESSION['USUARIO'])){
            return true;
        }
        return false;
    }

    public static function nao_logado(): void
    {
        if(isset($_SESSION['USUARIO'])) {
            unset($_SESSION['USUARIO']);
        }
    }
    
    public static function __callStatic($method, $params): mixed
    {
        $prop = strtolower(str_replace("get","", $method));

        if(isset($_SESSION['USUARIO']->$prop)) {

            return $_SESSION['USUARIO']->$prop;
            
        }
        return "unknown";
    }
}