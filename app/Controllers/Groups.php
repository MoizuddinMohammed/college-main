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
            $session->setFlashdata('message','Data Inserted successfully');
            return redirect()->to('/groups');
        }else{
            $session->setFlashdata('status','danger');
            $session->setFlashdata('message','Something went wrong');
            return redirect()->to('/groups/create');
        }
    }

    public function edit($id){
        $model = new GroupsModel();
        $data =[
            'title'  => 'Edit Groups',
            'group'  => $model->getGroup($id)->getRow(),
        ];
        return view('templates/header',$data)
        .view('pages/groups/edit')
        .view('templates/footer');
    }
    public function update(){
        $model = new GroupsModel();
        $id = $this->request->getPost('group_id');
        $data= [
            'name' => $this->request->getPost('name'),
            'code' => $this->request->getPost('code'),
        ];
        $result = $model->updateGroup($data,$id);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            $session->setFlashdata('message','Data Updated successfully');
            return redirect()->to('/groups');
        }else{
            $session->setFlashdata('status','danger');
            $session->setFlashdata('message','Something went wrong');
            return redirect()->to('/groups/edit/'.$id);
        }
    }
    public function delete($id){
        $model = new GroupsModel();
        $result = $model->deleteGroup($id);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            $session->setFlashdata('message','Data Deleted successfully');
            return redirect()->to('/groups');
        }else{
            $session->setFlashdata('status','danger');
            $session->setFlashdata('message','Something went wrong');
            return redirect()->to('/groups');
        }
    }
}