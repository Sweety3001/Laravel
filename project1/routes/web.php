<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about",function(){
    return "This is About";
});

Route::get("/contact",function(){
    return "<h1 style='color: blue;'>This is Contact</h1>";
});

Route::get("/data",function(){
    $name="Sweety";
    return $name;
});

Route::get("/data2",function(){
    $firstname="Sweety";
    $lastname="Pradhan";
    return $firstname." ".$lastname;
    // return "$firstname $lastname";
});

//Required parameter
Route::get("/data3/{name}",function($name){
    return "My name is ".$name;
});

//Default parameter
Route::get("/data4/{name?}",function($name="Sweety"){
    return "My name is ".$name;
});

//Optional parameter
Route::get("/data5/{name?}",function($name=null){
    return "My name is ".$name;
});


//example
Route::get("/evenodd/{num}",function($num){
    if($num%2==0){
        return "Even Number";
    }
    else{
        return "Odd Number";
    }
});
Route::get("/age/{age}",function($age){
    if($age>=18){
        return "You are an adult.";
    }
    else{
        return "You are not an adult.";
    }
});
Route::get("/grade/{grade}",function($grade){
    if($grade>=90){
        return "You have a A grade.";
    }
    else if($grade>=80){
        return "You have a B grade.";
    }
    else if($grade>=70){
        return "You have a C grade.";
    }
    else if($grade>=60){
        return "You have a D grade.";
    }
    else{
        return "You have a F grade.";
    }
});

Route::get('/home', function () {
    return view('home');
});

?>