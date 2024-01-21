<?php

namespace App\Controllers;

use App\Models\VendasModel;

class Vendas extends BaseController
{
    public function index()
    {
        $model = new VendasModel();
        $data['vendas'] = $model->findAll();

        return view('vendas/index', $data);
    }

    public function create()
    {
        helper('form');
        return view('vendas/create');
    }

    public function store()
    {
        helper('form');
        $model = new VendasModel();

        $data = [
            'nome_prod' => $this->request->getPost('nome_prod'),
            'quant'     => $this->request->getPost('quant'),
            'valor'     => $this->request->getPost('valor'),
            'comprador' => $this->request->getPost('comprador'),
            
        ];

        $model->insert($data);

        return redirect()->to(base_url('vendas'));
    }

    public function edit($id)
    {
        helper('form');
        $model = new VendasModel();
        $data['venda'] = $model->find($id);

        return view('vendas/edit', $data);
    }

    public function update()
    {
        helper('form');
        $model = new VendasModel();

        $id = $this->request->getPost('id');

        $data = [
            'nome_prod' => $this->request->getPost('nome_prod'),
            'quant'     => $this->request->getPost('quant'),
            'valor'     => $this->request->getPost('valor'),
            'comprador' => $this->request->getPost('comprador'),
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('vendas'));
    }

    public function delete($id)
    {
        $model = new VendasModel();
        $model->delete($id);

        return redirect()->to(base_url('vendas'));
    }
}
