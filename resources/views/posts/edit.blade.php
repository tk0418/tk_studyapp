<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='title'>ノート編集画面</h1>
        <div class='content'>
            <form action='/posts/{{ $post->id }}' method='POST'>
                @csrf
                @method('PUT')
                <div class="content_title">
                    <h2>タイトル</h2>
                    <input type="text" name=post[title] value="{{ $post->title }}">
                </div>
                <div class='content_subtitle'>
                    <h2>単元</h2>
                    <input type="text" name=post[unit] value="{{ $post->unit}}">
                    <h2>学習目的</h2>
                    <input type="text" name=post[purpose] value="{{ $post->purpose }}">
                </div>
                <div class='content_point'>
                    <h2>Point</h2>
                    <textarea name=post[point]>{{ $post->point }}</textarea>
                </div>
                <div class="content_body">
                    <h2>本文</h2>
                    <textarea name=post[body]>{{ $post->body }}</textarea>
                </div>
                <div class="image">
                    <input type="file" name="image" value="{{ $post->image_url }}">
                </div>
                <div class='content_sub1'>
                    <h2>参考文献</h2>
                    <input type="text" name=post[reference] value="{{ $post->reference }}">
                    <h2>メモ</h2>
                    <textarea name=post[memo]>{{ $post->memo }}</textarea>
                </div>
                <input type="submit" value="更新">
            </form>
            <div class="footer">
                <a href="/posts/{{ $post->id }}">ノートへ戻る</a>
            </div>
        </div>
    </body>
</html>