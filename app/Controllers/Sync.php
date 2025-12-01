<?php

namespace App\Controllers;

use App\Entities\RemSync as EntitiesRemSync;
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

        dd($data);

    }
}