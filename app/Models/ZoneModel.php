<?php
namespace App\Models;

use CodeIgniter\Model;

class ZoneModel extends Model
{
    protected $table = 'zone';
    protected $primaryKey = 'id_zone';
    protected $allowedFields = ['name', 'location'];
    protected $returnType = 'array';

    public function getZones(){

        return $this->select('
        zone.*,
        name,
        location')
        ->findAll();
    }

}