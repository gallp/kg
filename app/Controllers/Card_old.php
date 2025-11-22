<?php

namespace App\Controllers;

use App\Entities\Card as EntitiesCard;
use App\Models\CardModel;
use CodeIgniter\Exceptions\PageNotFoundException;


class Card extends BaseController{

    protected $helpers = ['card/create'];

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
        //print_r(get_defined_vars());
        $data = $this->request->getPost();
        //dd($data);
        $model = new CardModel();
        $result = $model->update($id, $data);
        
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
            throw new PageNotFoundException("nie znaleziono Opiekuna z id: $id");
        }
        return view("Card/edit",[
            'data'=> $data]);
    }

    public function create(){
        
        $data = $this->request->getPost();

        d($data);
        $model = new CardModel();
        
        $id = $model->insert($data);

        d($id);

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