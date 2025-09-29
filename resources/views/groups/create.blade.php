<!DOCTYPE html>
<html>
<head>
    <title>Создание группы</title>
</head>
<body>
    <h1>Создание новой группы</h1>
    
    <form action="{{ route('groups.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Название группы:</label>
            <input type="text" name="title" id="title" required>
        </div>
        
        <div>
            <label for="start_from">Дата начала обучения:</label>
            <input type="date" name="start_from" id="start_from" required>
        </div>
        
        <div>
            <label for="is_active">
                <input type="checkbox" name="is_active" id="is_active" value="1" checked>
                Активная группа
            </label>
        </div>
        
        <button type="submit">Создать группу</button>
    </form>
    
    <a href="{{ route('groups.index') }}">Назад к списку групп</a>
</body>
</html>