<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao =  $_POST['descricao'];
$responsavel =  $_POST['responsavel'];
$localizacao =  $_POST['localizacao'];
$data_cadastro =  $_POST['data_cadastro'];
$ativo = '0';

    if (isset($_POST['ativo']))
    {
    $ativo = '1';
    }
    $sql = "Update departamento set nome = '$nome', 
    descricao = '$descricao', responsavel = '$responsavel', 
    localizacao = '$localizacao', 
    data_cadastro = '$data_cadastro', ativo = '$ativo' 
    WHERE id = $id";
    echo $sql;

    include_once("../conexao.php");
    $result = mysqli_query($conexao, $sql);

    if ($result == true) {
        header("Location: listar.php");
    } else {
        mysqli_error($conexao);
    }

?>
