<?php

namespace App\Controllers;
use App\Models\GroupsModel;

class Groups extends BaseController
{
    public function index(){
        $model = new GroupsModel();
        $data =[
            'title'  => 'Groups',
            'groups' => $model->getGroup(),
        ];
        return view('templates/header',$data)
        .view('pages/groups/index')
        .view('templates/footer');
    }

    public function create(){
        $data =[
            'title'  => 'Add Groups',
        ];
        return view('templates/header',$data)
        .view('pages/groups/create')
        .view('templates/footer');
    }

    public function save(){        
        $model = new GroupsModel();
        $data =[
            'name'  => $this->request->getPost('name'),
            'code'  => $this->request->getPost('code'),
        ];
        $result = $model->saveGroup($data);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            return redirect()->to('/groups');
        }else{
            $session->setFlashdata('status','danger');
            return redirect()->to('/groups/create');
        }
    }

    public function edit($id){
        $data =[
            'title'  => 'Add Groups',
        ];
        return view('templates/header',$data)
        .view('pages/groups/create')
        .view('templates/footer');
    }
}