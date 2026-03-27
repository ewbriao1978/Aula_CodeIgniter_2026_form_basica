<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('tela_principal');
    }

    public function funcao_para_apresentar_tela_sec(): string
    {
        return view('tela_sec');
    }

    public function funcao_para_apresentar_formulario(): string
    {
        return view('formulario');
    }

    public function funcao_para_processar_formulario()
    {
        $data['nome'] = $this->request->getPost('nome'); // $_POST['nome']
        $data['email'] = $this->request->getPost('email'); // $_POST['email']

        return view('tela_sucesso', $data);
    }




}
