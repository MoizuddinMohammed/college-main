<?php

namespace App\Models;

use CodeIgniter\Model;

class YearsModel extends Model{
    protected $table = 'years';

    public function fetchData($id=false){
        if($id==false){
            return $this->findAll();
        }else{
            return $this->getWhere(['year_id' => $id]);
        }
    }
    public function saveData($data){
        return $this->db->table($this->table)->insert($data);
    }
    public function updateData($data,$id){
        return $this->db->table($this->table)->where('year_id', $id)->update($data);
    }
    public function deleteData($id){
        return $this->db->table($this->table)->where('year_id', $id)->delete();
    }
}