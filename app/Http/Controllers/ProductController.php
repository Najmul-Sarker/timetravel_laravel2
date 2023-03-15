<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('backend.product.index',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        return view('backend.product.create',compact('categories'));
    }
    public function store(Request $request){

        $image = $request->file('image');
        $request->validate([
            'category_id' => 'required',
            'title'=> ['required',Rule::unique('products','title')],
            'description'=> 'required',
            'price'=>'required',
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);

        if($image){
            $image_name = uniqid().'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(200,250)->save(public_path('storage/products/'.$image_name));
        }


        Product::create([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$image_name,
        ]);

        return redirect(route('product.index'))->with('success','New Product Create Successfully');

    }
    public function show(Product $product){
        // dd($product);
        // $product = Product::find($id);
        return view('backend.product.show',compact('product'));
    }
    public function edit(Product $product){
        $categories = Category::all();
        // $product = Product::find($id);
        // dd($categories);
        
        return view('backend.product.edit',compact('product','categories'));
    }

    public function update(Product $product,Request $request){
        $image = $request->file('image');
        $request->validate([
            'category_id' => 'required',
            'title'=> 'required',
            'description'=> 'required',
            'price'=>'required',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        if($image){
            $path = public_path('storage/products/'.$product->image);
            if(file_exists($path)){
                unlink($path);
            }

            $image_name = uniqid().'.'.$image->getClientOriginalExtension();

            Image::make($image)->resize(200,250)->save(public_path('storage/products/'.$image_name));
        }else{
            $image_name = $product->image;
        }

        $product->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$image_name,
        ]);

        return redirect(route('product.index'))->with('success','Product Updated Successfully');
    
    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success','Product Deleted Successfully');
    }
}
