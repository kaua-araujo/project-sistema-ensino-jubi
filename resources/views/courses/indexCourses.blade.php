<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos - Ensino Jubi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <table class="table">
        <thead>
            <th>Cursos</th>
            <th>Descrição</th>
            <th>Info</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        @foreach ($courses as $course)
        <tbody>
            <td>{{$course->title}}</td>
            <td>{{$course->description}}</td>
            <td><button data-toggle="modal" data-target="#infoCourse{{$course->id}}"></button>
                @include('courses/modalShowCourse')
            </td>
            <td></td>
            <td></td>
        </tbody>     
        @endforeach
    </table>
    <br>
    <a href={{ route('createCourse.form')}}>Cadastrar Cursos</a>
</div>
    
</body>
</html>