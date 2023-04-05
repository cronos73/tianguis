<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        //return view('inicio_view');

       //$this->setUserSession();
       //$this->logout();


        //$data['logged_in'] = $session->get('logged_in');

        echo view('header_view');
        echo view('inicio_view');
        echo view('footer_view');
    }

}
