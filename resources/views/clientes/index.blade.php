<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @section('success')
        <div style="color: green;">
            <p>{{ session('success') }}</p>
        </div>
    @endsection



    <a href="/">Voltar</a>



    <h1>Lista de Clientes</h1>
    @if ($clientes->isEmpty())
        <p>Nenhum cliente encontrado.</p>
    @else
        <ul>
            @foreach ($clientes as $cliente)
                <li>{{ $cliente->nome }} - {{ $cliente->email }}</li>
            @endforeach
        </ul>
    @endif

</body>

</html>