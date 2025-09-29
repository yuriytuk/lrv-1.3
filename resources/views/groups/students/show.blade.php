<!DOCTYPE html>
<html>
<head>
    <title>Студент {{ $student->surname }} {{ $student->name }}</title>
</head>
<body>
    <h1>Студент: {{ $student->surname }} {{ $student->name }}</h1>
    
    <p><strong>Группа:</strong> 
        <a href="{{ route('groups.show', $group) }}">{{ $group->title }}</a>
    </p>
    
    <a href="{{ route('groups.show', $group) }}">Назад к группе</a>
</body>
</html>