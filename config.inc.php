<?php

$conn = mysqli_connect("127.0.0.1","root","");
$db = msqli_select_db($conn,'projeto1');

if($conn){
    echo"Conexão estabelecida com sucesso.";
}else{
    echo"Erro na conexão com banco de dados.";
}
?>