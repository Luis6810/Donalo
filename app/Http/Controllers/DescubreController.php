<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DescubreController extends Controller
{
    public function index(){
        $products = Product::join('categories','products.category_id','=','categories.id')
        ->select('products.*', \DB::raw('categories.name as categorie_name'))
        ->paginate();
        // $products = Product::orderBy('id','DESC')->paginate();
        return view('descubre', compact('products'));
    }

    public function categorie(Request $request,$categorie){

        // $products = Product::whereHas('category',function($query,$categorie){
        //     $query->where('categories.name',$new);
        // })->get();

        $products = Product::join('categories','products.category_id','=','categories.id')
        ->select('products.*', \DB::raw('categories.name as categorie_name') )
        ->where('categories.name',$categorie)
        ->paginate();
        $categorie=true;

        // $products = Product::where('categorie')->orderBy('id','DESC')->get();
        return view('descubre', compact('products','categorie'));
    }
}
