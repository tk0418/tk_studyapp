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
        <div class='create'>
            <h1>新たなカテゴリーを作成する</h1>
            <form action='/categories' method='POST' enctype="multipart/form-data">
                @csrf
                <div class="category">
                    <h2>追加するカテゴリー名</h2>
                    <input type="text" name=category[name] value="{{ old('category.name') }}">
                    <p class="category_error" style="color:red">{{ $errors->first('category.name') }}</p>
                </div>
                <input type="submit" value="追加">
            </form>
        </div>
        <div class='show'>
            <h2>既存のカテゴリー</h2>
            @foreach ($categories as $category)
            <p>・{{ $category->name }}</p>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>