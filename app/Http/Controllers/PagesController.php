<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home(){

        return view("index",["tiitle" => "Belajar Laravel"]);
    }

    public function about(){
        return view("about",["nama" => "Hafiz Darmawan","tiitle" => "Belajar Laravel"]);
    }
}
