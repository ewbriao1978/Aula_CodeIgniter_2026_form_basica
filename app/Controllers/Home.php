<?php

namespace App\Controllers;
use App\Models\PessoasModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->pessoasModel = new PessoasModel();
    }

    public function index(): string
    {
        return view('tela_principal');
    }

    public function funcao_para_apresentar_tela_sec(): string
    {
        $data['pessoas'] = $this->pessoasModel->findAll();
        return view('tela_sec', $data);
    }

    public function funcao_para_apresentar_formulario(): string
    {
        return view('formulario');
    }

    public function funcao_para_processar_formulario()
    {
        $data['nome'] = $this->request->getPost('nome'); // $_POST['nome']
        $data['email'] = $this->request->getPost('email'); // $_POST['email']
        $this->pessoasModel->insert($data);


        return view('tela_sucesso', $data);
    }

    public function removerPessoa()
    {
        $id = $this->request->getPost('id_para_remover');
        $this->pessoasModel->delete($id);
        return redirect()->to('/outra_tela');
    }




}
