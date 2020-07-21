<?php require 'client_login_get_error.inc.php'; ?>
<html>
    <head>
        <title>Cadastro</title>
    </head>
    <body>
        <div>
            <form method="post" action="client_login_action.php">
                <div id="email-group">
                    <label for="email">E-mail: </label>
                    <input type='email' name="email" id="email"/>
                </div>
                <div id="password-group">
                    <label for="password">Senha: </label>
                    <input type='password' name="password" id="password"/>
                </div>
                <div id="submit-group">
                    <input type="submit" value="Login"/>
                </div>
                <?php echo $error ?>
            </form>
        </div>
    </body>
</html>
