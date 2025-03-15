<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Model\{Formapagamento, Pagamento as modelo_pagamento };
use App\Core\Database;
use Exception;

class Pagamento extends Controller
{
    public mixed $pagamento;
    public mixed $formadepagamento;
    public mixed $database;

    public function __construct()
    {
        $this->pagamento = new modelo_pagamento();
        $this->formadepagamento = new Formapagamento();
        $this->database = new Database();
    }

    public function index()
    {
        $this->view('pagamentos');
    }

    public function adicionar(): void
    {

        if(count($_POST) > 0) {

            try {
                $this->pagamento->beginTransaction();
        
                $this->formadepagamento->insert([
                    'nome'=>$_POST['nome']
                ]);
                
                $forma_pagamento_id = $this->formadepagamento->lastInsertId();
    
                if(!$forma_pagamento_id) {
                    die;
                }
        
                $_POST['forma_pagamento_id'] = $forma_pagamento_id ?? null;
        
                $this->pagamento->insert($_POST);
    
                $this->pagamento->commit();
            } catch(Exception $e) {
                $this->pagamento->rollBack();
                echo $e->getMessage();
            }

        }

        $this->view('adicionar_pagamento');
    }
}