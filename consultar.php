<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Cliente</title>

    <script>
    function excluir(id) {
        if (confirm ('Deseja realmente exlcuir esse cliente?')) {
            location.href='excluir.php?id='+id;
            
        }
    }
    </script>
</head>
<body>
    <?php
    // abrir a conexão com o banco
    include_once'./conexao.php';

    // montar a instrução para ir ao banco
    $sql = "select * from produto";

    $result = mysqli_query($con,$sql); //executa a consulta no mysql
    
    $totalregistro= mysqli_num_rows($result);
    if ($totalregistro > 0){
        //echo "<br/> Encontrou " .$totalregistro. " registros. ";
  
   echo"<table width='800px' border='1px'>
        <tr>
            <td>ID</td>
            <td>Produto</td>
            <td>Descrição do Produto</td>
            <td>Quantiade</td>
            <td>Valor Unitário</td>
            <td>Fornecedor</td>
            <td>Valor Total</td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>";

      while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row["idproduto"]."</td>";
        echo "<td>".$row["produto"]."</td>";
        echo "<td>".$row["descricao"]."</td>";
        echo "<td>".$row["quantidade"]."</td>";
        echo "<td>".$row["valorunitario"]."</td>";
        echo "<td>".$row["fornecedor"]."</td>";
        $total=$row["quantidade"] * $row["valorunitario"];
        echo "<td>".$total."</td>";
        echo "<td> <a href='#'>editar</a></td>";
    ?>

     <td> <a href='#' onclick="excluir(<?php echo $row['idproduto'];?>)">
          exluir
          </a>
     </td>


     <?php
     echo"</tr>";


    }

     echo "</table> Total Registro: " .$totalregistro;

    } else {
        echo "Nenhum registro encontrado!";
     
    }
    mysqli_close($con);

    ?>
 
<a href="index.php"> <button>voltar</button> </a>

</body>
</html>
