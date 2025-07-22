<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
       public function index(){
        $products = Product::all();// Fetch all products from the database
        // Pass the products to the view in the index
        return view('products.index',['products' => $products]);//hahha kaylangan pah diay ni buhaton sab para magamit sa view
       }

        public function create(){

            return view ('products.create');
        }
        public function store(Request $request){
            // Logic to store the product
            // Validate and save the product data
            // Redirect or return a response
           $data =$request->validate([
            'name'=> 'required',
            'qty'=>'required',
            'price'=>'required',
            'description'=>'required',  
           ]);
           $newProduct= Product::create($data);
              return redirect()->route('product.index');
        }
        public function edit(Product $product){
            return view('products.edit',['product'=>$product]);
        }
        public function update(Product $product,Request $request){
             $data =$request->validate([
            'name'=> 'required',
            'qty'=>'required',
            'price'=>'required',
            'description'=>'required', 
            ]);
            // Logic to edit the product
            $product->update($data);
            return redirect()->route('product.index');
        }
    
}
