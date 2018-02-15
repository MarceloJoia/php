<!DOCTYPE html>
<html>
    <head lang="pt-br">
        <meta charset="UTF-8">
        <title>Minha página</title>
    </head>
    <body>
        <h1>Bem vindo a minha página</h1>
        <section>

            <?php
                include APP_PATH . 'src/header.php';
                echo '<br>';
                include APP_PATH . 'src/content.php'; 
                 echo '<br>';
                include APP_PATH . 'src/footer.php';
            ?>

        </section>
        <!--
        <p><?php include APP_PATH . 'src/header.php' ;?></p>
        <p><?php include APP_PATH . 'src/content.php' ;?></p>
        <p><?php include APP_PATH . 'src/footer.php' ;?></p>
        -->
    </body>
</html>
