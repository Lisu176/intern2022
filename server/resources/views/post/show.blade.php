@extends('layout.layout')

@section('content')
<h1>一覧表示</h1>
    <div class="row">
        <div class="col-sm-12">
        <a href="{{ route('post.create') }}" class="btn btn-primary" style="margin:20px;">新規投稿</a>
        <a href="" class="btn btn-primary" style="margin:20px;">カテゴリ追加</a>
        </div>
    </div>
  <table class="table table-striped">
  <tr>
        <td style="width:70px">投稿ID</td>
        <td>タイトル</td>
        <td>コメント</td>
        <td style="width:100px">投稿時間</td>
        <td style="width:100px">更新時間</td>
        <td>カテゴリ</td>
    </tr>

    @foreach($posts[$id] as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->comment}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
        <td>
            @foreach($post->categories as $category)
                {{$category->name}}
            @endforeach
        </td>
        <td>
        <button href="{{route('post.index')}}"  class="btn btn-primary"></button>
        </td>
    </tr>
    @endforeach
  </table>
@endsection