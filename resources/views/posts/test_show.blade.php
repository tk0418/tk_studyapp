<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Check Test</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            h1 {
              position: relative;
              background: whitesmoke;
              padding: 0.25em 0.5em;
              border-left: solid 2em #5c9ee7;
            }
            
            h1:before {
              font-family: "FontAwesome";
              content: "\f040";
              position: absolute;
              padding: 0em;
              color: black;
              font-weight: 900;
              left: -1.35em;
              top: 50%;
              -webkit-transform: translateY(-50%);
              transform: translateY(-50%);
            }
            
            .content {
                padding: 0.5em 1em;
                margin: 2em 0;
                color: black;
                background: #e6e6fa;/*背景色*/
                border-left: double 7px black;/*左線*/
                border-right: double 7px white;/*右線*/
            }
            .content p {
                margin: 1em 1em; 
                padding: 0;
            }
        </style>
    </head>
    <body>
        <h1 class="site_title">
            チェックテスト
        </h1>
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="content">
            <div class="question">
                <p>{{ $post->test }}</p>    
            </div>
            <div class="solution">
                <script src="https://code.jquery.com/jquery.min.js"></script>
                <script>
                $(function() {
                    $(".D").click(function() {
                        $(".E").slideToggle("");
                    });
                });
                </script>
                <style>
                .D{
                    display: inline-block;
                    background: #b6beff;
                    padding: 5px 10px;
                    cursor: pointer;
                }
                .E{
                    background: #b6beff;
                    height: 100px;
                    display:none
                }
                </style>
                <div class="D">解答</div>
                <div class="E">{{ $post->solution }}</div>
            </div>
        </div>
        <div class="footer">
            <a href="/posts/{{ $post->id }}">ノートへ戻る</a>
        </div>
    </body>
</html>