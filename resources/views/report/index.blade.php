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
          {{ 
            $report['created_at']
          }}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
