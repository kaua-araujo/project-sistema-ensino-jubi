<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <form action={{route('updateRegistration.create', $registration->id)}} method="POST">
        @csrf
        <select name="student_id" disabled>
            <option selected>Selecione o aluno</option>
            @foreach($students as $student)
            <option value="{{$student->id}}">{{$student->name}}</option>
            @endforeach
        </select>
        <select name="course_id">
        <option selected>Selecione o curso</option>
            @foreach($courses as $course)
            <option value="{{$course->id}}">{{$course->title}}</option>
            @endforeach
        </select>
        <button type="submit">Salvar</button>
    </form>
    <br>
    <a href={{route('registrations.index')}} class="btn btn-dark">Voltar</a>
</body>
</html>