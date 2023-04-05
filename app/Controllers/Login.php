<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;


class Login extends BaseController {
    public function index() {

        $session = session();
         if (!$session->get('logged_in')) {
            $data['error'] = '';
             echo view('login_view',$data);
         }else{
             return redirect()->to(base_url().'inicio');
         }

        // 
    }


    public function Accesar() {

        $session = session();
         if (!$session->get('logged_in')) {
            //Solicitud para accesar al sistema
            $session = session();
            $data = [];
            helper(['form']);
            $rules = [
                'username' => 'required',
                'password' => 'required'
            ];
            if ($this->validate($rules)) {
                $model = new UserModel();
                $user = $model->getUser($this->request->getPost('username'), $this->request->getPost('password'));
                if ($user) {
                    $session->set([
                        'id'   => $user["id"],
                        'user' => $user["email"],
                        'loggin' => true
                    ]);
                    print($user["nombre"]);
                } else {
                    $data['error'] = 'Nombre de usuario o contraseña inválidos.';
                    $this->logout();
                    echo view('login_view',$data);
                }
            } else {
                $data['error'] = "reglas invalidas";
                echo view('login_view',$data);
            }    


         }else{
             return redirect()->to(base_url().'inicio');
         }

        // 
    }


}

?>
