<?php

declare(strict_types=1);

namespace App\controllers;
use App\Core\Controller;
use App\Model\{Estudante as modelo_estudante};


class Estudante extends Controller
{
    public mixed $estudante;

    public function __construct()
    {
        $this->estudante = new modelo_estudante();
    }

    public function index(): void
    {
        $this->view('estudantes');
    }

    public function criar_estudante(): void
    {
        $classes = $this->load_model('classe');
        $dados_classes = $classes->findAll();

        if(count($_POST) > 0) {
            // if($this->estudante->validar($_POST)) {
            //     // $this->estudante->insert($_POST);
            //     // $this->redirect('estudante');
            //     dd($_POST);
            // }
            $this->estudante->insert($_POST);
        }
        $this->view('adicionar_estudante',[
            'classes' => $dados_classes
        ]);
    }


}