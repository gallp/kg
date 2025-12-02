<?php
namespace App\Models;

use CodeIgniter\Model;

class LocSyncModel extends Model
{
    
    protected $DBGroup = 'default';
    protected $table = 'rejestracje';
    protected $primaryKey = 'ID';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['ID','ROK','MIESIAC','DZIEN','GODZINA','MINUTA','SEKUNDA','NR_KARTY','NR_CZYTNIKA'];
    protected $returnType = \App\Entities\RemSync::class;

    /*public function sync($param){

        dd($param);
        $this->truncate();
        
        $result = $this->save($param);

        dd($result);
             
    }*/
}