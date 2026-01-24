<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form action="{{route('reports.update', $report->id)}}" method="post" style="display: flex;">
    @method('put')    
    @csrf
        <input type="text" name="number" id="number" placeholder="Номер авто" value="{{$report['number']}}">

        <textarea name="description" id="description" placeholder="Описание">{{$report['description']}}</textarea>
        <input type="submit" value="Update">
    </form>
    <a href="{{route('report.index')}}">Репорты</a>
</body>
</html>