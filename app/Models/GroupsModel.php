<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupsModel extends Model
{
    protected $table = 'groups';

    public function getGroup($id=false){
        if($id==false){
            return $this->findAll();
        }else{
            return $this->getWhere(['group_id' => $id]);
        }
    }
    public function saveGroup($data){
        return $this->db->table($this->table)->insert($data);
    }
    public function updateGroup($data,$id){
        return $this->db->table($this->table)->where('group_id', $id)->update($data);
    }
    public function deleteGroup($id){
        return $this->db->table($this->table)->where('group_id', $id)->delete();
    }
}