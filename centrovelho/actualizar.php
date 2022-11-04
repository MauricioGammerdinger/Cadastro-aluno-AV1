<?php 
require_once('conexao.php');

$codigo= $_POST['txtcodigo'];
$usuario= $_POST['usuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$idade= $_POST['idade'];
$endereco= $_POST['endereco'];
$nivel= $_POST['nivel'];

$sql_atualizar=mysqli_query($ligar, " UPDATE tb_alunos set usuario='$usuario', email='$email', senha='$senha', endereco='$endereco', nivel='$nivel' WHERE id='$codigo' ");

if ($sql_atualizar==true){

    print "<script>
    
    alert('Usuário Actualizado com Sucesso');
    window.location.href='listaAlunos.php';
    
    
    </script>";

}else{

    echo "<script>
    
    alert('Falha ao actualizar dados');
    window.location.href='editar.php';
    
    
    </script>";

}



?>