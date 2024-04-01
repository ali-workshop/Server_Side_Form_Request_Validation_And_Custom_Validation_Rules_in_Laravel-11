<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use  App\Rules\CustomRulePrice;
use  App\Rules\UpperCaseName;
use App\Http\Requests\MyFormRequest;


class ProductController extends Controller
{
    public function create(){

        return view("product.create");


    }
    
    public function store(Request $request){

        $request->validate([
            "productname"=> ['required','regex:/apple/','min:4',new UpperCaseName] , # Custom Validation Rules
            "price"=> ["required",'integer' ,new CustomRulePrice], 
            "qty" =>["required","integer"],
        ],
    [

        "productname.regcex" => "the product name is not match the pattern man!!!", # customize the error messages.
        "productname.required" => "fill the product name !!!",
        "productname.min" => "the product name is to  small  man!!!",# Inline Custom Validation Messages
        "price.required" => "fill the price man it is required!!!",
        "price.integer" => " the price in not integer man!!!",
        "qty.required" => "fill the quinatity  man it is required!!!",
        "qty.integer" => " the quintity is an integer!!!",
    ]
    
    );


        Product::create($request->all());
       return redirect()->route('welcome')->with("success","the item is added successfully");
   
    }



    
    public function store1(MyFormRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('welcome')->with("success","the item is added successfully");
    
    }



}
