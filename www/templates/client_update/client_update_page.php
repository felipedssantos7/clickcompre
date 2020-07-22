<!DOCTYPE html>
<?php 
require '../../lib/utils/utils_array2client.php'; 
require './client_update_get_error.inc.php'; 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Atualizar meus dados</title>
        <!-- CSS. -->
        <link rel="stylesheet" href="css/client_uptate_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <!-- Formulário. -->
            <div id="content-form">
                <!-- Título. -->
                <h2 id="title">Atualizar dados</h2>
                <span class="line"></span>
                <form method="post" action="client_update_action.php">
                    <!-- Nome. -->
                    <div id="name-group">
                        <label for="name">Nome completo: </label>
                        <input type='text' name="name" value="<?php echo $client->get_name(); ?>"/>
                    </div>
                    <!-- CPF. -->
                    <div id="cpf-group">
                        <label for="cpf">CPF: </label>
                        <input type='text' name="cpf" value="<?php echo $client->get_cpf(); ?>"/>
                    </div>
                    <!-- E-mail. -->
                    <div id="email-group">
                        <label for="email">E-mail: </label>
                        <input type='email' name="email" value="<?php echo $client->get_email(); ?>"/>
                    </div>
                    <!-- Gênero. -->
                    <div id="gender-group">
                        <label>Gênero: </label>
                        <input type="radio" name="gender" value="Masculino" <?php echo $male ?>/> Masculino
                        <input type="radio" name="gender" value="Feminino" <?php echo $female ?>/> Feminino
                    </div>
                    <!-- Data de nascimento. -->
                    <div id="date-of-birth-group">
                        <label for="date-of-birth">Data de nascimento: </label>
                        <input type='date' name="date-of-birth"  value="<?php echo $client->get_date_of_birth(); ?>"/>
                    </div>
                    <!-- Senha. -->
                    <div id="password-group">
                        <label for="password">Senha: </label>
                        <input type='password' name="password"/>
                    </div>
                    <div id="submit-group">
                        <input type="submit" value="Atualizar dados"/>
                    </div>
                    <!-- Mensagem de erro. -->
                    <?php echo $error; ?>
                </form>
            </div>
        </div>
    </body>
</html>
