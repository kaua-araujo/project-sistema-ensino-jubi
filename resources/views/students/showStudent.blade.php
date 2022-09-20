<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informações do aluno</title>
</head>
<body>
    <h2>Informações do aluno: {{$student->name}}</h2>
    <form method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" value="{{$student->name}}" disabled>
        <label>Email:</label>
        <input type="text" name="description" value="{{$student->email}}" disabled>  
        <label>Data de nascimento:</label>
        <input type="text" name="name" value="{{date( 'd-m-Y' , strtotime($student->birth_date))}}" disabled>    
    </form>


    <a href="{{route('students.index')}}">Voltar</a>
</body>
</html>