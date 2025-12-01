<?php
namespace App\Models;

use CodeIgniter\Model;

class RemSyncModel extends Model
{
    
    protected $DBGroup = 'mssql';
    protected $table = 'REJESTRACJE';
    
    

    public function sync($param){

        $builder = $this->builder();
        
        $builder->where("DATETIMEFROMPARTS(ROK, MIESIAC, DZIEN, GODZINA, MINUTA, SEKUNDA, 0) >= DATEADD(HOUR, -{$param}, GETDATE())")
        ->orderBy('ID', 'DESC');

        //dd($builder);

        $result = $builder->get()->getResult();
        
        return $result;
    }
}
