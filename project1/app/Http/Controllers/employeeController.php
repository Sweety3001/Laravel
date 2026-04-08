<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeController extends Controller
{
    //
    function show(){
        return "employee page";
    }

    function employeeData(){
        $employee=[
            ["name"=>"sawli","salary"=>50000],
            ["name"=>"sawli","salary"=>5000],
            ["name"=>"sawli","salary"=>10000],
            ["name"=>"sawli","salary"=>20000],
        ];
        return view("employeelist",compact('employee'));
    }
}
