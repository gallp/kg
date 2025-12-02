<?php
namespace App\Models;

use CodeIgniter\Model;

class RemSyncModel extends Model
{
    
    protected $DBGroup = 'mssql';
    protected $table = 'REJESTRACJE';
    protected $primaryKey = 'ID';
    protected $returnType = \App\Entities\RemSync::class;

    public function sync($param){

        $data = $this->select('*')
            ->where("DATETIMEFROMPARTS(ROK, MIESIAC, DZIEN, GODZINA, MINUTA, SEKUNDA, 0) >= DATEADD(HOUR, -{$param}, GETDATE())")
            ->orderBy('NR_KARTY', 'DESC')
            ->orderBy('ID', 'DESC')
            ->findAll();
        //dd($data);

        return $data;

    }
}

//
    