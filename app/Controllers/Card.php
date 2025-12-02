<?php

namespace App\Controllers;

use App\Entities\Card as EntitiesCard;
use App\Models\CardModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class Card extends BaseController{

    protected $helpers = ['form'];

    /*public function index(){
        
        $model = new CardModel();
        $data = $model->findAll();

        dd($data);
        $data = json_encode($data);

        return view('Card/index',[
            'data' => $data,
            'jsonData' => $data
        ]);

    }*/

    public function index(){
        
        $model = new CardModel();
        $data = $model->findAll();
        
        //dd($data);
        $jsonData = json_encode($data);

        return view('Card/index', [
            'jsonData' => $jsonData,
            'data' => $data

        ]);

    }

    public function show($id){
        
        $model = new CardModel();
        $data = $model->find($id);
        //dd($data);

        return view('Card/show', ['data' => $data]);

    }

    public function new(){
        
        $data = new EntitiesCard();
        //dd($data);
        return view('Card/new', ['data' => $data]);

    }

    public function update($id){
               
        if (! $this->request->is('post')) {
            return view("Card/index");
        }
                
        $rules = [
            'card_number' => "required|exact_length[10]|numeric|is_unique[rcpcard.card_number,id_card,$id]"
        ];
        
        $data = $this->request->getPost(array_keys($rules));
        
        if (! $this->validateData($data, $rules)) {

            return redirect()->back()->withInput();
        }

        $validData = $this->validator->getValidated();
        
        $model = new CardModel();
        $result = $model->update($id, $validData);

        if($result === false) {
            return redirect()->to("card/edit/$id")
                ->with('errors', $model->errors())
                ->withInput();
        }
        
        return redirect()->to("card/$id")
            ->with('message','Sukces, wyedytowano rekord');
    }

    
    public function edit($id){
        //print_r(get_defined_vars());
        $model = new CardModel();
        $data = $model->find($id);
        //dd($data);
    
        if($data === null){
            throw new PageNotFoundException("nie znaleziono Karty z id: $id");
        }
        return view("Card/edit",[
            'data'=> $data]);
    }


    public function create(){

        if (! $this->request->is('post')) {
            return view('Card/new');
        }

        $rules = [
            'card_number' => 'required|exact_length[7]|numeric|is_unique[rcpcard.card_number]'
        ];
        
        $data = $this->request->getPost(array_keys($rules));
        d($data);

        if (! $this->validateData($data, $rules)) {
            return view('Card/new');
        }

        $validData = $this->validator->getValidated();
        
        $model = new CardModel();
        
        $id = $model->insert($validData);

        if ($id === false){
            return redirect()->to('card/new')
                ->with('errors', $model->errors())
                ->withInput();
        }
        //dd($data);

        return redirect()->to("card/$id")
            ->with('message','Sukces, dodano rekord');
    }
}