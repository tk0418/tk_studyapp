<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tutorial</title>
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
        <h1>チュートリアル</h1>
        <div class='app'>
            <h2>アプリの使い方</h2>
            <p>学習においてまとめノートを作成することは非常に効果的です。
            勉強や読書、セミナーなどで知識をインプットしたら、それを自分なりに整理することで頭に残りやすくなります。
            そこで、このアプリでは学生や社会人などの様々な学習に対して誰でも簡単にまとめノートを作成することができます。
            ぜひこのアプリを活用し、効果的な学習を行いましょう！
            </p>
        <div class='index'>
            <h2>ノート一覧画面</h2>
            <p>ここではノートの作成、閲覧、削除ができます。
            ここでは作成したノートのタイトル、カテゴリー、ポイントが一覧で表示されます。
            ポイントのみザッと確認したいときに便利です。
            各ノートのタイトルをクリックするとそのノートの詳細へ移ります。
            また、カテゴリー名をクリックすると、そのカテゴリーのノートを一覧で確認できます。</p>
        </div>
        </div>
        <div class="footer">
            <a href="/">ホームへ戻る</a>
        </div>
    </body>
</html>