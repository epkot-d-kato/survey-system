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
    <section id=main>

        <form method="POST" action="/survey/store">
            @csrf

            <div id="question_place">
                <p>1.旅行に行くならどこに行きたいですか?</p>
                <input type="radio" name="place" value="東京">東京
                <input type="radio" name="place" value="名古屋">名古屋
                <input type="radio" name="place" value="大阪">大阪
            </div>

            <div id="question_budget">
                <p>2.予算はどれくらいですか?</p>
                <input type="radio" name="budget" value="10万">10万
                <input type="radio" name="budget" value="100万">100万
                <input type="radio" name="budget" value="1000万">1000万

                <p>これで質問は終わりです。</p>
                <p>回答が完了したら送信ボタンをクリックしてください</p>
                <p><button type="submit">送信</button></p>

            </div>

        </form>

        <button onclick="location.href='/survey/home'">中止</button>

    </section>

</body>

</html>