<?php
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$assunto = $_REQUEST['assunto'];
$mensagem = $_REQUEST['mensagem'];





?>

<!DOCTYPE html>
<html>
<head>
    <style>
        
        .translucent-background {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px; 
            border-radius: 5px; 
            color: white; 
        }
    </style>
</head>
<body>
    <?php
   
    $seuTexto = "<h3>Mensagem recebida com sucessso! Você terá uma resposta em até 48h via e-mail. </h3>";
    ?>

    
    <div class="translucent-background">
        <?php echo $seuTexto; ?>
    </div>
</body>
</html>
