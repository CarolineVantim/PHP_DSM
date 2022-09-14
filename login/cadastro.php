<?php
require_once 'valida.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <div class="page-header">
        <h1>Cadastro de Pessoas</h1>
    </div>
    <form action="gravar.php" method="POST">
        <label for="cpf">CPF</label>
        <input type="number" id="cpf" name="cpf">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <p></p>
            <input type="submit" value="Submit">
    </form>
<br>

    <a href="welcome.php">Voltar</a>

</body>
</html>