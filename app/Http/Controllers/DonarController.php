<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\Storage;

class DonarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $categories = Category::get();
        return view('donar',compact('categories'));
    }

    public function donar(Request $request){
        $path = Storage::disk('public')->put('img',$request->file('image'));
        $fill = Product::insert([
            ['name' => $request->name, 'description' => $request->description, 'category_id' => $request->category_id, 'image' => asset($path)]
        ]);

        // return redirect()->route('welcome')->with('success', '¡Genial! Ahora puedes pasar por tu artículo a nuestros puntos de distribuición');   
        return redirect()->back()->with('success', '¡Genial!Gracias por tu donativo'); 

    }
}
