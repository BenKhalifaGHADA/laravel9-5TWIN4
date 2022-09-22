<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    function index(){
       // return '<h1>Hello 5TWIN4</h1>';
        return view('Home.show',['name'=>"Cest un test"]);
    }
}
