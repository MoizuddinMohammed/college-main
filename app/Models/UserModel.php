<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['name','email','password'];

    public function sendPassword($semail){
        $unique  = rand(999999999,9999999999);
        $newpass['password'] = password_hash($unique, PASSWORD_DEFAULT);
        $this->db->table($this->table)->where('email', $semail)->update($newpass);
        //return $unique;

        $email = \Config\Services::email();

        $email->setFrom('email@shakespiker.com', 'College Management | Password Reset Successful!!');
        $email->setTo($semail);
        // $email->setCC('another@another-example.com');
        // $email->setBCC('them@their-example.com');

        $email->setSubject('Email Test');
        $email->setMessage('Password: '.$unique);

        if ($email->send()) {
            return 1;
        }else{
            echo $data = $email->printDebugger(['headers']);
            return 0;
        }
        if (! $email->send()) {
            return 0;
        }else {
            return 1;
        }
    }
}