<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cargo</title>
</head>
<body>
  <h3>Adicionar Cargo</h3>  
<form action="funcoes/cadastro.php" method="post">
    <label for="nome">Nome:</label>
    <br>
    <input type="text" id="nome" name="nome">
    <br>
    <br>
    <label for="genero">Gênero</label>
    <br>
    <input type="text" id="genero" name="genero">
    <br>
    <br>
    <label for="date">nascimento</label>
    <br>
    <input type="date" id="nascimento" name="nascimento">
    <br>
    <br>
    <label for="cpf">cpf</label>
    <br>
    <input type="text" id="cpf" name="cpf">
    <br>
    <br>
    <label for="cns">cns</label>
    <br>
    <input type="text" id="cns" name="cns">
    <br>
    <br>
    <label for="celular">celular</label>
    <br>
    <input type="text" id="celular" name="celular">
    <br>
    <br>
    <label for="email">email</label>
    <br>
    <input type="text" id="email" name="email">
    <br>
    <br>
    <label for="status">status</label>
    <br>
    <input type="text" id="status" name="status">
    <br>
    <br>
    <label for="cadastro">cadastro</label>
    <br>
    <input type="datetime" id="cadastro" name="cadastro">
    <br>
    <br>
    <label for="conselho">conselho</label>
    <br>
    <input type="text" id="conselho" name="conselho">
    <br>
    <input type="submit" value="Salvar">
    <br>
    <a href="index.php">Voltar</a>
</form>
</body>
</html>