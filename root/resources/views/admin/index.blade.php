<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>場所</th>
            <th>予算</th>
        </tr>

        @foreach ($surveys as $survey)
        <tr>
            <td>{{$survey -> id}}</td>
            <td>{{$survey -> place}}</td>
            <td>{{$survey -> budget}}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>