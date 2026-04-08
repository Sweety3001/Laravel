<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    function show(){
        return "product page";
    }
    function productList(){
        $product=["mango","banana","lichi"];
        return view("productlist",compact('product'));
    }
    function showproductlist(){
        $product=["Laravel","java","Data Science"];
        return view("productlist")->with('product',$product);
    }
    function index(){
        $product=["Laravel","java","Data Science"];
        return view("productlist")->withProducts($product);
    }
}
