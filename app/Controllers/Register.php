<?php

namespace App\Controllers;
use App\Models\UserModel;

class Register extends BaseController
{
    public function index(){
        //include helper form
        helper(['form']);
        $data = ['title' => 'Register',];
        return view('register', $data);
    }
    public function save(){
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'cpassword'  => 'matches[password]'
        ];
        
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name'     => $this->request->getPost('name'),
                'email'    => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to(base_url());
        }else{            
            $data['title'] = 'Register';
            $data['validation'] = $this->validator;
            return view('register', $data);
        }
    }
}