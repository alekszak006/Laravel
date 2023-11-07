<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function ShowUser(Request $req){
        $dataUser= [
            'firstname' => $req->input('firstname'),
            'lastname' => $req->input('lastname'),
        ];

        return view('user', ['user'=>$dataUser]);
    }
}
