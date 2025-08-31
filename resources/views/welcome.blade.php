<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Bem-vindo ao Sistema de Agendamento</h1>
    <p>Use o menu para navegar.</p>
    <a href="{{ route('clientes.index') }}">Lista de Clientes</a><br>
    <a href="{{ route('clientes.create') }}">Cadastrar um Clientes</a>

</body>

</html>