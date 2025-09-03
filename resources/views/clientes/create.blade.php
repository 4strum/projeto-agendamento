<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <a href="{{ route('clientes.index') }}">Voltar</a>

    <h1>Cadastrar Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @include('clientes._form', ['buttonText' => 'Cadastrar'])
    </form>
</body>
</html>
