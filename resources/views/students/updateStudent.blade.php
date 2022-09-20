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
    <form action={{route('updateStudent.update', $student->id)}} method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="name" value="{{$student->name}}">
        <label>Email:</label>
        <input type="text" name="email" value="{{$student->email}}">  
        <label>Data de nascimento:</label>
        <input type="date" name="birth_date" value="{{date( 'd-m-Y' , strtotime($student->birth_date))}}">    
        <button type="submit">Salvar</button>
    </form>


    <a href="{{route('students.index')}}">Voltar</a>
</body>
</html>