<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <form action={{route('createStudents.create')}} method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome do Aluno">
        <input type="email" name="email" placeholder="Email do aluno">
        <label>Data de aniversário:</label>
        <input type="date" name="birth_date" placeholder="Data de nascimento">
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href={{route('students.index')}} class="btn btn-dark">Voltar</a>
</body>
</html>