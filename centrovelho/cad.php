
<?php

require_once('conexao.php');

$usuario= $_POST['usuario'];
$email= $_POST['email'];
$senha= $_POST['senha'];
$idade= $_POST['idade'];
$endereco= $_POST['endereco'];
$nivel= $_POST['nivel'];

$sql_cad=mysqli_query( $ligar , " INSERT INTO tb_alunos (usuario, email, senha, idade, endereco, nivel) VALUES ('$usuario','$email' ,'$senha','$idade', '$endereco','$nivel')");

if($sql_cad==true) {

    echo " <script>

    alert('Cadastro Feito com Sucesso ');
    window.location.href='index.html';
    
    </script>";


}

else {

    echo " <script>

    alert(' Falha no Cadastro ');
    alert(' Já existe um Usuário com este Email ');
    window.location.href='cad.html';
    </script>";


}



?>