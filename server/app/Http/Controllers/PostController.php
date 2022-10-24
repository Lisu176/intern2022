<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\CategoryPost;

class PostController extends Controller
{
    /**
     * ToDo: 投稿を一覧表示する機能を実装
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        // dd(Post::with('categories'));
        return view('post.index',compact('posts'));
    }

    public function show()
    {


        return redirect()->route('post.index');
    }

    /**
     * ToDo: 新規投稿ページを表示する機能を実装
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('post.create');
    }

    /**
     * ToDo: 新規投稿を登録する機能を実装
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {

        $posts = Post::create([
            'name'=>$request['name'],
            'title'=>$request['title'],
            'comment'=>$request['comment'],
        ]);

        $posts->categories()->sync($request->input('category_id'));


        return redirect()->route('post.index');
    }
    /**
     * ToDo: 投稿編集ページを表示する機能を実装
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // 受け取ったidを元にpostテーブルからレコードを検索
        $post = Post::findOrFail($id);
        // 検索結果をビューに渡す
        return view('post.edit')->with('post',$post);
    }

    /**
     * ToDo: 編集した投稿を登録する機能を実装
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //受け取ったidを元にpostテーブルからレコードを検索
        $post = Post::find($id);
        //値を代入
        $post->title = $request->title;
        $post->comment = $request->comment;
        //保存（更新）
        $post->save();
        //リダイレクト
        return redirect()->to('/post/index');
    }

    /**
     * ToDo: 投稿削除機能を実装
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ////受け取ったidを元に削除対象レコードを検索
        //削除
        Post::findOrfail($id)->delete();
        //リダイレクト
        return redirect()->to('/post/index');
    }
}
