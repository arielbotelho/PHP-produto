<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Produto</title>
</head>
<body>
    <h1>Busca de Produto</h1>
    <hr>
    <form action="busca.php" method="post"> 
        Nome do produto:<br/>
        <input type="text" name="produto" id="" ><br/><br/>
       
        <input type="submit" value="buscar">

    </form>

    <?php
    $produto= $_POST["produto"];

    include_once'./conexao.php';
    $sql = 


    ?>


</body>
</html>
