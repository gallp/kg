<?php

namespace App\Controllers;

use App\Models\DashboardModel;
use App\Models\GuardianModel;
use App\Models\GuestEntryLogsModel;
use App\Models\PersonModel;
use App\Models\ZoneModel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        
        $model = new GuestEntryLogsModel();
        $guests = $model->getGuestsWithReferences();

        //dd($guests);
        
        foreach($guests as &$guest) {
            $guest['id'] = esc($guest['id']);
            $guest['fname'] = esc($guest['fname']);
            $guest['sname'] = esc($guest['sname']);
            $guest['guest_company'] = esc($guest['guest_company']);
            $guest['guest_count'] = esc($guest['guest_count']);
            $guest['guardian'] = esc($guest['guardian']);
            $guest['purpose'] = esc($guest['purpose']);
            $guest['zone'] = esc($guest['zone']);
            $guest['entry_datetime'] = esc($guest['entry_datetime']);
            $guest['confirmation_datetime'] = esc($guest['confirmation_datetime']);
            $guest['exit_datetime'] = esc($guest['exit_datetime']);
            $guest['permanent'] = esc($guest['permanent']);
            $guest['consent'] = esc($guest['consent']);
            $guest['comment'] = esc($guest['comment']);
            $guest['guardian_name'] = esc($guest['guardian_name']);
            $guest['zone_name'] = esc($guest['zone_name']);
        }
        unset($guest); // ważne!
    
        //dd($guests);
        
        $data = json_encode($guests);
        
        //dd($data);

        return view("Dashboard/index",["jsonData"=>$data]); 
    }

    public function apiIndex(): string
    {
        
        $model = new GuestEntryLogsModel();
        $guests = $model->getGuestsWithReferences();

        //dd($guests);
        
        foreach($guests as &$guest) {
            $guest['id'] = esc($guest['id']);
            $guest['fname'] = esc($guest['fname']);
            $guest['sname'] = esc($guest['sname']);
            $guest['guest_company'] = esc($guest['guest_company']);
            $guest['guest_count'] = esc($guest['guest_count']);
            $guest['guardian'] = esc($guest['guardian']);
            $guest['purpose'] = esc($guest['purpose']);
            $guest['zone'] = esc($guest['zone']);
            $guest['entry_datetime'] = esc($guest['entry_datetime']);
            $guest['confirmation_datetime'] = esc($guest['confirmation_datetime']);
            $guest['exit_datetime'] = esc($guest['exit_datetime']);
            $guest['permanent'] = esc($guest['permanent']);
            $guest['consent'] = esc($guest['consent']);
            $guest['comment'] = esc($guest['comment']);
            $guest['guardian_name'] = esc($guest['guardian_name']);
            $guest['zone_name'] = esc($guest['zone_name']);
        }
        unset($guest); // ważne!
    
        //dd($guests);
        
        $data = json_encode($guests);
        
        //dd($data);

        return $data; 
    }


    public function show($id)
    {
        //dd($id);
        $model = new GuestEntryLogsModel;
        $data = $model->find($id);
        //dd($data);
        
        return view("Dashboard/show", [
            "data" => $data //przekazanie danych do widoku App/Views/Dashboard/show.php
        ]);
    }

    public function edit($id)
    {
        //dd($id);
        $model = new GuestEntryLogsModel;
        $data = $model->find($id);
        //dd($data);
        $model = new GuardianModel;
        $guardians = $model->getGuardians();
        //dd($guardians);

        $guardian = $model->getGuardian($data['guardian']);
        //dd($guardian);
        
        $model = new ZoneModel;
        $zones = $model->getZones();

        $zone = $model->find($data['zone']);
        //dd($zone);
        

        return view("Dashboard/edit", [
            "data" => $data, //przekazanie danych do widoku App/Views/Dashboard/edit.php
            "guardians" => $guardians,
            "guardian" => $guardian,
            "zones" => $zones,
            "zone" => $zone
        ]);
    }


    public function new(){

        $model = new GuardianModel;
        $guardians = $model->getGuardians();
        //dd($guardians);

        $model = new ZoneModel;
        $zones = $model->getZones();
        //dd($zones);
                
        return view("Dashboard/new", [
            
            "data" => [
                'fname' => "",
                'sname' => "",
                'guest_company' => "",
                'purpose' => "",
                'guest_count' => "",
                'comment' => "",
            ],
            "guardian" => [
                'id' => "",
                'name' => "Wybierz Opiekuna",
            ],
            "zone" =>[
                'id_zone' => "",
                'name' => "Wybierz Strefę",
            ],
            "guardians" => $guardians,
            "zones" => $zones]);

    }

   
    public function create(){
        //dd($this->request->getPost("Name")); //example

        $data = $this->request->getPost();
        //dd($data);

        $model = new GuestEntryLogsModel;

        $id = $model->insert($data); //domyslnie zwraca $returnID jezeli sukces

        if ($id === false){

            return redirect('dashboard/new') //działa bo znalazł nazwaną trasę lepsze chyba redirect()->to('person/new')
                ->with("errors", $model->errors())
                ->withInput(); //przekazanie z poprzednio wprowadzonymi wartościami
            
                //dd($model->errors());
        }
        $model = new GuardianModel;
        $to_email = ($model->find($data['guardian']))['email'];
        
                   
            $subject = "Nowa Wizyta - Księga Gości PEC";
            $body = "Masz nową wizytę sprawdź pod http://kg.localhost";
            $headers = "From: sender\'s email";
 
            mail($to_email,$subject,$body,$headers);
 
 
        return redirect()
            ->to("dashboard/$id") // różnica w php 'person/$id' to literał, a "person/$id" interpretuje zmienną
            ->with('message', 'sukces, dodano rekord');

    }

    public function confirm($id){
        
        //dd($id);

        $model = new GuestEntryLogsModel;
        $data = $model->find($id);
        
        if(!isset($data['confirmation_datetime'])){

            $model->confirmGuestEntry($id);
            return redirect()
            ->to("dashboard")
            ->with('message', 'sukces, potwierdzo wizytę');
        }

        return redirect()
            ->to("dashboard")
            ->with('message', 'uwaga, wizyta już potwierdzona');

    }

    public function exit($id){
        
        $model = new GuestEntryLogsModel;
        $data = $model->find($id);
        
        if(!isset($data['exit_datetime'])){

            $model->setGuestExit($id);
            return redirect()
            ->to("dashboard")
            ->with('message', 'sukces, ustawiono wyjście');
        }else{
            
            $model->unsetGuestExit($id);
            return redirect()
            ->to("dashboard")
            ->with('message', 'sukces, usunięto wyjście');
        }
    }

    public function update($id){
        
        $data = $this->request->getPost();

        //dd($data);
        
        $model = new GuestEntryLogsModel;
        $model->update($id, $data);

        return redirect()
            ->to("dashboard")
            ->with('message', 'sukces, edytowano rekord');

    }

    public function sendmail(){
        return  view("dashboard/sendmail");
    }

}