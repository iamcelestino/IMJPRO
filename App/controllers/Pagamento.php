<?php

namespace App\Controllers;
use App\Core\Controller;

class Pagamento extends Controller
{
    public function index()
    {
        $this->view('pagamentos');
    }

    public function adicionar(): void
    {
        $this->view('adicionar_pagamento');
    }
}