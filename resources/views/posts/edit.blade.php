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
        <h1 class='title'>ノートを編集する</h1>
        <div class='content'>
            <form action='/posts/{{ $post->id }}' method='POST'>
                @csrf
                @method('PUT')
                <div class="content_title">
                    <h2 style='font-weight: bold'>【まとめノート】</h2>
                    <h3>・タイトル</h3>
                    <input type="text" name=post[title] value="{{ $post->title }}">
                </div>
                <div class="category">
                    <h3>・カテゴリー</h3>
                    <select name="post[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class='content_subtitle'>
                    <h3>・学習目的</h3>
                    <input type="text" name=post[purpose] value="{{ $post->purpose }}">
                </div>
                <div class='content_point'>
                    <h3>・ポイント</h3>
                    <textarea name=post[point]>{{ $post->point }}</textarea>
                </div>
                <div class="content_body">
                    <h3>・本文</h3>
                    <textarea name=post[body]>{{ $post->body }}</textarea>
                </div>
                <div class="image">
                    <input type="file" name="image" value="{{ $post->image_url }}">
                </div>
                <div class='content_sub1'>
                    <h3>・参考文献</h3>
                    <input type="text" name=post[reference] value="{{ $post->reference }}">
                    <h3>・メモ</h3>
                    <textarea name=post[memo]>{{ $post->memo }}</textarea>
                </div>
                <div class="checktest">
                    <h2 style='font-weight: bold'>【チェックテスト】</h2>
                    <h3>・問題</h3>
                    <textarea name=post[test] placeholder="問題">{{ $post->test }}</textarea>
                    <h3>・解答</h3>
                    <textarea name=post[solution] placeholder="解答">{{ $post->solution }}</textarea>
                </div>
                <input type="submit" value="更新">
            </form>
            <div class="footer">
                <a href="/posts/{{ $post->id }}">ノートへ戻る</a>
            </div>
        </div>
    </body>
</html>