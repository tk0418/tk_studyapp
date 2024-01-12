<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            .body{
                padding: 0.5em 1em;
                margin: 2em 0;
                color: #474747;
                background: whitesmoke;/*背景色*/
                border-left: double 7px #4ec4d3;/*左線*/
                border-right: double 7px #4ec4d3;/*右線*/
            }
            .body p {
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
                  My Posts  
                </h1>
                <a href='/posts/create'>投稿を作成する</a>
                <div class='posts'>
                    @foreach ($posts as $post)
                        <div class='post'>
                            <h2 class='title'>
                                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                            </h2>
                            <p class='body'>{{$post->body}}</p>
                        </div>
                    @endforeach
                </div>
            </body>
    </x-app-layout>
</html>