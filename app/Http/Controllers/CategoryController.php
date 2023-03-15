<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        
        return view('backend.category.index',compact('categories'));
    }


    public function create(){
        return view('backend.category.create');

    }


    public function store(Request $request){
            $request->validate([
                'title' => ['required',Rule::unique('categories','title')],
                'description' => 'required'
            ],[
                "title.required"=>"Enter your Title",
                "description.required"=>"Write your description here"
            ]
            
        );
      

        
        Category::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);


        
        
        return redirect(route("category.index"))->with('success','Category Create Successfully');
    }


    public function show(Category $category){
        // $category = DB::table('categories')->find($id);
        //now using model
        // $category = Category::find($id);
        return view('backend.category.show',compact('category'));
    }
    public function edit(Category $category){
        // $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
    }


    public function update(Category $category,Request $request){
        $request->validate([
            'title' => ['required',Rule::unique('categories','title')->ignore($category->id)],
            'description' => 'required'
        ],[
            "title.required"=>"Enter your Title",
            "description.required"=>"Write your description here"
        ]
        
    );
    $category->update([
        "title"=>$request->title,
        "description"=>$request->description
    ]);

    return redirect(route("category.index"))->with('success','Category Updated Successfully');

    }


    public function delete(Category $category){
        // Category::where('id',$id)->delete();
        $category->delete();
        return redirect(route("category.index"))->with('success','Category Deleted Successfully');

    }

}
