<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Test</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://code.jquery.com/jquery.min.js"></script>
        <script>
            $(function() {
                $(".D").click(function() {
                    $
                    (this).closest(".solution").children(".E").slideToggle("");
                });
            });
        </script>
        <style>
            .D {
                display: inline-block;
                background: #b6beff;
                padding: 5px 10px;
                cursor: pointer;
                }
            .E {
                background: #b6beff;
                height: 100px;
                display:none
                }
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
                font-size:36px;
                color:#7172ac;
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
            .q-title {
                font-size: 20px;
                background: linear-gradient(whitesmoke, lightgray);
            }
        </style>
    </head>
    <x-app-layout>
        <x-slot name="header">
            　Check Test
        </x-slot>
            <body>
                <div style="margin: 0em 1.5em">
                    <h1 style="padding: 0.1em 0.1em;
                    text-align: center;
                    letter-spacing: 5px;
                    font-family: monospace;
                    font-weight; bold;">
                      チェックテスト一覧  
                    </h1>
                </div>
                <div class='tests'>
                    @foreach ($posts as $post)
                    @if ($post->test)
                    <div class="content">
                        <div class='q-title'>
                        <a href="/posts/{{ $post->id }}">
                                    <p>{{ $post->title }}</p>
                        </a>
                        </div>
                        <div class="question"
                        style="font-size: 18px">
                            <p>{{ $post->test }}</p>    
                        </div>
                        <div class="solution">
                            <div class="D">解答</div>
                            <div class="E">{{ $post->solution }}</div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </body>
    </x-app-layout>
</html>