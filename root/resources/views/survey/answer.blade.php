<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="/survey/store" >
        @csrf

        <p>1.旅行に行くならどこに行きたいですか?</p>
        <input type="radio" name="place" value="東京">東京
        <input type="radio" name="place" value="名古屋">名古屋
        <input type="radio" name="place" value="大阪">大阪

        <p>2.予算はどれくらいですか?</p>
        <input type="radio" name="budget" value="10万">10万
        <input type="radio" name="budget" value="100万">100万
        <input type="radio" name="budget" value="1000万">1000万

        <p><button type="submit">送信</button></p>

    </form>

    <button onclick="location.href='/survey/home'">中止</button>

</body>

</html>