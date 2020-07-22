<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso restrito</title>
        <!-- CSS. -->
        <link rel="stylesheet" href="css/restricted_access_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <!-- Formulário. -->
            <div id="content-form">
                <!-- Título. -->
                <h2 id="title">Acesso restrito</h2>
                <span class="line"></span>
                <form method="post" action="restricted_access_action.php">
                    <!-- Nome. -->
                    <div id="id-group">
                        <label for="id">Identificação</label>
                        <input type='text' name="id"/>
                    </div>
                    <!-- Senha. -->
                    <div id="password-group">
                        <label for="password">Senha: </label>
                        <input type='password' name="password"/>
                    </div>
                    <div id="submit-group">
                        <input type="submit" value="Entrar"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
