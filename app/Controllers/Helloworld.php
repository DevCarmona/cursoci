<?php namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        echo '<h1>Hello World!</h1>';
    }

    public function hellopersonalizado($nome)
    {
        echo "<h1>Olá $nome!</h1>";
    }

    public function infoproduto($produto_id)
    {
        
    }
}