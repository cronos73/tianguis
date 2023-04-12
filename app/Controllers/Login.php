<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(){
        // ---------------------------------------------------------------------
        //  Login
        // ---------------------------------------------------------------------
        $data = [];
        $data['origen'] = "ventas";
        $data['error'] = '';

        echo view('plantillas/login_header_view');
        echo view('plantillas/login_body_view', $data);
        echo view('plantillas/login_footer_view');

    }
    //------------------------------------------------
    //   Soliictar Acceso al sistema (Login)
    //------------------------------------------------
    public function Login()
    {
        $session = session();
        $origen = $this->request->getPost('origen');
        $data = [];

        if (!$session->get('loggin')) {
            helper(['form']);
            $rules = [
                'username' => 'required',
                'password' => 'required',
            ];

            if ($this->validate($rules)) {
                //El sistema consulta los datos proporcionado por el usuario...
                $model = new UserModel();
                $user = $model->getUser($this->request->getPost('username'), $this->request->getPost('password'));
                if ($user) {
                    //El sistema inicializa las variables de sessiones del usuario logueado y regresa a la pantalla de inicio...
                    $session->set([
                        'id' => $user["id"],
                        'user' => $user["email"],
                        'esAdmin' => $user["esAdmin"],
                        'loggin' => true,
                    ]);
                    // ---------------------------------------------------------------------
                    //  Menus Administrador/Ventas
                    // ---------------------------------------------------------------------
                    if($origen == "admin"){
                        $data['inicio'] = "admin";
                        $data['origen'] = "admin";
                        echo view('plantillas/header_view',$data);
                        echo view('Admin/productos_view');
                        echo view('plantillas/footer_view');
        
                    }else{
                        $data['inicio'] = "inicio";
                        $data['origen'] = "ventas";
                        echo view('plantillas/header_view',$data);
                        echo view('inicio_view');
                        echo view('plantillas/footer_view');
                    }
                } else {
                    // ---------------------------------------------------------------------
                    //  Login
                    // ---------------------------------------------------------------------
                    if($origen == "admin"){
                        $data['origen'] = "admin";
                    }else{
                        $data['origen'] = "ventas";
                    }
                    $data['error'] = 'Usuario o contraseña son inválidas.';
                    echo view('plantillas/login_header_view');
                    echo view('plantillas/login_body_view', $data);
                    echo view('plantillas/login_footer_view');
                }
            } else {
                // ---------------------------------------------------------------------
                //  Login
                // ---------------------------------------------------------------------
                if($origen == "admin"){
                    $data['origen'] = "admin";
                }else{
                    $data['origen'] = "ventas";
                }
                $data['error'] = "Usuario o contraseña son requeridos...";
                echo view('plantillas/login_header_view');
                echo view('plantillas/login_body_view', $data);
                echo view('plantillas/login_footer_view');
            }
        } else {
            // ---------------------------------------------------------------------
            //  Menus Administrador/Ventas
            // ---------------------------------------------------------------------
            if($origen == "admin"){
                $data['inicio'] = "admin";
                $data['origen'] = "admin";
                echo view('plantillas/header_view',$data);
                echo view('Admin/productos_view');
                echo view('plantillas/footer_view');

            }else{
                $data['inicio'] = "inicio";
                $data['origen'] = "ventas";
                echo view('plantillas/header_view',$data);
                echo view('inicio_view');
                echo view('plantillas/footer_view');
            }
        }
    }

    public function logout()
    {
        //Limpia todas las variables de session
        $session = session();
        session()->destroy();

        //El sistema abre la pantalla de inicio
        return redirect()->to(base_url() . 'inicio');

    }
}
