<?php

namespace App\Core;

class App {
    
    protected mixed $controller = 'home';
    protected string $method = 'index';
    protected array $params = [];

    public function __construct()
    {   
        $URL = $this->parse_url();

        if(file_exists(("../App/controllers/" . ucfirst($URL[0]) . ".php"))) {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        }

        $controllerClasss = "App\\Controllers\\" . $this->controller;
        $this->controller = new $controllerClasss();

        if(isset($URL[1])) {
            
            if(method_exists($this->controller, $URL[1])) {
                
                $this->method = ucfirst($URL[1]);
                unset($URL[1]);
            }
        }

        $URL = array_values($URL);
        $this->params = $URL;
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parse_url()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        return explode("/", filter_var(trim($url,"/"), FILTER_SANITIZE_URL));
    }
}