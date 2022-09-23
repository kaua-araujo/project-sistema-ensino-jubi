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
    <center><h2>Cursos - Ensino Jubi</h2></center>
    <br>
    <div align="right">
    <a href={{ route('createCourse.form')}} class="btn btn-success">Cadastrar Cursos</a>
    </div>
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
            <td><a href={{route('show.course', $course->id)}} class="btn btn-warning rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"></svg></a>
            </td>
            <td><a href={{route('updateCourse.form', $course->id)}} class="btn btn-primary rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"></svg></a>
            </td>
            <td><a href={{route('course.destroy', $course->id)}} class="btn btn-danger rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"></svg></a>
            </td>
        </tbody>     
        @endforeach
    </table>
    <br>
    <br>
    <a href={{route('ensinoJubi.index')}} class="btn btn-dark">Voltar</a>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>