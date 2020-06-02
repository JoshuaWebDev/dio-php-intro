<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="uft-8">
        <title>Formulário de Inscrição.</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,inicial-scale=1">
        <link href="style.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Formulário de Inscrição de Competidores</h1>

        <form action="script.php" method="post">
            <?php
                $successMessage = isset($_SESSION['success-message']) ? $_SESSION['success-message'] : '';
                if(!empty($successMessage))
                {
                    echo $successMessage;
                }
                $errorMessage = isset($_SESSION['error-message']) ? $_SESSION['error-message'] : '';
                if(!empty($errorMessage))
                {
                    echo $errorMessage;
                }
            ?>
            <p>Seu nome: <input type="text" name="nome"/></p>
            <p>Sua idade: <input type="text" name="idade"/></p>
            <p><input type="submit" value="Enviar Dados do Competidor" /></p>
        </form>
    </body>
</html>