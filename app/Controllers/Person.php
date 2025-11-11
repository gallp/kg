<?php

namespace App\Controllers;

use App\Models\PersonModel;

class Person extends BaseController
{
    /*public function index(): string
    {
        $model = new PersonModel;
        $data = $model->findAll();
        
        //dd($data); 

        return view("Person/index", [
            "persons" => $data //przekazanie danych do widoku App/Views/Person/index.php
        ]);
    }*/

    public function index(): string
    {
        $model = new PersonModel;
        $data = $model->getPersonsWithReferences();
        
        $data = json_encode($data);
        
        //dd($data); 

        return view("Person/index", [
            "jsonData" => $data //przekazanie danych do widoku App/Views/Person/index.php
        ]);
    }

    public function show($id)
    {
        //dd($id);
        $model = new PersonModel;
        $data = $model->find($id);
        //dd($data);
        
        return view("Person/show", [
            "persons" => $data //przekazanie danych do widoku App/Views/Person/show.php
        ]);
    }

    public function new()
    {  
        return view("Person/new", [
            "persons" => [
            "name" =>"",
            "comment" =>""
            ]
        ]);
    }

    public function create()
    {
        //dd($this->request->getPost("Name")); //example

        $data = $this->request->getPost();
        
        $model = new PersonModel;

        $id = $model->insert($data); //domyslnie zwraca $returnID jezeli sukces

        if ($id === false){

            return redirect('person/new') //działa bo znalazł nazwaną trasę lepsze chyba redirect()->to('person/new')
                ->with("errors", $model->errors())
                ->withInput(); //przekazanie z poprzednio wprowadzonymi wartościami
            
                //dd($model->errors());

        }

        //dd($id);
        return redirect()
            ->to("person/$id") // różnica w php 'person/$id' to literał, a "person/$id" interpretuje zmienną
            ->with('message', 'sukces, dodano rekord'); 
    }

    public function edit($id)
    {
        //dd($id);
        $model = new PersonModel;
        $data = $model->find($id);
        //dd($data);
        
        return view("Person/edit", [
            "persons" => $data //przekazanie danych do widoku App/Views/Person/edit.php
        ]);
    }

    public function update($id)
    {
        
        $model = new PersonModel;
        
        if ($model -> update($id, $this->request->getPost())){

            return redirect()->to("person/$id")
                ->with("message", "sukces, wyedytowno rekord");
        }

        return redirect()->back()
        ->with("errors", $model->errors())
        ->withInput();
    }
}