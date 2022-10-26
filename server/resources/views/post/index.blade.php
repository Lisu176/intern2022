@extends('layout.layout')

@section('content')
<h1>一覧表示</h1>
 <div class="row">
      <div class="col-sm-12">
          <a href="{{ route('post.create') }}" class="btn btn-primary" style="margin:20px;">新規投稿</a>
          {{-- <a href="{{ route('post.addcategory') }}" class="btn btn-primary" style="margin:20px;">カテゴリ追加</a>  --}}
      </div>
  </div>
  <table class="table table-striped">
  <tr>
        <td style="width:70px">投稿ID</td>
        <td>タイトル</td>
        <td>コメント</td>
        <td style="width:100px">投稿時間</td>
        <td>カテゴリ</td>
        <td colspan=”3” style="width:75px"></td>
        <td style="width:75px">各種操作</td>
        <td style="width:75px"></td>
    </tr>

    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->comment}}</td>
        <td>{{$post->created_at}}</td>
        <td>
            @forelse($post->categories as $category)
                {{$category->name}}
            @empty
            @endforelse
        </td>
        <td><a href="{{ route('post.show', ['post'=>$post->id]) }}" class="btn btn-primary btn-sm">詳細</a></td>
        <td><a href="{{ route('post.edit', ['post'=>$post->id]) }}" class="btn btn-primary btn-sm">編集</a></td>
        <td>
            <form method="post"  action="{{ route('post.destroy', ['post'=>$post->id]) }}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" value="削除" class="btn btn-danger btn-sm btn-destroy">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
    @endforeach
  </table>
@endsection