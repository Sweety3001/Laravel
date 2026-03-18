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

Route::get("/data1",function(){
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

Route::get('/data', function () {
    return view('data', ['name' => 'Sweety', 'age' => 20]);
});

Route::get("/withdata",function(){
    return view('data')->with('name','Sweety')->with('age',20);
});

Route::get("/compact",function(){
    $name="Sweety";
    $age=20;
    return view('data',compact('name','age'));
});

Route::get("product",function(){
    return "Hello this is product page";
});
Route::get("list",function(){
    return redirect('product');
});


//redirect with parameter
Route::get("product/{name}",function($name){
    return "Hello this is product page Mr. $name";
});
Route::get("list/{name}",function($name){
    return redirect("product/$name");
});


Route::get("product2/{name?}",function($name=null){
    return "Hello this is product page Mr. $name";
});
Route::get("list2/{name?}",function($name=null){
    return redirect("product2/$name");
});


Route::get("header",function(){
    return response("Hello this is header")
    ->header('Content-Type','text/plain')
    ->header("Author","Sweety");
});


//cookies
Route::get("setcookie",function(){
    return response("cookie set successfully")
    ->cookie("Author","Sweety",60);
});
?>