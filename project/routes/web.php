<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
// Route::redirect('/home','/');
Route::view('/login','home');

Route::get('/about/{name}',function($name){
    return view('about', ['name' => $name]);
});
Route::get('url1/{name}',function($name){
    return "Hello, $name!";
});

Route::get("/test",function(){
    return "This is test page";
});

Route::get("/add/{num1}/{num2}",function($num1,$num2){
    return $num1+$num2;
})->where('num1','[0-9]+')->where('num2','[0-9]+');

Route::get("/first",function(){
    return view("first",['name'=>'Sweety','age'=>22]);
    // return view("first")->with("name","Shruti")
    // ->with("age",22);
});

Route::get("/first1/{name}",function($name){
    // return view("first",['name'=>$name]);
    return view("first")->with('name',$name)->with('age',22);
});

Route::get("middleware",function(){
    return "Welcome to middleware";
})->middleware('agecheck');

Route::get("header",function(){
    return response("Header added")->header('Content-Type','text/plain')->header('x-app-name','Laravel');
});

Route::get("cookieset",function(){
return response("cookie set")->cookie('name','sweety',5);
});
use Illuminate\Http\Request;
Route::get("getcookie",function(Request $request){
    return $request->cookie('name');
});

use Illuminate\Support\Facades\Cookie;
Route::get("delcookie",function(){
    return response("cookie deleted")->cookie(Cookie::forget('name'));
});

Route::get("json",function(){
    return response()->json([
        'name'=>'sweety',
        'age'=>22,
        'city'=>'Indore'
    ]);
});

Route::get("pref/{choice}",function($choice){
    return response("cookie set")->cookie('newsletter_preference',$choice,43200);
});

Route::get("changepref/{lang}",function($lang){
    return response("cookie set")->cookie('language_preference',null,-1)
    ->cookie('language_preference',$lang,1440);
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return "Welcome to Dashboard";
});

Route::get('/profile', function () {
    return "User Profile Page";
})->name('profile.page');

Route::get('/go-profile', function () {
    return redirect()->route('profile.page');
});

Route::get("tasks",function(){
    $task=[
    ["id" => 1, "name" => "Task 1", "status" => "completed"],
        ["id"=>2, "name"=> "Task 2", "status" => "pending"]
    ];
    return response()->json(
        $task
    );
});
Route::get("prdt",function(){
    return view("products");
});
Route::get("c1",function(){
    return view("c1");
});
Route::get("c2",function(){
    return view("c2");
});

Route::get("compact",function(){
    $name="Sweety";
    $age=22;
    return view("data",compact('name','age'));
});

Route::get("co1",function(){
 $students=[
    ["name"=>"sweety","age"=>22],
    ["name"=>"shruti","age"=>21]
 ];
 return view("co1",compact('students'));
});
Route::get("co1/{name}",function($name){
 $students=[
    ["name"=>"sweety","age"=>22],
    ["name"=>"shruti","age"=>21]
 ];
 return view("co1",compact('students','name'));
});

Route::get("theme/{color}",function($color){
    return redirect("themep")->cookie('color',$color,60);
});
Route::get("themep",function(Request $request){
    $color=$request->cookie('color','Light');
    return view("theme",compact('color'));
});


Route::get('/dashboard/{role}', function ($role) {
    return view('dashboard', compact('role'));
});