<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Defining function 
    public function index(){
        echo "Hello From Controller";
    }

    function loadView(){
        $data = ['Sujeet', 'Raju', 'Dada', 'khadush'];
        return view("users", ["users" => $data]);
    }
}
