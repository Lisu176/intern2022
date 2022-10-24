@extends('layout.layout')

@section('content')
    <div style="margin:0 auto; text-align:center;">
        <form action="{{ route('post.store') }}" method="POST" >
            @csrf
            <div>
                名前：<input name="name" placeholder="名前の入力欄"/>
            </div>
            <div>
                タイトル：<input name="title" placeholder="タイトルの入力欄"/>
            </div>
            <div>
                <textarea name="comment" placeholder="内容の入力"></textarea>
            </div>
            <div>
                Test<input type="checkbox" name="category_id" value="0" {{ old("category_id") == 1 ? "checked" : "" }} />
                edit_log<input type="checkbox" name="category_id" value="1" {{ old("category_id") == 2 ? "checked" : "" }} />
            </div>
            <button>送信</button>
        </form>

    </div>
@endsection

