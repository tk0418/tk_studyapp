<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .title {
                padding: 0.5em 1em;
                margin: 2em 0;
                color: #474747;
                background: whitesmoke;/*背景色*/
                border-left: double 7px #4ec4d3;/*左線*/
                border-right: double 7px #4ec4d3;/*右線*/
            }
            .title p {
                margin: 0; 
                padding: 0;
            }
        </style>
    </head>
    <x-app-layout>
        <x-slot name="header">
            　Index
        </x-slot>
            <body>
                <h1 style="
                    background: #dfefff;
                    box-shadow: 0px 0px 0px 5px #dfefff;
                    border: dashed 2px white;
                    padding: 0.2em 0.5em;
                ">
                  カテゴリー：
                </h1>
                <div class='posts'>
                    @foreach ($posts as $post)
                        <div class='post'>
                            <h1 class='title'>
                                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                            </h1>
                            <p class='point'>{{$post->point}}</p>
                            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deletePost({{ $post->id }})">ノートを削除</button> 
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
                <div class='paginate'>
                    {{ $posts->links() }}
                </div>
                <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </body>
    </x-app-layout>
</html>