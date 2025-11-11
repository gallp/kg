<?php

namespace App\Controllers;

use App\Models\Departmentmodel;


class Department extends BaseController{

    public function index(){
        
        $model = new Departmentmodel();
        $data = $model->findAll();

        //dd($data);
        $data = json_encode($data);

        return view('Department/index',[
            'data' => $data,
            'jsonData' => $data
        ]);

    }

    public function new(){

    }
}