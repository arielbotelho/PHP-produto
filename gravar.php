<?php

date_default_timezone_set("america/sao_paulo");
//resgate de dados da tela
$produto= $_POST["produto"];
$descricao= $_POST["descricao"];
$quantidade= $_POST["quantidade"];
$valorunitario= $_POST["valorunitario"];
$fornecedor= $_POST["fornecedor"];

// abrir conexão com o banco de dados.

include_once'./conexao.php';

//montar o sql de gravação


$sql = "insert into produto values(null,'".$produto."','".$descricao."','".$quantidade."','".$valorunitario."','".$fornecedor."')";

if (mysqli_query($con,$sql)) {
    $msg = "Cadastro criado com sucesso!";
} else {
    $msg = "Erro ao criar cadastro!";
}

mysqli_close($con);

if (isset($msg)) {
    echo "<script>alert('".$msg."'); location.href='consultar.php';</script>";
    }
    


?>
