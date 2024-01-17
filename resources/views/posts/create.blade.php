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
        <h1>新たなまとめノートを作成する</h1>
        <form action='\posts' method='POST'>
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}">
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class='subtitle'>
                <h2>単元</h2>
                <input type="text" name=post[unit] placeholder="単元" value="{{ old('post.unit') }}">
                <h2>学習目的</h2>
                <input type="text" name=post[purpose] placeholder="学習目的" value="{{ old('post.purpose') }}">
            </div>
            <div class='point'>
                <h2>Point</h2>
                <textarea name=post[point] placeholder="今回学習した内容の要点">{{ old('post.point') }}</textarea>
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name=post[body] placeholder="ここは本文です。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class='sub1'>
                <h2>参考文献</h2>
                <input type="text" name=post[reference] placeholder="参考文献" value="{{ old('post.reference') }}">
                <h2>メモ</h2>
                <textarea name=post[memo] placeholder="メモ">{{ old('post.memo') }}</textarea>
            </div>
            <input type="submit" value="登録">
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>