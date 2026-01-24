<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form action="{{route('reports.store')}}" method="post" style="display: flex;">
        @csrf
        <input type="text" name="number" id="number" placeholder="Номер авто">
        <textarea name="description" id="description" placeholder="Описание"></textarea>
        <input type="submit" value="save">
    </form>
</body>
</html>