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
require_once("../conexao.php");
$id = $_GET['id'];
$sql = "Select * from departamento where id=$id";


$result = mysqli_query($conexao,$sql);

$departamento = mysqli_fetch_assoc($result);
include("../menu.php");
?>

<div class="container">
<h1>Edição de Departamento</h1>
<form action="atualizar.php" method="post">
    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" 
        required value="<?php echo $departamento['nome']; ?>" >
    </p>
    <p>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" required 
        value="<?php echo $departamento['descricao']; ?>">
    </p>
    <p>
        <label for="responsavel">Responsavel:</label>
        <input type="text" name="responsavel" required
         value="<?php echo $departamento['responsavel']; ?>">
    </p>
    <p>
        <label for="localizacao">Localização:</label>
        <input type="text" name="localizacao" required
         value="<?php echo $departamento['localizacao']; ?>">
    </p>
    <p>
        <label for="data_cadastro">Data de Cadastro:</label>
        <input type="date" name="data_cadastro" required
         value="<?php echo $departamento['data_cadastro']; ?>">
    </p>
    <p>
        <label for="ativo">Ativo:</label>
        <input type="checkbox" name="ativo" 
        <?php if ($departamento['ativo']==1){ echo 'checked'; }  ?>>
    </p>

    <p>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" value="Atualizar">                
    </p>
</form>
</div>    
</body>
</html>