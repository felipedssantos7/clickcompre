<?php require './client_register_get_error.inc.php'; ?>
<html>
    <head>
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/client_register_style.css">
    </head>
    <body>
        <div id="content-form">
            <h1 id="title">Cadastre-se</h1>
            <form method="post" action="client_register_action.php">
                <div id="name-group">
                    <label for="name">Nome completo: </label>
                    <input type='text' name="name" id="name"/>
                </div>
                <div id="cpf-group">
                    <label for="cpf">CPF: </label>
                    <input type='text' name="cpf" id="cpf"/>
                </div>
                <div id="email-group">
                    <label for="email">E-mail: </label>
                    <input type='email' name="email" id="email"/>
                </div>
                <div id="gender-group">
                    <label>Gênero: </label>
                    <input type="radio" name="gender" value="Masculino" checked="true"/> Masculino
                    <input type="radio" name="gender" value="Feminino"/> Feminino
                </div>
                <div id="date-of-birth-group">
                    <label for="date-of-birth">Data de nascimento: </label>
                    <input type='date' name="date-of-birth" id="date-of-birth"/>
                </div>
                <div id="password-group">
                    <label for="password">Senha: </label>
                    <input type='password' name="password" id="password"/>
                </div>
                <div id="submit-group">
                    <input type="submit" value="Cadastrar-se"/>
                </div>
                <?php echo $error; ?>
            </form>
        </div>
    </body>
</html>
