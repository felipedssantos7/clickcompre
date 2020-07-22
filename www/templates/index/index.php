<!DOCTYPE html>
<!-- Página inicial do site, onde o cliente pode ir para a página de login e cadastro. -->
<?php require './index_get_error.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página inicial</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS. -->
        <link rel="stylesheet" href="css/index_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div class="container">
            <!-- Texto apelativo. -->
            <div id="text">
                Faça seu <span class="blue-text">cadastro</span> e 
                <span class="blue-text">compre</span> pelo site! 
                Frete <span class="blue-text">grátis</span> para todo o Brasil!
            </div>
            <!-- Opções. -->
            <div class="box">
                <!-- Login. -->
                <label>Faça login no site:</label>
                <a href="../client_login/client_login_page.php">
                    <button id="btn-login">Login</button>
                </a><br>
                <!-- Cadastro. -->
                <label>Ainda não é cadastrado?</label>
                <a href="../client_register/client_register_page.php">
                    <button id="btn-register">Cadastre-se</button>
                </a>
                <!-- Mensagem de erro. -->
                <div>
                    <?php echo $not_login ?>
                </div>
            </div>
        </div>
    </body>
</html>
