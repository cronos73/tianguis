<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        $data = [];
        $session = session();
        //Si el usuario no esta logueado se abrira el login para accesar
        $data['inicio'] = "inicio";
        $data['origen'] = "ventas";

        $session = session();
        echo view('Plantillas/header_view',$data);
        echo view('inicio_view');
        echo view('Plantillas/footer_view');
    }

}
