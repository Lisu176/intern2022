<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index(){
        return view('category.edit');
    }

    public function edit(Request $request, Post $post)
    {
        // $post = $request->all();
       $post->testForMe();

        return redirect()->route('post.index');
    }
}
