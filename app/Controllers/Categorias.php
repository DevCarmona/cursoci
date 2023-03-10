<?php namespace App\Controllers;

    class Categorias extends BaseController {

        public function index()
        {
            // Chamar uma view que exite todas as categorias
            $categoriaModel = new \App\Models\CategoriaModel();
            $data['categorias'] = $categoriaModel->find();
            $data['titulo'] = 'Listando todas as categorias';

            echo view('categorias', $data);
        }

        public function inserir()
        {
            $data['titulo'] = 'Inserir nova categoria';
            $data['acao'] = 'Inserir';
            $data['msg'] = '';

            if($this->request->getMethod() ==='post') {
                $categoriaModel = new \App\Models\CategoriaModel();
                $categoriaModel->set('nomecategoria', $this->request->getPost('nomecategoria'));

                if($categoriaModel->insert()){
                    // deu certo
                    $data['msg'] = 'Categoria inserida com sucesso';
                }
                else {
                    //deu errado
                    $data['msg'] = 'Erro ao inserir categoria';
                }
            }

            echo view('categorias_form', $data);
        }
    }