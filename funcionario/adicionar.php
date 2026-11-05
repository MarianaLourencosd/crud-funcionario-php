<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

</html>

<body>

    <?php
    include("../menu.php");
    ?>

    <div class="container">
    <h1>Cadastro de Funcionário</h1>

    <form action="inserir.php" method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
        </p>

        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" required>
        </p>

        <p>
            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" required>
        </p>

        <p>
            <label for="salario">Salário base:</label>
            <input type="text" name="salario" step="0.01" required>
        </p>

        <p>
            <label for="data">Data de admissão:</label>
            <input type="date" name="admissao" required>
        </p>

        <p>
            <input type="submit" value ="Cadastrar">
            <input type="reset"  value ="Limpar">
        </p>

</body>