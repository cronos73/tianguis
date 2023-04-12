<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class Login extends BaseController {
    //------------------------------------------------
    //   Abrir el formulario del login
    //------------------------------------------------
    public function index() {
        $session = session();
         if (!$session->get('loggin')) {
            //Si el usuario no se encuentra logueado el sistema abrirá el formulario del login
            $data['error'] = '';
             echo view('login_view',$data);
         }else{
            //Si el usuario se encuentra logueado entonces abre la pagina principal
             return redirect()->to(base_url().'inicio');
         }

        // 
    }


    //------------------------------------------------
    //   Soliictar Acceso al sistema de ventas
    //------------------------------------------------
    public function SoliictarAccesoPos() {
        $session = session();
        //Valida si el usuario se encuentra logueado, 
        //  si ya esta logueado el sistema abre la pagina de inicio, 
        //  de lo contrario valida las credenciales en la base de datos...
        if (!$session->get('loggin')) {
            //Reglas de validacion del formulario login
            $data = [];
            helper(['form']);
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];

            //Valida las reglas configuradas vs los datos del usuario
            if ($this->validate($rules)) {
                //El sistema consulta los datos proporcionado por el usuario...
                $model = new UserModel();
                $user = $model->getUser($this->request->getPost('username'), $this->request->getPost('password'));
                if ($user) {
                    //El sistema inicializa las variables de sessiones del usuario logueado y regresa a la pantalla de inicio...
                    $session->set([
                        'id'   => $user["id"],
                        'user' => $user["email"],
                        'loggin' => true
                    ]);
                    return redirect()->to(base_url().'inicio');
                } else {
                    //El sistema regresa el error de credenciales invalidas y regresa a la pantalla del login...
                    $data['error'] = 'Nombre de usuario o contraseña inválidos.';
                    echo view('login_view',$data);
                }
            } else {
                //El sistema regresa el error de datos invalidos y regresa a la pantalla del login...
                $data['error'] = "Usuario o password son requeridos...";
                echo view('login_view',$data);
            }    
         }else{
            //El sistema abre la pantalla de inicio cuando detecta que el usuario ya esta logueado
             return redirect()->to(base_url().'inicio');
         }
    }

    public function SolicitarSalirDePos() {
        //Limpia todas las variables de session
        $session = session();
        session()->destroy();

        //El sistema abre la pantalla de inicio
        return redirect()->to(base_url().'inicio');

    }

}

?>
