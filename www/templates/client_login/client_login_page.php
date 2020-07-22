<?php require 'client_login_get_error.inc.php'; ?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/client_login_style.css">
    </head>
    <body>
        <div id="content">
            <div id="navbar">
                <div id="logo">
                    <img src="../../galeria/logo_clickcompre.png"/>
                </div>
                <div id="menu">
                    <a href="../index/index.php" class="menu-item">Home</a>
                    <a href="#" class="menu-item">Quem somos</a>
                    <a href="#" class="menu-item">Produtos</a>
                    <a href="#" class="menu-item">Promoções</a>
                    <a href="#" class="menu-item">Localização</a>
                    <a href="#" class="menu-item last-item">Contato</a>
                </div>
            </div><br>
            <span id="content-form">
                <h1 id="title">Login</h1>
                <form method="post" action="client_login_action.php">
                    <div id="email-group">
                        <label for="email">E-mail</label>
                        <input type='email' name="email" id="email"/>
                    </div>
                    <div id="password-group">
                        <label for="password">Senha</label>
                        <input type='password' name="password" id="password"/>
                    </div>
                    <div id="submit-group">
                        <input type="submit" value="Entrar"/>
                    </div>
                    <div id="error">
                        <?php echo $error ?>
                    </div>
                </form>
            </span>
        </div>
    </body>
</html>
