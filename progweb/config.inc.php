<?php
// Conexão com Servidor MySQL
$conn = mysqli_connect("127.0.0.1", "root", "");
// Conexão com Banco de Dados MySQL
$db = mysqli_select_db($conn, "login");

if($conn){
    echo "Conexão estabelecida com sucesso.";
}else{
    echo "Erro na conexão com o banco de dados.";
}


?>