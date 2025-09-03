<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>

<body>

    @if (session('success'))
        <div style="color: green;">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <a href="/">Voltar</a>

    <h1>Lista de Clientes</h1>

    @if ($clientes->isEmpty())
        <p>Nenhum cliente encontrado.</p>
    @else
        <ul>
            @foreach ($clientes as $cliente)
                <li>
                    {{ $cliente->nome }} - {{ $cliente->email }}

                    <!-- Botão de Editar -->
                    <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                    <!-- Botão de Excluir -->
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

</body>

</html>
