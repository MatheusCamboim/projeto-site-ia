<?php
include_once("config.inc.php");
 $nome = $_REQUEST['nome'];
 $email = $_REQUEST['cpf'];
 $assunto = $_REQUEST['email'];

 $sql = "INSERT INTO usuarios (nome, cpf, email) VALUES 
('$nome', '$email', '$assunto')";

$insert = mysqli_query($conn, $sql);


if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=entrar'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='entrar.php'>Cadastrar Novamente</a><br>";
 
};

?>