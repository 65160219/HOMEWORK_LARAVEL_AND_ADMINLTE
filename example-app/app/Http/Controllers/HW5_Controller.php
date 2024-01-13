<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HW5_Controller extends Controller
{
    private $myvar = "Hello World";

    function _construct() //MyController
    {

    }

    public function index(){
        return view('HW5_Form');
    }
    /*
    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute', $data);
    }
    */
}
