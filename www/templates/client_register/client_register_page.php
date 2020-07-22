<!DOCTYPE html>
<?php require './client_register_get_error.inc.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <!-- CSS. -->
        <link rel="stylesheet" href="css/client_register_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <!-- Formulário. -->
            <span id="content-form">
                <!-- Título. -->
                <h1 id="title">Cadastre-se</h1>
                <span class="line"></span>
                <form method="post" action="client_register_action.php">
                    <!-- Nome. -->
                    <div id="name-group">
                        <label for="name">Nome completo: </label>
                        <input type='text' name="name" id="name"/>
                    </div>
                    <!-- CPF. -->
                    <div id="cpf-group">
                        <label for="cpf">CPF: </label>
                        <input type='text' name="cpf" id="cpf"/>
                    </div>
                    <!-- E-mail. -->
                    <div id="email-group">
                        <label for="email">E-mail: </label>
                        <input type='email' name="email" id="email"/>
                    </div>
                    <!-- Gênero. -->
                    <div id="gender-group">
                        <label>Gênero: </label>
                        <input type="radio" name="gender" value="Masculino" checked="true"/> Masculino
                        <input type="radio" name="gender" value="Feminino"/> Feminino
                    </div>
                    <!-- Data de nascimento. -->
                    <div id="date-of-birth-group">
                        <label for="date-of-birth">Data de nascimento: </label>
                        <input type='date' name="date-of-birth" id="date-of-birth"/>
                    </div>
                    <!-- Senha. -->
                    <div id="password-group">
                        <label for="password">Senha: </label>
                        <input type='password' name="password" id="password"/>
                    </div>
                    <!-- Botão. -->
                    <div id="submit-group">
                        <input type="submit" value="Cadastrar-se"/>
                    </div>
                    <!-- Mensagem de erro. -->
                    <?php echo $error; ?>
                </form>
            </span>
        </div>
    </body>
</html>
