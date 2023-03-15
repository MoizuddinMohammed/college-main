<?php

namespace App\Controllers;
use App\Models\CollegeModel;

class College extends BaseController
{
    public function index(){
        $model = new CollegeModel();
        $this->session 	= \Config\Services::session();
        $data = [
            'title'   => 'College',
            'college' => $model->getCollege(),
        ];
        return view('templates/header',$data)
            . view('pages/college/index')
            . view('templates/footer');
    }
    public function create(){
        $data = ['title' => 'Add College',];
        return view('templates/header', $data)
            . view('pages/college/create')
            . view('templates/footer');
    }
    public function save(){
        $model = new CollegeModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ];
        $result= $model->saveCollege($data);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            return redirect()->to('/college');
        }else{
            $session->setFlashdata('status','danger');
            return redirect()->to('/college/create');
        }        
    }
    public function edit($id){
        $model = new CollegeModel();
        $data = [
            'title'   => 'Edit College',
            'college' => $model->getCollege($id)->getRow(),
        ];
        return view('templates/header', $data)
            . view('pages/college/edit')
            . view('templates/footer');
    }
    public function update(){
        $model = new CollegeModel();
        $id = $this->request->getPost('id');
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ];
        $result= $model->updateCollege($data,$id);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            return redirect()->to('/college');
        }else{
            $session->setFlashdata('status','danger');
            return redirect()->to('/college/edit/'.$id);
        }        
    }
    public function delete($id){
        $model = new CollegeModel();
        
        $result= $model->deleteCollege($id);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            return redirect()->to('/college');
        }else{
            $session->setFlashdata('status','danger');
            return redirect()->to('/college');
        }        
    }
}
