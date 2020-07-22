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
        <link rel="stylesheet" href="css/index_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
        
    </head>
    <body>
        <?php require '../components/components_navbar.inc.php'; ?>
        <div class="container">
            <div id="text">
                Faça seu <span class="blue-text">cadastro</span> e 
                <span class="blue-text">compre</span> pelo site! 
                Frete <span class="blue-text">grátis</span> para todo o Brasil!
            </div>
            <div class="box">
                <label>Faça login no site:</label>
                <a href="../client_login/client_login_page.php">
                    <button id="btn-login">Login</button>
                </a><br>
                <label>Ainda não é cadastrado?</label>
                <a href="../client_register/client_register_page.php">
                    <button id="btn-register">Cadastre-se</button>
                </a>
                <div>
                    <?php echo $not_login ?>
                </div>
            </div>
        </div>
    </body>
</html>
