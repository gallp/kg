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
            ->orderBy('ID', 'DESC')
            ->findAll();

        //dd($data);

        return $data;

    }
}

/*pobrać posortowane po nr kart
123 2 ......
123 1 ......
334 1 ......
334 2 ......
$IDval = $data[0]->ID;
dla każdego numeru karty sprawdzać czy następny to jest self && czy ID jest większe niż current ID{
foreach($data as $d) :

    $Kierunek = $d->kierunek;

endforeach;


}*/
    