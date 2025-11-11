<?php

namespace App\Controllers;

use App\Models\Departmentmodel;


class Department extends BaseController{

    /*public function index(){
        
        $model = new Departmentmodel();
        $data = $model->findAll();

        dd($data);
        $data = json_encode($data);

        return view('Department/index',[
            'data' => $data,
            'jsonData' => $data
        ]);

    }*/


    public function index(){
        
        $model = new Departmentmodel();
        $data = $model->findAll();
        
        //dd($data);
        $jsonData = json_encode($data);

        return view('Department/index', [
            'jsonData' => $jsonData,
            'data' => $data

        ]);

    }

    public function show($id){
        
        $model = new Departmentmodel();
        $data = $model->find($id);
        //dd($data);

        return view('Department/show', ['data' => $data]);


    }
    public function new(){

    }

    public function edit(){

    }
}