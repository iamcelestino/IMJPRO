<?php

declare(strict_types=1);

namespace App\controllers;
use App\Core\Controller;
use App\Model\{Classe as modelo_classe};

class Classe extends Controller
{
    public mixed $classe;

    public function __construct()
    {
        $this->classe = new modelo_classe();
    }

    public function index(): void
    {
        $classe = $this->load_model('classe');
        $dados_classe = $classe->findAll();

        dd($dados_classe);
        $this->view('classes', [

        ]);
    }

    public function criar_classe(): void
    {
        if(count($_POST) > 0) {
            if($this->classe->validar($_POST)) {
                $this->classe->insert($_POST);
            }
        }
        $this->view('adicionar_classe');
    }
}



