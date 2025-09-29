<!DOCTYPE html>
<html>
<head>
    <title>Группа {{ $group->title }}</title>
</head>
<body>
    <h1>Группа: {{ $group->title }}</h1>
    
    @if(session('успешно'))
        <div style="color: green;">{{ session('успешно') }}</div>
    @endif
    
    <p><strong>Дата начала:</strong> {{ $group->start_from->format('d.m.Y') }}</p>
    <p><strong>Статус:</strong> {{ $group->is_active ? 'Активна' : 'Неактивна' }}</p>
    
    <h2>Студенты группы:</h2>
    
    <a href="{{ route('groups.students.create', $group) }}">Добавить студента</a>
    
    <ul>
        @foreach($students as $student)
            <li>
                <a href="{{ route('groups.students.show', [$group, $student]) }}">
                    {{ $student->surname }} {{ $student->name }}
                </a>
            </li>
        @endforeach
    </ul>
    
    <a href="{{ route('groups.index') }}">Назад к списку групп</a>
</body>
</html>