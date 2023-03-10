<?php namespace App\Controllers;

class Produtos extends BaseController {

    public function index()
    {

        $data['mensagem'] = "Vc está usando o Controller Produtos";
        // localhost/cursoci/public/index.php/produtos/index (index.php e index são opcionais)
        $data['titulo'] = "Gerenciar Produtos";
        return view('produtos_index', $data);
    }

    public function detalhes($produto_id)
    {
        $data['produto_id'] = $produto_id;
        $data['titulo'] = 'Produto ' . $produto_id;
        return view('produtos_detalhes', $data);
    }

}

?>