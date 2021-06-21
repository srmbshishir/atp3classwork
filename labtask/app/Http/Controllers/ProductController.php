<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

    public function insert(Request $req){
        $product = new Product;
        
        $product->name              = $req->productname; 
        $product->price             = $req->price; 
        $product->product_condition = $req->condition; 
        $product->category          = $req->category; 
        

        if($req->hasFile('image')){
            $file = $req->file('image');
            // echo "file name: ".$file->getClientOriginalName()."<br>";
            // echo "file extension: ".$file->getClientOriginalExtension()."<br>";
            // echo "file Mime Type: ".$file->getType()."<br>";
            // echo "file Size: ".$file->getSize();
            $product->image = $file->getClientOriginalName();
            $product->save();

            if($file->move('upload', 'abc.'.$file->getClientOriginalExtension())){
                echo "success";
            }else{
                echo "error..";
            }

        }else{
            echo "file not found!";
        }

        return redirect()->route('product.list');
    }

    public function list(){
        $products = Product::all();
        return view('Product.userlist')->with('userlist', $products);
       // return view('Product.userlist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $product = Product::find($name);
        return view('product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $name)
    {
        $product= Product::find($name);
        $product->name = $req->productname;
        $product->price = $req->price;
        $product->product_condition = $req->condition;
        $product->category = $req->category;
        $product->save();

        return redirect()->route('product.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($name)
    {
        $product = Product::find($name);
        $product->delete();
        return redirect()->route('product.list');
    }
}
