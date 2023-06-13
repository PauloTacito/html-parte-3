<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
</head>
<body>
<h3>Editar Cargos</h3>
    <form action="funcoes/atualizar.php" method="post">
    <input type="hidden" name="id" value="<?= $cargos->id?>">
        <br>
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
        <br>
        <input type="submit" value="Salvar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>