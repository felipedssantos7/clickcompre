<!DOCTYPE html>
<?php require '../../lib/utils/utils_array2client.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HomePage</title>
        <!-- CSS. -->
        <link rel="stylesheet" href="css/client_home_style.css">
        <link rel="stylesheet" href="../components/css/components_navbar_style.css">
    </head>
    <body>
        <!-- Navbar. -->
        <?php require '../components/components_navbar.inc.php'; ?>
        <div id="content">
            <!-- Dados do cliente. -->
            <span id="client-info">
                <h2 id="title">Informações do cliente</h2>
                <span class="line"></span>
                <div id="datas">
                    <label>Identificador: </label>
                        <?php echo " ". $client->get_id(); ?><br>
                    <label>Nome: </label>
                        <?php echo " ". $client->get_name(); ?><br>
                    <label>CPF: </label><?php echo " ". $client->get_cpf(); ?><br>
                    <label>E-mail: </label>
                        <?php echo " ". $client->get_email(); ?><br>
                    <label>Gênero: </label>
                        <?php echo " ". $client->get_gender(); ?><br>
                    <label>Data de nascimento: </label>
                        <?php echo " ". $client->get_date_of_birth(); ?><br>
                    <label>Senha criptografada: </label>
                        <?php echo " ". $client->get_password(); ?><br>
                </div>
                <!-- Opções. -->
                <div id="buttons">
                    <a href="../client_update/client_update_page.php">
                        <button>Atualizar meus dados</button>
                    </a>
                    <a href="../client_delete/client_delete_page.php">
                        <button>Apagar minha conta</button>
                    </a>
                </div>
            </span>
        </div>
    </body>
</html>
