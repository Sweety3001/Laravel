<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    //
    function index(){
        return view("studenthomepage");
    }
    function show(){
        return "student page";
    }
    function create(){
        return "create student page";
    }
}
