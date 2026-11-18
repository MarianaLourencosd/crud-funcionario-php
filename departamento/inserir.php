<?php

$nome = $_POST['nome'];
$descricao =  $_POST['descricao'];
$responsavel =  $_POST['responsavel'];
$localizacao =  $_POST['localizacao'];
$data_cadastro =  $_POST['data_cadastro'];


$sql = "INSERT INTO departamento (nome, descricao, responsavel,
localizacao, data_cadastro) 
VALUES ('$nome', '$descricao', '$responsavel', '$localizacao', 
'$data_cadastro')";

require_once("../conexao.php");

$resposta = mysqli_query($conexao, $sql);
if ($resposta == true)
{
    header("Location:listar.php"); // REDIRECIONA
}

?>