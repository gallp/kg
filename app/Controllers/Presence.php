<?php

namespace App\Controllers;

use App\Entities\RemSync as EntitiesRemSync;
use App\Models\LocSyncModel;
use App\Models\PresenceModel;

Class Presence extends BaseController{

    public function index(){

        $model = new LocSyncModel();

        $result = $model->select('rejestracje.*,person.name')
        ->join('rcpcard','rejestracje.NR_KARTY = rcpcard.card_number','left')
        ->join('rcpcard_assignment','rcpcard.id_card = rcpcard_assignment.id_card','left')
        ->join('person','rcpcard_assignment.id_person = person.id','left')
        ->findAll();

        $result = json_encode($result);
        
        return view('Presence/index',[
            'jsonData' => $result

        ]);

    }


}