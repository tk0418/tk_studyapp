<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            h1 {
              position: relative;
              background: #f1f8ff;
              padding: 0.25em 0.5em;
              border-left: solid 0.5em #5c9ee7;
            }
            
            h1:first-letter {
                font-size:42px;
                color:black;
            }
            .purpose {
              position: relative;
              line-height: 0.08;
              padding:0.25em 1em;
              display: inline-block;
              top:0;
            }
            
            .purpose:before, .purpose:after { 
              position: absolute;
              top: 0;
              content:'';
              width: 8px;
              height: 80%;
              display: inline-block;
            }
            .purpose:before {
              border-left: solid 2.5px black;
              border-top: solid 2.5px black;
              border-bottom: solid 2.5px black;
              left: 0;
            }
            .purpose:after {
              content: '';
              border-top: solid 2.5px black;
              border-right: solid 2.5px black;
              border-bottom: solid 2.5px black;
              right: 0;
            }
            .point {
                position: relative;
                margin: 2em 2em;
                padding: 25px 10px 7px;
                border: solid 2px royalblue;
                background: azure;
            }
            .point .point_title {
                position: absolute;
                display: inline-block;
                top: -2px;
                left: -2px;
                padding: 0 9px;
                height: 25px;
                line-height: 25px;
                font-size: 18px;
                background: royalblue;
                color: white;
                font-weight: bold;
            }
            .point p {
                font-family: serif;
                font-weight: bold;
                margin: 0; 
                padding: 1.5em 1.5em;
            }
            .content {
                padding: 0.5em 1em;
                margin: 2em 0;
                color: #474747;
                background: whitesmoke;/*背景色*/
                border-left: double 7px #4ec4d3;/*左線*/
                border-right: double 7px #4ec4d3;/*右線*/
            }
            .content p {
                margin: 0; 
                padding: 0;
            }
        </style>
    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="test">
            <button onclick="location.href='/posts/{{ $post->id }}/test'">チェックテスト</button><br>
        </div>
        <div class='subtitle'>
            <div style="
            padding: 0em 0.5em;
            text-decoration:underline;
            line-hight:5">
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            </div>
            @if ($post->purpose)
            <div class='purpose'>
                <h3>学習目的: {{ $post->purpose }}</h3>
            </div>
            @endif
        </div>
        @if($post->point)
            <div class='point'>
                <span class='point_title'>Point！</span>
                    <p>{{$post->point}}</p>
            </div>
        @endif
        <div class="content">
            <div class="content__post">
                <p>{{ $post->body }}</p>    
            </div>
            @if($post->image_url)
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
        </div>
        <div class='sub1'>
            @if ($post->reference)
                <h3>参考文献: {{ $post->reference }}</h3>
            @endif
            @if ($post->memo)
                <h3>メモ</h3>
                <p style='background:whitesmoke'>{{ $post->memo }}</p>
            @endif
        </div>
        <div class='sub2'>
            {{ $post->created_at }} <br>
            {{ $post->updated_at }}
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">ノートを編集する</a>
        </div>
        <div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
    </body>
</html>