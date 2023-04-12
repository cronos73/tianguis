<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table      = 'tbl_usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'password','nombre','registro','Activo','esAdmin'];

    public function getUser($username, $password)
    {
        return $this->where('email', $username)
                    ->where('password', $password)
                    ->first();
    }


}
?>