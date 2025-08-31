<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/">Voltar</a>

    <h1>Cadastrar um Clientes</h1>

    <form action="{{ route('clientes.store') }}" method="Post">
        @csrf
        @method('POST')
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email"><br>
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"><br>
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf"><br>
        <button type="submit">Cadastrar</button>
    </form>

</body>

</html>