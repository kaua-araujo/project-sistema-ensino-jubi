<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action={{ route('createCourse.create') }} method="POST">
        @csrf
        <input type="text" name="title" placeholder="Nome do Curso">
        <input type="text" name="description" placeholder="Descrição do curso">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>