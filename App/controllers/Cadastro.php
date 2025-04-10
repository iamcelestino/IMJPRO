<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\Usuario;

class Cadastro extends Controller 
{
    public mixed $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function index(): void
    {
        if(count($_POST) > 0) {

            if($this->usuario->validar($_POST)) {
                $this->usuario->insert($_POST);
                $this->redirect('login');
            }
        }

        $this->view('cadastro');
    }

}