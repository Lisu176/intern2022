<!-- 閲覧 -->
@include("parts.bbs_entry_form")

<h2>記事一覧</h2>

@foreach ($posts as $post)
    <div class="enrty">
        <h5>{{ $post->title }}</h5>
        <div>{{ $post->comment }}</div>
    </div>
@endforeach


@if(count($posts) < 1)
    <p>投稿がありません</p>
@endif