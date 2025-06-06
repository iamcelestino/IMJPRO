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
        $estudante = $this->load_model('estudante');
        $dados_estudantes = $estudante->findAll();

        $pagamento = $this->load_model('Pagamento');
        $numero_meses_pagos = $pagamento->numero_meses_pagos();

        $this->view('estudantes', [
            'estudantes' => $dados_estudantes,
            'meses_pagos' => $numero_meses_pagos[0]
        ]);
    }

    public function criar_estudante(): void
    {
        $classes = $this->load_model('classe');
        $dados_classes = $classes->findAll();

        if(count($_POST) > 0) {
            
            $this->estudante->insert($_POST);
        }
        $this->view('adicionar_estudante',[
            'classes' => $dados_classes
        ]);
    }


    public function editar(int $id): void
    {
        $estudante = $this->load_model('estudante');
        $dados_estudante = $estudante->where('id_estudante', $id);

        if(!$dados_estudante) {
            $this->redirect('estudante');
        }

        $classe = $this->load_model('classe');
        $dados_classes = $classe->findAll();

        if(count($_POST) > 0) {
           $this->estudante->update($id, $_POST);
        } 

        $this->view('editar_estudante', [
            'estudante' => $dados_estudante[0],
            'classes' => $dados_classes
        ]);
    }

    public function deletar(int $id): void
    {
        $estudante = $this->load_model('estudante');
        $dados_estudante = $estudante->where('id_estudante', $id);

        if(!$dados_estudante) {
            $this->redirect('estudante');
        }

        $classe = $this->load_model('classe');
        $dados_classes = $classe->findAll();

        if(count($_POST) > 0) {
           $this->estudante->delete($id, $_POST);
        } 

        $this->view('deletar_estudante', [
            'estudante' => $dados_estudante[0],
            'classes' => $dados_classes
        ]);
    }


}