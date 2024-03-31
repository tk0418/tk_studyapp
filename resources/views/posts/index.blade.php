<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            h1 {
              position: relative;
              margin: 0em 0.7em;
              padding: 0em 0.2em;
              border-top: solid 2px black;
              border-bottom: solid 2px black;
            }
            h1:before, h1:after {
              content: '';
              position: absolute;
              top: -7px;
              width: 2px;
              height: -webkit-calc(100% + 14px);
              height: calc(100% + 14px);
              background-color: black;
            }
            h1:before {
              left: 7px;
            }
            h1:after {
              right: 7px;
            }
            h1:first-letter {
                font-size:42px;
                color:#7172ac;
            }
            .post {
                padding: 0.5em 1em;
                margin: 2em 0;
                background: lavender;/*背景色*/
                border-left: double 10px black;/*左線*/
            }
            .title {
                padding: 0.5em 1em;
                margin: 0.7em 0;
                color: black;
                background: white;
                font-family: "fantasy";
                font-size: 22px;
                font-weight: bold;
            }
            .point {
                position: relative;
                margin: 2em 2em;
                padding: 25px 10px 7px;
                border: solid 2px royalblue;
                background: lightcyan;
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
        </style>
    </head>
    <x-app-layout>
        <x-slot name="header">
            　Index
        </x-slot>
            <body>
                <div class="title" style="margin: 0em 0.5em">
                    <h1 
                    style="padding: 0.1em 0.1em;
                    text-align: center;
                    letter-spacing: 5px">
                    すべてのノート</h1>
                </div>
                <p style="text-align: right;
                letter-spacing: 2px;
                font-weight: bold;
                text-decoration: underline"><a href='/tutorial/index'>アプリの使い方はこちら</a></p>
                <div class='posts'>
                    @foreach ($posts as $post)
                        <div class='post'>
                            <h2 class='title'>
                                <a href="/posts/{{ $post->id }}">
                                    <p>{{ $post->title }}</p>
                                </a>
                            </h2>
                            <a href="/categories/{{ $post->category->id }}" style="text-decoration:underline; margin: 0em 1em">{{ $post->category->name }}</a>
                            @if($post->point)
                                <div class='point'>
                                    <span class='point_title'>Point！</span>
                                    <p>{{$post->point}}</p>
                                </div>
                            @endif
                            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletePost({{ $post->id }})" style="color:red">[ノートを削除]</button> 
                            </form>
                            <script>
                                function deletePost(id) {
                                    'use strict'
                            
                                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                                        document.getElementById(`form_${id}`).submit();
                                    }
                                }
                            </script>
                        </div>
                    @endforeach
                </div>
                <div class='create'>
                    <button onclick="location.href='/posts/create'">[新しいノートを作成する]</button>
                </div>
                <div class='categories'>
                    <a href='/categories/create'>[カテゴリーを追加する]</a>
                </div>
                <div class='paginate'>
                    {{ $posts->links() }}
                </div>
                <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </body>
    </x-app-layout>
</html>