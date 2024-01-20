<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Check Test</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='title'>チェックテストを作成・編集する</h1>
        <div class='content'>
            <form action='/posts/{{ $post->id }}' method='POST'>
                @csrf
                @method('PUT')
                <div class="solution">
                    <h2>問題</h2>
                    <textarea name=post[test]>{{ $post->test }}</textarea>
                </div>
                <div class='solution'>
                    <h2>解答</h2>
                    <textarea name=post[solution]>{{ $post->solution }}</textarea>
                </div>
                <input type="submit" value="更新">
            </form>
            <div class="footer">
                <a href="/posts/{{ $post->id }}">ノートへ戻る</a>
            </div>
        </div>
    </body>
</html>