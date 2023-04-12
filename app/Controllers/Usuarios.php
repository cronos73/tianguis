<?php

namespace App\Controllers;

class Usuarios extends BaseController
{
    //---------------------------------------------------------
    //   Portan para el administrador
    //---------------------------------------------------------
    public function index()
    {
        $data = [];
        $session = session();
        if (!$session->get('loggin')) {
            //Si el usuario no esta logueado se abrira el login para accesar
            $data['origen'] = "admin";
            $data['error'] = "";
            echo view('Plantillas/login_header_view');
            echo view('Plantillas/login_body_view', $data);
            echo view('Plantillas/login_footer_view');
        } else {
            //Si el usuario esta logueado valida si es administrador
             if ($session->get('esAdmin') == 'S') {
                //Si el usuario es administrador se abrira el portal administrativo
                 $data['inicio'] = "admin";
                 $data['origen'] = "admin";
                 $session = session();
                 echo view('Plantillas/header_view', $data);
                 echo view('admin/usuarios_view');
                 echo view('Plantillas/footer_view');

             }else{
                //Si el usuario no es administrador se regresa a la forma de login, indicando que no puede entrar xq no es administrador
                $data['origen'] = "admin";
                $data['error'] = "Tu perfil no es de adminstrador, no puede accesar a Adminstración";
                 echo view('Plantillas/login_header_view');
                 echo view('Plantillas/login_body_view', $data);
                 echo view('Plantillas/login_footer_view');                 
             }
        }

    }

}
