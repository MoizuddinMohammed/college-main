<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class Login extends Controller
{
    public function index(){
        helper(['form']);
        $data = ['title' => 'Login',];
        return view('login', $data);
    } 
  
    public function auth(){
        $session = session();
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'   => $data['id'],
                    'name'      => $data['name'],
                    'email'     => $data['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url());
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to(base_url());
        }
    }
  
    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url());
    }
} 