<?php 
require_once('conexao.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ESCOLA</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
<marquee>  <h1> BEM VINDO A ESCOLA </h1>    </marquee> 

    <hr>
  <center>  <h2> Lista de Usuario </h2> </center>
    <hr>
<center>



<table rules="all">
<thead>
    <tr> 
    <th> USUARIO </th>
    <th> SENHA </th>
    <th> DIRETOR </th>
    <th> TELEFONE </th>
    <th> DOCUMENTO </th>
    </tr>
</thead>



<tbody> 


    <?php 
$sql_consulta=mysqli_query($ligar , " SELECT *FROM tb_usuarios ");
$total =mysqli_num_rows($sql_consulta);
    while( $linha=mysqli_fetch_array($sql_consulta)){
        ?>
    <tr>
        <td> <?= $linha[1]  ?></td>
        <td> <?= $linha[2]  ?></td>
        <td> <?= $linha[3] ?></td>
        <td> <?= $linha[4]  ?></td>
        <td> <?= $linha[5]  ?></td>
        <td><a href="eliminar.php?codigo=<?= $linha[0] ?>" > Exluir </a> </td>
        <td><a href="Editar.php?codigo=<?= $linha[0] ?>" > Editar </a> </td>


    </tr>
     
       <?php 
    }

    ?>
        <tr>  
       <td colspan="6" >   TOTAL DE REGISTROS:  <?= $total  ?> </td>
       </tr>


</tbody>
</table>

</center>

<hr>
  <Center> 
    <a href="inicio.php"> HOME </a> <br>
    <a href="#"> IMPRIMIR </a> 
 </Center> 

<hr>

</body>

</html>
