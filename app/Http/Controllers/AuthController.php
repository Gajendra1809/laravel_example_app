<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view("auth.login",['data'=>'This is data']);
    }

    public function user($id){
        return $id;
    }

    public function listUsers(){
         $users=User::get();
         return view('auth.login',['data'=>$users]);
    }

    public function insertProducts(){
        return view('auth.login');
    }

    public function insertProductsPost(Request $request){
        $request->validate([
            "name"=>"required",
            "slug"=>"required",
            "price"=>"required",
            "date"=>"required"
        ]);
        $product=new Products();
        $product->product_name=$request->name;
        $product->slug=$request->slug;
        $product->price=$request->price;
        $product->date=$request->date;
        if($product->save()){
            return "Value inserted";
        }else{
            return "Value not inserted";
        }
        //return $request;
    }

    public function updateProductsPost(Request $request){
        $request->validate([
            "name"=>"required",
            "slug"=>"required",
            "price"=>"required",
            "date"=>"required"
        ]);
        $product=Products::where("slug",$request->slug)->first();
        $product->product_name=$request->name;
        $product->slug=$request->slug;
        $product->price=$request->price;
        $product->date=$request->date;
        if($product->save()){
            return "Value Updated";
        }else{
            return "Value not updated";
        }
    }

    public function deleteProduct($slug){
        $product=Products::where("slug",$slug)->first();
        if($product->delete()){
            return "Value deleted";
        }else{
            return "Value not deleted";
        }

    }
}
