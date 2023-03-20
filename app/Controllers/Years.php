<?php

namespace App\Controllers;
use App\Models\YearsModel;

class Years extends BaseController
{
    public function index(){
        $model = new YearsModel();
        $data =[
            'title'  => 'Years',
            'years' => $model->fetchData(),
        ];
        return view('templates/header',$data)
        .view('pages/years/index')
        .view('templates/footer');
    }

    public function create(){
        $data =[
            'title'  => 'Add Years',
        ];
        return view('templates/header',$data)
        .view('pages/years/create')
        .view('templates/footer');
    }

    public function save(){        
        $model = new YearsModel();
        $data =[
            'year'  => $this->request->getPost('year'),
        ];
        $result = $model->saveData($data);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            $session->setFlashdata('message','Data Inserted successfully');
            return redirect()->to('/years');
        }else{
            $session->setFlashdata('status','danger');
            $session->setFlashdata('message','Something went wrong');
            return redirect()->to('/years/create');
        }
    }

    public function edit($id){
        $model = new YearsModel();
        $data =[
            'title'  => 'Edit Years',
            'years'  => $model->fetchData($id)->getRow(),
        ];
        return view('templates/header',$data)
        .view('pages/years/edit')
        .view('templates/footer');
    }
    public function update(){
        $model = new YearsModel();
        $id = $this->request->getPost('year_id');
        $data= [
            'year' => $this->request->getPost('year'),
        ];
        $result = $model->updateData($data,$id);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            $session->setFlashdata('message','Data Updated successfully');
            return redirect()->to('/years');
        }else{
            $session->setFlashdata('status','danger');
            $session->setFlashdata('message','Something went wrong');
            return redirect()->to('/years/edit/'.$id);
        }
    }
    public function delete($id){
        $model = new YearsModel();
        $result = $model->deleteData($id);
        $session = \Config\Services::session();
        if($result){
            $session->setFlashdata('status','success');
            $session->setFlashdata('message','Data Deleted successfully');
            return redirect()->to('/years');
        }else{
            $session->setFlashdata('status','danger');
            $session->setFlashdata('message','Something went wrong');
            return redirect()->to('/years');
        }
    }
}