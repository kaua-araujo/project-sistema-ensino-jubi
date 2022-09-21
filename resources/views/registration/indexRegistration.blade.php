<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrículas - Ensino Jubi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <center><h2>Matrículas - Ensino Jubi</h2></center>
    <br>
    <input type="search" class="form-control" name="search" placeholder="Pesquisar aluno">
    <div align="right">
    <a href={{ route('createRegistration.form')}} class="btn btn-success">Cadastrar Matrícula</a>
    </div>
    <table class="table">
        <thead>
            <th>Cursos</th>
            <th>Descrição</th>
            <th>Info</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        @foreach ($registrations as $registration)
        <tbody>
            <td>{{$registration->title}}</td>
            <td>{{$registration->description}}</td>
            <td><a href={{route('show.registration', $registration->id)}} class="btn btn-warning rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"></svg></a>
            </td>
            <td><a href={{route('updateCourse.form', $registration->id)}} class="btn btn-primary rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"></svg></a>
            </td>
            <td><a href={{route('course.destroy', $registration->id)}} class="btn btn-danger rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"></svg></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.26/sweetalert2.min.js" integrity="sha512-lfP7VHOp6XS4CDxn82+BZ3narDVFMXjxy3yTQIcTxjpea9R77LM2VSWQn+qemnpR43d9+ogbMEfSc6OtzKQilA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>