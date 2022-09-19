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
            <td> <button type="submit" class="btn btn-danger rounded-circle"
                data-post="{{route('course.destroy',$course->id)}}"
                data-id="{{$course->id}}"
                data-confirm="Tem certeza que deseja excluir o curso de {{$course->title}}?">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3"
                      viewBox="0 0 16 16">
                      <path
                          d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                  </svg>
              </button>
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