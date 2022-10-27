@extends('layout.layout')

@section('content')
    <div style="margin:0 auto; text-align:center;">
        <form action="{{ route('add.create') }}" method="POST" >
            @csrf
            <div>
                カテゴリ名<br><input name="category" placeholder="カテゴリの入力欄"/>
            </div>
            <button>送信</button>
        </form>
    </div>
@endsection