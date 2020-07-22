<!DOCTYPE html>
<?php require 'client_login_get_error.inc.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <!-- CSS. -->
        <link rel="stylesheet" href="css/client_login_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <!-- Formulário. -->
            <span id="content-form">
                <h1 id="title">Login</h1>
                <span class="line"></span>
                <form method="post" action="client_login_action.php">
                    <!-- E-mail. -->
                    <div id="email-group">
                        <label for="email">E-mail</label>
                        <input type='email' name="email" id="email"/>
                    </div>
                    <!-- Senha. -->
                    <div id="password-group">
                        <label for="password">Senha</label>
                        <input type='password' name="password" id="password"/>
                    </div>
                    <!-- Botão. -->
                    <div id="submit-group">
                        <input type="submit" value="Entrar"/>
                    </div>
                    <!-- Mensagem de erro. -->
                    <div id="error">
                        <?php echo $error ?>
                    </div>
                </form>
            </span>
        </div>
    </body>
</html>
