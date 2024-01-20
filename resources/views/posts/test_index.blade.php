<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Test</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
            　Check Test
        </x-slot>
            <body>
                <h1 style="
                    background: #dfefff;
                    box-shadow: 0px 0px 0px 5px #dfefff;
                    border: dashed 2px white;
                    padding: 0.2em 0.5em;
                ">
                  チェックテスト一覧  
                </h1>
                <div class='tests'>
                    @foreach ($posts as $post)
                        <div class="question">
                            <p>{{ $post->test }}</p>    
                        </div>
                        @if ($post->test)
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
                            .D {
                                display: inline-block;
                                background: #b6beff;
                                padding: 5px 10px;
                                cursor: pointer;
                            }
                            .E {
                                background: #ffaf74;
                                height: 100px;
                                display:none
                            }
                            </style>
                            <div class="D">解答</div>
                            <div class="E">{{ $post->unit }}</div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </body>
    </x-app-layout>
</html>