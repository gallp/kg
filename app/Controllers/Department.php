<?php

namespace App\Controllers;

use App\Entities\Department as EntitiesDepartment;
use App\Models\Departmentmodel;
use CodeIgniter\Exceptions\PageNotFoundException;


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
        
        $data = new EntitiesDepartment();
        //dd($data);
        return view('Department/new', ['data' => $data]);

    }

    public function update($id){
        //print_r(get_defined_vars());
        $data = $this->request->getPost();
        //dd($data);
        $model = new Departmentmodel();
        $result = $model->update($id, $data);
        
        if($result === false) {
            return redirect()->to("department/edit/$id")
                ->with('errors', $model->errors())
                ->withInput();
        }
        
        return redirect()->to("department/$id")
            ->with('message','Sukces, wyedytowano rekord');
    }

    public function edit($id){
        //print_r(get_defined_vars());
        $model = new Departmentmodel();
        $data = $model->find($id);
        //dd($data);
    
        if($data === null){
            throw new PageNotFoundException("nie znaleziono Opiekuna z id: $id");
        }
        return view("Department/edit",[
            'data'=> $data]);
    }

    public function create(){
        
        $data = $this->request->getPost();
        $model = new Departmentmodel();
        
        $id = $model->insert($data);

        if ($id === false){
            return redirect()->to('department/new')
                ->with('errors', $model->errors())
                ->withInput();
        }
        //dd($data);

        return redirect()->to("department/$id")
            ->with('message','Sukces, dodano rekord');
    }
}