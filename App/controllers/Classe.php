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

        $this->view('classes', [
            'classes' => $dados_classe
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

    public function editar(int $id): void
    {
        $classe = $this->load_model('classe');
        $dados_classe = $classe->where('id_classe', $id);

        if(!$dados_classe) {
            $this->redirect('classe');
        }

        if(count($_POST) > 0) {
            if($this->classe->validar($_POST)) {
                $this->classe->update($id, $_POST);
                $this->redirect('classe');
            }
        }

        $this->view('editar_classe', [
            'classe' => $dados_classe[0]
        ]);
    }

    public function deletar(int $id): void
    {
        $classe = $this->load_model('classe');
        $dados_classe = $classe->where('id_classe', $id);

        if(!$dados_classe) {
            $this->redirect('classe');
        }

        if(count($_POST)) {
            if($this->classe->validar($_POST)) {
                $this->classe->delete($id, $_POST);
                $this->redirect('classe');
            }
        }

        $this->view('deletar_classe', [
            'classe' => $dados_classe[0]
        ]);
    }
}



