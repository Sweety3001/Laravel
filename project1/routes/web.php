<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// for displaying file we in veiw and have to create file with.blade.php extension in resources/views folder
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function(){
    return "sorry i am bussy";
});
Route::get('/dash',function(){
    return "<h1 style='color:red'> hellow guys dekho n dekho nnn guysssss </h1>";
});
Route::get('/name',function(){
    $name="sweety";
    return $name;
});
// route para
Route::get('/name/{name}',function($name){
    
    return $name;
});
// default para
Route::get("/na/{name?}",function($name="bharti"){
    return $name;
});
// 
Route::get("/evenodd/{num}",function($num){
    if($num%2==0) return "even";
    else return "odd";
});
// create grade system

Route::get("/withdata",function(){
    return view("data")->with("name","sawli");
});


// redirecting route
// Route::get("product",function(){
//     return "hello this is product of website";
// });
// Route::get("list",function(){
//     return redirect('product');
// });

// redirect with parameter
Route::get("product/{name}",function($name){
    return "hello this is product of website and product name is $name";
});
Route::get("list/{item}",function($item){
    return redirect("product/{$item}");
});
// redirect with parameter with potional para
Route::get("product/{name?}",function($name=null){
    return "hello this is product of website and product name is $name";
});
Route::get("list/{item?}",function($item=null){
    return redirect("product/{$item}");
});

Route::get("header",function(){
    return response("hello added")
    ->header("content-type","text/plain")
    ->header("author","the greatest sawli");
});

Route::get("setcookie",function(){
    return response("cookies set Succesfully")
    ->cookie("username","Sawli ",120);
});

// set get delete cookie
use Illuminate\Http\Request;
Route::get("getcookie",function(Request $request){
    return $request->cookie("username");
});

Route::get("deletecookie",function(){
    return response("cookie deleted successfully")
    ->cookie("username",null,-1);
    
});

// share data with all view file
Route::get("products",function(){
    $productName="mango";
    return view("products",compact("productName"));
});
Route::get("productlists",function(){
    return view("productlist");
});
Route::get("dashboard",function(){
    return view("dashboard");
});


Route::get("lpu/admin/teacher/index",function(){
    return view("teacher");
})->name("lata");
Route::get("lpu/admin/student/index",function(){
    return view("student");
})->name("lassi");
Route::get("lpu/admin/vendor/index",function(){
    return view("vendor");
})->name("lavi");

Route::get("studentinfo",function(){
    $students=[
        ["name"=>"sawli","age"=>21,"city"=>"phagwara"],
        ["name"=>"sweety","age"=>21,"city"=>"phagwara"],
        ["name"=>"sawli","age"=>21,"city"=>"phagwara"],
        ["name"=>"sawli","age"=>21,"city"=>"phagwara"],
        ["name"=>"sawli","age"=>21,"city"=>"phagwara"],
    ];
    
    return view("studentInfo",compact('students'));
});
Route::get("studentinfo/{name}",function($name){
    $students=[
        ["name"=>"sawli","age"=>21,"city"=>"phagwara"],
        ["name"=>"sweety","age"=>21,"city"=>"phagwara"],
        ["name"=>"sawli","age"=>21,"city"=>"phagwara"],
        ["name"=>"sweety","age"=>21,"city"=>"phagwara"],
        ["name"=>"sawli","age"=>21,"city"=>"phagwara"],
    ];
    
    return view("studentInfo",compact('students','name'));
});


// json data
Route::get("jsondata",function(){
    return response()->json([
        "name"=>"sawli",
        "age"=>21,
        "city"=>"phagwara"
    ]);
});

use App\Http\Controllers\userController;
// use App\Http\Controllers\productController;
use App\Http\Controllers\employeeController;
Route::get("getproduct",[productController::class,"productList"]);
Route::get("getemployeedata",[employeeController::class,"employeeData"]);

// use App\Http\Controllers\studentController;
Route::get("studenthomepage",[studentController::class,"index"]);

//
// include
Route::get("home",function(){
    return view("home");
});

// getting curent url
Route::get("/about",function(){

});

// use App\Http\Controllers\productController;
Route::get("index",[productController::class,"index"]);
Route::get("sweety",[productController::class,"about"]);


use App\Http\Controllers\studentController;
Route::resource("resourcecontroller",studentController::class);

Route::get("admin/index",function(){
    return "thiis is admin index page";
});
Route::get("admin/about",function(){
    return "thiis is admin about page";
});
Route::get("admin/contact",function(){
    return "thiis is admin contact page";
});


Route::prefix("admin")->group(function(){
    Route::get("index",function(){
        return "thiis is admin index page";
    });
    Route::get("about",function(){
        return "thiis is admin about page";
    });
    Route::get("contact",function(){
        return "thiis is admin contact page";
    });
});


//group
Route::group([],function(){
    Route::get("index",function(){
        return "thiis is admin index page";
    });
    Route::get("about",function(){
        return "thiis is admin about page";
    });
    Route::get("contact",function(){
        return "thiis is admin contact page";
    });
});

//Controller prefix
use App\Http\Controllers\productController;
Route::prefix("admin")->group(function(){
    Route::get("index",[productController::class,"index"]);
    Route::get("about",[productController::class,"about"]);
    Route::get("contact",[productController::class,"contact"]);
});

Route::get('user1/{id}', function ($id) {
    return  $id;
})->where('id', '[0-9]+');
Route::get('user2/{id}', function ($id) {
    return  $id;
})->where('id', '[a-zA-Z]+');
Route::get('user3/{id}', function ($id) {
    return  $id;
})->where('id', '[0-9a-zA-Z]+');



// passing data using with() method
// in the bookstore application, you need to display the details of a specific book on a page.The book's details(title, author, price and description)
//instuction:
//instructions
//create a route in web.php that handles displaying a book by its ID
//create the blade view to display the book details, including its title, author, price and description

//expected output
//title:
//author:
//price:
//description:



Route::get("/withfnc",function(){
    return view("dataBook")->with("Title","Laravel Handbook")
    ->with("Author","Sweety Pradhan")
    ->with("Price","100 Rs")
    ->with("Description","A novel set in the 1920s");
});