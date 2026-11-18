<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EMPRESA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<?php
include("../menu.php");
?>
<div class="container">
<h1>Cadastro de Departamento</h1>
<form action="inserir.php" method="post">
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
    </p>
    <p>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required>
    </p>

    <p>
        <label for="responsavel">Responsavel:</label>
        <input type="text" name="responsavel" required>
    </p>

     <p>
        <label for="localizacao">Localização:</label>
        <input type="text" name="localizacao" required>
    </p>
    <p>
        <label for="data_cadastro">Data de Cadastro:</label>
        <input type="date" name="data_cadastro" required>
    </p>


    <p>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </p>
</form>
</div>    
</body>
</html>