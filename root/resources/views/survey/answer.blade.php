<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('/js/survey/answer.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/css/survey/answer.css')}}">
    <title>Document</title>
</head>

<body>
    <section id="header">
        @include('/survey/common')
    </section>


    <section class="step_bar">
        <ul>
            <li class="circle" data-id="1">1</li>
            <li class="bar">&emsp;</li>
            <li class="circle" data-id="2">2</li>
            <li class="bar">&emsp;</li>
            <li class="circle" data-id="3">3</li>
        </ul>
    </section>

    <section id="main">

        <form method="POST" action="/survey/store">
            @csrf

            <div class="question" data-id="1">
                <p>1.旅行に行くならどこに行きたいですか?</p>
                <input type="radio" name="place" value="東京">東京
                <input type="radio" name="place" value="名古屋">名古屋
                <input type="radio" name="place" value="大阪">大阪
            </div>

            <div class="question" data-id="2" style="display:none;">
                <p>2.予算はどれくらいですか?</p>
                <input type="radio" name="budget" value="10万">10万
                <input type="radio" name="budget" value="100万">100万
                <input type="radio" name="budget" value="1000万">1000万
            </div>

            <div class="question" data-id="3" style="display:none;">
                <p>3.誰と一緒にいきたいですか？</p>
                <input type="radio" name="accompany" value="家族">家族
                <input type="radio" name="accompany" value="友人">友人
                <input type="radio" name="accompany" value="一人">一人
            </div>

            <div class="question" data-id="4" style="display:none;">
                <p>これで質問は終わりです。</p>
                <p>送信ボタンをクリックしてください。</p>
                <p><button type="submit">送信</button></p>
            </div>
        </form>

    </section>

    <section class="controller_button">

        <div id="back_question">
            <button>戻る</button>
        </div>

        <div id="next_question">
            <button>進む</button>
        </div>

        <div id="cancel_question">
            <button onclick="location.href='/survey/home'">中止</button>
        </div>


    </section>




</body>

</html>