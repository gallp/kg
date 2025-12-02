<?php

namespace App\Controllers;

use App\Entities\RemSync as EntitiesRemSync;
use App\Models\LocSyncModel;
use App\Models\RemSyncModel;



class Sync extends BaseController{

    public function index(){
        
        $model = new RemSyncModel();

        //dd($model);
        
        $data = $model->builder()->get()->getResultArray();
        
        //dd($data);
        $jsonData = json_encode($data);

        echo $jsonData;
    }


    public function sync(){

        $param = $this->request->getGet('h');
       
        $model = new RemSyncModel();

        $data = $model->sync($param);

        //dd($data);

        $unique = [];
        $result = [];

        foreach ($data as $e){

            if(!in_array($e->NR_KARTY, $unique, true)){
                
                $unique[] = $e->NR_KARTY;

                $result[] =$e;

            }

        }

        $present = [];

        foreach ($result as $e){

            if(!in_array($e->NR_KARTY, $present, true)&&($e->KIERUNEK==0||$e->KIERUNEK==3||$e->KIERUNEK==5)){

                $present[] = $e;
            }          

        }

        //dd($present);

        $model = new LocSyncModel();
        //dd($model);
        
        $model->truncate(true);
        
        foreach ($present as $e){
            
           $model->save($e);

        }
    }
}