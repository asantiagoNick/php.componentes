<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de componentes - PHP com MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h4 class="text-center text-white bg-dark">Pesquisa de Componentes - PHP com MySQL</h4>
    <section>
        <p class="text-center"><img src="imagem/phplogo.webp" alt="Cadastro com PHP/MySQL"></p>
        <?php 
        require "conexao.php";
        $sql="SELECT * FROM tbcomponente ORDER BY componente";
        $resultado=mysqli_query($conexao, $sql) or die (mysql_error($conexao));
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Codigo</th>";
        echo "<th>Componentes</th>";
        echo "<th>Curso</th>";
        echo "<th>Editar</th>";
        echo "</tr>";

        while($linha=mysqli_fetch_array($resultado))
        {
            $codigo     =  $linha["codigo"];
            $curso      =  $linha["curso"];
            $componente =  $linha["componente"];
        }
       ?>
</body>
</html>