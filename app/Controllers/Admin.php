<?php

namespace App\Controllers;

use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Entities\User;

class Admin extends BaseController{

    public function index(){

        return view('admin/index');

    }

    public function editUser($id){

        $users = auth()->getProvider();
        
        $user = $users
            ->withIdentities()
            ->withGroups()
            ->withPermissions()
            ->findById($id);

        dd($user);

    }

}