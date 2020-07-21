<?php

/* 
 * Essa classe tem por objetivo receber os dados da página de cadastro e
 * fazer a sua validação.
 */

# Recebe os dados e verifica foram definidos.
$email_client = isset($_POST['email']) ? $_POST['email'] : '';
$password_client = isset($_POST['password']) ? $_POST['password'] : '';

# Cria objeto de manipulação de cliente.
$client = new Client('', '', $email_client, '', '', $password_client);
$clientDao = new ClientDao();

# Verifica se há campos vazios.
if($client->get_email() == '' || $client->get_password() == ''){
    # Retorna para página de cadastro.
    header('Location: client_login_page.php?invalide_datas=1');
    die();
}

# Criptografia.
$client->set_password(md5($client->get_password()));