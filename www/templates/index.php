<!DOCTYPE html>
<!--
Este site tem por finalidade permitir o cadastro e login de clientes que
desejam comprar produtos da loja.
-->
<?php require './index_get_error.php'; ?>
<html>
    <head>
        <title>Página inicial</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <button><a href="client_register/client_register_page.php">Cadastro</a></button><br><br>
        <button><a href="client_login/client_login_page.php">Login</a></button><br><br>
        <div>
            <?php echo $not_login ?>
        </div>
    </body>
</html>
