<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryPost;

class CategoryController extends Controller
{
    public function edit(){
        return view('add.create');
    }

    public function create(Request $request, Post $post)
    {
        $post = POST::category([
            'name'=>$request['category'],
        ]);

        return redirect()->route('post.index');
    }
}
