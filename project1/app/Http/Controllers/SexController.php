<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SexController extends Controller
{
    public function ShowArray(){
        $user= [
            'firstname' => 'Janusz',
            'lastname' => 'Nowak',
            'city' => 'Poznan',
            'Hobby' => ['żużel', 'siatkówka', 'skoki narciarskie']
        ];
        return view('user.show_user', ['user' => $user]);
    }
}
