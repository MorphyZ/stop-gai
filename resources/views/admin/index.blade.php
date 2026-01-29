<x-app-layout>
    <h1>Панель администратора</h1>
    
    @if(session()->has('error'))
    <div class="alert">
        {{ session()->get('error') }}
    </div>
@endif

    <table>
        <tr>
            <th>ФИО</th>
            <th>Описание</th>
            <th>Номер</th>
            <th>
                Статус
            </th>
        </tr>
        @foreach ($reports as $report)
            <tr>
                <td>{{$report->user->name}} {{$report->user->middlename}} {{$report->user->lastname}}</td>
                <td class="desc">{{ $report->description }}</td>
                <td>{{ $report->number }}</td>
                <td>
                    <form class="status-form" action="{{ route('reports.status.update', $report->id) }}" method="post">
                        @method('patch')
                        @csrf
                        <select name="status_id" id="status_id">
                            @foreach ($statuses as $status)
                                <option value="{{$status->id}}" {{$status->id === $report->status_id ? 'selected' : ''}}>
                                    {{$status->name}}
                                </option>
                            @endforeach
                        </select>
                </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-app-layout>