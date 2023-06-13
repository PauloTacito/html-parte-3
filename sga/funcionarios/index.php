<?php 
$conexao = new mysqli ('localhost','root','12345','sga');

$sql = "SELECT * FROM sga.funcionarios";

$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionarios</title>
</head>
<body>
    <h3>Lista de Funcionarios</h3>
    <a href="adicionar.php">Adicionar um funcionário</a>
   <table border=1>

   <thead>
    <th>Nome</th>
    <th>Gênero</th>
    <th>DtNascimento</th>
    <th>Cpf</th>
    <th>Celular</th>
    <th>Cns</th>
    <th>Email</th>
    <th>Status</th>
    <th>DtCadastro</th>
    <th>NumConselho</th>
    <th>Ações</th>
   </thead> 

    
    <tbody>
        <tr>
        <td>Layane</td>
        <td>F</td>
        <td>03.05.2006</td>
        <td>12345678910</td>
        <td>8840028922</td>
        <td>nao sei</td>
        <td>erikalayane</td>
        <td>vagante</td>
        <td>03.05.2006</td>
        <td>23</td>
        <td><a href="editar.php">Editar</a> |
            <a href="excluir.php">Excluir</a>   
        </td>
        </tr>
    </tbody>
   </table> 
</body>
</html>