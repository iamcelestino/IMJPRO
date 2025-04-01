<?php

declare(strict_types=1);

function dd(mixed $dados): void {
    echo "<pre>";
        print_r($dados);
    echo "<pre>";
}

function buscar_var(mixed $key, string $defalut = ''): string
{
    if(isset($_POST[$key])) {

        return $_POST[$key];
    }
    return $defalut;
}

function buscar_selecionado(mixed $key, mixed $value) {

    if(isset($_POST[$key])) {
        
        if($_POST[$key] === $value) {
            return 'Selecionado';
        }
        return "";
    }
}

function escape(mixed $dado): mixed
{
    return htmlspecialchars($dado);
}
