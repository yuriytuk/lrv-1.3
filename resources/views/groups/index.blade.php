<!DOCTYPE html>
<html>
<head>
    <title>Список групп</title>
</head>
<body>
    <h1>Список групп</h1>
    
    <a href="{{ route('groups.create') }}">Создать новую группу</a>
    
    @if(session('успешно'))
        <div style="color: green;">{{ session('успешно') }}</div>
    @endif
    
    <ul>
        @foreach($groups as $group)
            <li>
                <a href="{{ route('groups.show', $group) }}">
                    {{ $group->title }}
                </a>
                - {{ $group->is_active ? 'Активна' : 'Неактивна' }}
            </li>
        @endforeach
    </ul>
    
    <a href="/">Назад</a>
</body>
</html>