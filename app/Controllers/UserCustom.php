<?php

namespace App\Controllers;

use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Entities\User;
use PhpParser\Node\Stmt\TryCatch;

class UserCustom extends BaseController{

    public function index(){

        $users = auth()->getProvider();

        $usersList = $users
            ->withIdentities()
            ->withGroups()
            ->withPermissions()
            ->findAll();    
            
        //dd($usersList);
        $userForJson = [];

        foreach($usersList as $user){

            $userData = [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'active' => $user->active,
                'created_at' => $user->created_at,
                'updated_at' => $user->updated_at,
                'groups' => implode(", ",$user->getGroups()),
                'permissions' => implode($user->getPermissions()),
                //'identities' => $user->getIdentities()
            ];

            //dd($userData);
            $userForJson[] = $userData;
            //dd($userForJson);
        }
        
        $jsonData = json_encode($userForJson);

        //dd($jsonData);

        return view('User/index',[
            'jsonData'=> $jsonData,
            'data' => $usersList
        ]);
    }

    public function edit($id){

        $users = auth()->getProvider();
        
        $user = $users
            ->withIdentities()
            ->withGroups()
            ->withPermissions()
            ->findById($id);

        //dd($user);

        $authConfig = config('AuthGroups');
     
        $allGroups = array_keys($authConfig->groups);

        //dd($allGroups);
        
        $userGroups = $user->getGroups();
        return view('user/edit',[
            'data'=> $user,
            'groups' => $allGroups,
            'userGroups' => $userGroups
        ]);
    }

    public function update($id){

        //print_r(get_defined_vars());
        $data = $this->request->getPost();
        //dd($data);

        $users = auth()->getProvider();

        $user = $users
            ->withGroups()
            ->findById($id);
        //dd($user);
        
        try{

            $user->fill($data);
            $users->save($user);
            $user->setPassword($data['password']);
            $selectedGroups = $data['groups'] ?? [];
            //dd($selectedGroups);
            $user->syncGroups(...$selectedGroups);

            //dd($user);
            return redirect()->back()->with('message', 'Sukces, Dane użytkownika zaktualizowane');
        
        }catch(\exception $e){
            
            $message = $e->getMessage();

            d($message);

        }
        
        
    }


}