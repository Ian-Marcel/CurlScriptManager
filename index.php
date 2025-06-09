<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="http://localhost/.elephpant.png" image/x-icon">
        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
        <title>php</title>
    </head>
    <body>
        <h1>Olá, Mundo!</h1>
        <p>Exemplo de Página PHP com HTML</p>

        <?php
        $mensagem = "Olá, Mundo!";
        echo "<p>$mensagem</p>"
        ?>

        <!-- scripts -->
        <script src="script.js"></script>

    </body>
</html>
