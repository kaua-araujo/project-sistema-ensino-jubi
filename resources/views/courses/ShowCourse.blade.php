<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Curso</title>
</head>
<body>
    <h2>Informações do curso: {{$course->title}}</h2>
    <form method="POST">
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title" placeholder="Nome do Curso" value="{{$course->title}}" disabled>
        <label>Descrição:</label>
        <textarea type="text" name="description" rows="4" cols="50" disabled>{{$course->description}}</textarea>      
    </form>
    <h3>Alunos matriculados:</h3>
    @foreach ($course->student as $student)
    <li>{{$student->name}}</li>
    <br>
    @endforeach 


    <a href="{{route('courses.index')}}">Voltar</a>
</body>
</html>