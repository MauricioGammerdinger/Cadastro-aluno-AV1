
<?php 

require_once('conexao.PHP');

$codigo= $_GET['codigo'];
$sql_consulta=mysqli_query($ligar, "SELECT *FROM tb_alunos WHERE id='$codigo' ");
$resultado=mysqli_fetch_array($sql_consulta);

?>

 <marquee>    <h1> EDITAR REGISTROS </h1>   </marquee>

<hr>
<center>  NOME:  <?=$resultado[1]   ?>  </center>
<hr>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<form  method="POST" action="actualizar.php">
    <input type="hidden" name="txtcodigo"   value='<?=$resultado[0]   ?>'>
    USUÁRIO: <br>
    <input type="text" name="usuario"   value='<?=$resultado[1]   ?>' ><br>
    EMAIL: <br>
    <input type="email" name="email"    value='<?=$resultado[2]   ?>'><br>
    SENHA: <br>
    <input type="password" name="senha"   value='<?=$resultado[3]   ?>' ><br> 
    IDADE: <br>
    <input type="text" name="idade"   value='<?=$resultado[4]   ?>' ><br> 
    ENDERECO: <br>
    <input type="text" name="endereco"   value='<?=$resultado[5]   ?>' ><br> 
    NÍVEL: <br>
    <select name="nivel" > 
       
        <option value="<?=$resultado[4]   ?>" >   <?=$resultado[6]   ?></option>
             <option value="Admin">  Administrador    </option>
            <option value="Aluno">   Aluno  </option>
            <option value="Formador">  Formador    </option>
    </select>
    <br> <br>
    <input type="submit" value="Actualizar">


