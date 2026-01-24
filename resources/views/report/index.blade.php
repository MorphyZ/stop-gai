<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <table class="table-card">
        <thead>
            <tr>
                <th>Номер автомобиля</th>
                <th>Описание</th>
                <th>Дата создания</th>
                <th>Cтатус</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
            <tr>
                <td>{{ $report['number'] ?? $report->number }}</td>
                <td>
                    <div>{{ $report['description'] ?? $report->description }}</div>
                </td>
                <td class="small-muted">
                    {{ date('d.m.Y H:i', strtotime($report['created_at'])) }}
                </td>
                <td class="small-muted">
                    {{ $report->status->name }}
                </td>
                <td>
                    <a href="{{route('reports.edit', $report->id)}}">Изменить</a>
                </td>
                <td>
                    <form action="{{route('reports.destroy', $report->id)}}" method="post">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить">
                </td>

                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$reports->links()}}
    <a href="{{route('report.create')}}">Создать заявление</a>
</body>

</html>