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
              border-left: solid 2em #5c9ee7;
            }
            
            h1:before {
              font-family: "FontAwesome";
              content: "\f040";
              position: absolute;
              padding: 0em;
              color: white;
              font-weight: 900;
              left: -1.35em;
              top: 50%;
              -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
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
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>