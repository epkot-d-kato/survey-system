<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/survey/home.css')}}">
    <title>Document</title>
</head>

<body>
    @include('/survey/common')
    
    <section class="main">
        <p>回答時間の目安:1分半～3分前後</p>
        <p>ご不明な箇所は面談時にお聞きしますので仮回答で結構です。</p>

        <p>御社で申請できる助成金の種類と見積りを試算するため、簡単なアンケートをお願いしております。</p>
        <p>ご協力の程よろしくお願いします。</p>
        <small>株式会社グラントシー</small>
        <hr>
    </section>

    <button class="start" onclick="location.href='/survey/answer'">はじめる</button>
</body>

</html>