<?php
namespace App\Models;

use CodeIgniter\Model;

class GuardianModel extends Model
{
    protected $table = 'guardian';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email','id_department', 'phone'];
    protected $returnType = 'array';

    public function getGuardians(){
        return $this->select('
        guardian.*,
        guardian.name as name,
        email,
        phone,
        department.name as department_name')
        ->join('department', 'department.id = guardian.id_department')
        ->findAll();
    }

    public function getGuardian($id){
        return $this->select('
        guardian.*,
        guardian.name,
        email,
        phone,
        department.name as department_name')
        ->join('department', 'department.id = guardian.id_department')
        ->find($id);
    }
}