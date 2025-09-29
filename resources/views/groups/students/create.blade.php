<!DOCTYPE html>
<html>
<head>
    <title>Добавление студента</title>
</head>
<body>
    <h1>Добавление студента в группу: {{ $group->title }}</h1>
    
    <form action="{{ route('groups.students.store', $group) }}" method="POST">
        @csrf
        <div>
            <label for="surname">Фамилия:</label>
            <input type="text" name="surname" id="surname" required>
        </div>
        
        <div>
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" required>
        </div>
        
        <button type="submit">Добавить студента</button>
    </form>
    
    <a href="{{ route('groups.show', $group) }}">Назад к группе</a>
</body>
</html>