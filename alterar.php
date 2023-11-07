<?php

include_once(".../comfig.inc.php");
$id = $_GET['id'];
$sql="SELECT * FROM paginas WHERE id = $id";
$busca = mysqli_query($conn, $sql);
while($dados=mysqli_fetch_array($busca))(

?>
0
<h1>Cadastro</h1>
<form action="alterarhd.php" method="post">
    <label>Titulo:</label>
    <input type="text" name="titulo"><br>
    <label>Texto:</label>
    <textarea type="text" name="texto"></textarea><br>
    <input type="submit" value="Cadastrar">
</form>