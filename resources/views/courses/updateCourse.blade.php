<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Curso</title>
</head>
<body>
    <h2>Editar informações do curso: {{$course->title}}</h2>
    <form action={{ route('updateCourse.update', $course->id) }} method="POST">
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title" placeholder="Nome do Curso" value="{{$course->title}}">
        <label>Descrição:</label>
        <input type="text" name="description" placeholder="Descrição do curso" value="{{$course->description}}">  
        <button type="submit">Salvar</button>    
    </form>

    <a href="{{route('courses.index')}}">Voltar</a>
</body>
</html>