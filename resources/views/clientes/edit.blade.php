<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>
    <a href="{{ route('clientes.index') }}">Voltar</a>

    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @method('PUT')
        @include('clientes._form', ['buttonText' => 'Atualizar'])
    </form>
</body>
</html>
