<?php

namespace App\Controllers;

use App\Models\GuardianModel;
use App\Models\DepartmentModel;

use CodeIgniter\Exceptions\PageNotFoundException;
use Config\DataBaseErrors;

class Guardian extends BaseController
{
    public function index(): string
    {

        $model = new GuardianModel;
        $data = $model->getGuardians();
        //dd($data);

        foreach($data as &$da){

            $da['id'] = esc($da['id']);
            $da['name'] = esc($da['name']);
            $da['email'] = esc($da['email']);
            $da['phone'] = esc($da['phone']);
            $da['department_name'] = esc($da['department_name']);
            
        }

        unset($da);

        $data = json_encode($data);

        return view('Guardian/index',[
            'jsonData' => $data
        ]);

    }

    public function new(){
        
        $model = new DepartmentModel();
        $departments = $model->findAll();
        
        //dd($departments);
        
        return view("Guardian/new", [
            "data" => [
                'name' =>"",
                'email' =>"",
                'phone' =>"",
                'comment' =>"",
                'id_department'=>"",
                'department_name'=>"Wybierz Dział"
            ],
            "departments" => $departments
        ]);

    }

    public function create(){
        
        //d($this->request->getPost());
        $data = $this->request->getPost();
        //dd($data);
        $model = new GuardianModel();
        
        try {
        
            $id = $model->insert($data);
            //dd($id);
        if ($id === false) {
            // Normalne błędy walidacji
            return redirect()
                ->to('guardian/new')
                ->with("errors", $model->errors())
                ->withInput();
        }

        // Sukces
        return redirect()
            ->to("guardian/$id")
            ->with('message', 'Sukces, dodano rekord');
        } 
        catch (\Exception $e) {

            //dd($e);
            $message = $e->getMessage();
            $code = $e->getCode();

            $message = DataBaseErrors::getMessage($e);
            $field = DataBaseErrors::getField($e);

            return redirect()
            ->to('guardian/new/')
            ->with('message', "Błąd: $field[2]: $field[1] $message")
            ->withInput();
        }
    }


    /*public function show($id){
        
        $model = new GuardianModel();
        $data = $model->find($id);
        //dd($data);
        return view("Guardian/show",[
            'data' => $data
        ]);

    }*/

    public function show($id){
        
        $model = new GuardianModel();
        $data = $model->getGuardian($id);
        //dd($data);
        return view("Guardian/show",[
            'data' => $data
        ]);

    }

    public function edit($id){
        //dd($id);
        $model = new GuardianModel();
        $data = $model->getGuardian($id);

        $model = new DepartmentModel();
        $departments = $model->findAll();
        
        //dd($data);
        
        if($data === null){
            throw new PageNotFoundException("nie znaleziono Opiekuna z id: $id");
        }
        return view("Guardian/edit",[
            'data' => $data,
            'departments' => $departments
        ]);

    }

    public function update($id){
        
        $data = $this->request->getPost();
        //dd($data);       
        $model = new GuardianModel();
        
        try{
            
            $model -> update($id, $data);
            //dd($data);
                return redirect()
                    ->to("guardian/edit/$id")
                    ->with('message', 'sukces, wyedytowano rekord')
                    ->withInput();
        }
        catch(\exception $e){

            //dd($e);
            //dd($e->getMessage());
            $message = $e->getMessage();
            $code = $e->getCode();

            $message = DataBaseErrors::getMessage($e);
            $field = DataBaseErrors::getField($e);

            return redirect()
            ->to("guardian/edit/$id")
            ->with('message', "Błąd: $field[2]: $field[1] $message")
            ->withInput();
        }

    }
        
}