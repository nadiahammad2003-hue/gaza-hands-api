<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->icon = $request->icon;
        $category->save();
        return response()->json([
            'status'=>'success',
            'message'=>'Category created successfully!',
            'data'=>$category ,201
        ]);

        
    }
}
