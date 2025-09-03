@csrf

<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" value="{{ old('nome', $cliente->nome ?? '') }}"><br>

<label for="email">Email</label>
<input type="text" name="email" id="email" value="{{ old('email', $cliente->email ?? '') }}"><br>

<label for="telefone">Telefone</label>
<input type="text" name="telefone" id="telefone" value="{{ old('telefone', $cliente->telefone ?? '') }}"><br>

<label for="cpf">CPF</label>
<input type="text" name="cpf" id="cpf" value="{{ old('cpf', $cliente->cpf ?? '') }}"><br>

<button type="submit">{{ $buttonText ?? 'Salvar' }}</button>
