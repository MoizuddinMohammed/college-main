<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(){
        $data = ['title' => 'Login',];
        return view('login', $data);
    }
    public function register(){
        $data = ['title' => 'Register',];
        return view('register', $data);
    }
    public function dashboard(){
        $data = ['title' => 'Dashboard',];
        return view('templates/header', $data)
            . view('dashboard')
            . view('templates/footer');
    }
    public function blank(){
        $data = ['title' => 'Blank',];
        return view('templates/header', $data)
            . view('blank')
            . view('templates/footer');
    }
}
