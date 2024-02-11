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
        <form action='/posts' method='POST' enctype="multipart/form-data">
            @csrf
            <div calss='content'>
                <h2 style='font-weight: bold'>【まとめノート】</h2>
            <div class="title">
                <h3>・タイトル</h3>
                <input type="text" name=post[title] placeholder="タイトル" value="{{ old('post.title') }}">
                <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="category">
                <h3>・カテゴリー</h3>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class='subtitle'>
                <h3>・学習目的</h3>
                <input type="text" name=post[purpose] placeholder="学習目的" value="{{ old('post.purpose') }}">
            </div>
            <div class='point'>
                <h3>・ポイント</h3>
                <textarea name=post[point] placeholder="今回学習した内容の要点">{{ old('post.point') }}</textarea>
            </div>
            <div class="body">
                <h3>・本文</h3>
                <textarea name=post[body] placeholder="ここは本文です。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div class="image">
                <input type="file" name="image"> 
            </div>
            <div class='sub1'>
                <h3>・参考文献</h3>
                <input type="text" name=post[reference] placeholder="参考文献" value="{{ old('post.reference') }}">
                <h3>・メモ</h3>
                <textarea name=post[memo] placeholder="メモ">{{ old('post.memo') }}</textarea>
            </div>
            </div>
            <div class="checktest">
                <h2 style='font-weight: bold'>【チェックテスト】</h2>
                <h3>・問題</h3>
                <textarea name=post[test] placeholder="問題">{{ old('post.test') }}</textarea>
                <h3>・解答</h3>
                <textarea name=post[solution] placeholder="解答">{{ old('post.solution') }}</textarea>
            </div>
            <input type="submit" value="登録">
        </form>
        <div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
    </body>
</html>