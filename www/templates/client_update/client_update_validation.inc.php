<?php

/* 
 * Essa classe tem por objetivo receber os dados da página de cadastro e
 * fazer a sua validação.
 */

# Recebe os dados e verifica foram definidos.
$name_client = isset($_POST['name']) ? $_POST['name'] : '';
$cpf_client = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$email_client = isset($_POST['email']) ? $_POST['email'] : '';
$gender_client = isset($_POST['gender']) ? $_POST['gender'] : '0';
$date_of_birth_client = isset($_POST['date-of-birth']) ? $_POST['date-of-birth'] : '';
$password_client = isset($_POST['password']) ? $_POST['password'] : '';

# Cria objetos de manipulação de cliente.
$client = new Client($name_client, $cpf_client, $email_client, 
        $gender_client, $date_of_birth_client, $password_client);
$client->set_id($_SESSION['client']['id']);
$clientDao = new ClientDao();
$clientService = new ClientService();

# Verifica se há campos vazios.
if($client->get_name() != '' 
        && $cpf_client != '' 
        && $client->get_email() != '' 
        && $client->get_gender() != '' 
        && $client->get_date_of_birth() != '' 
        && $password_client != ''){
    # Verifica se o nome, e-mail e senha são válidos.
    if(strlen(($client->get_name())) <= 2){
        header('Location: client_update_page.php?invalide_datas=1');
        die();
    } else if(!$clientService->valideCPF($client->get_cpf())){
        header('Location: client_update_page.php?invalide_datas=2');
        die();
    } else if(!filter_var($client->get_email(), FILTER_VALIDATE_EMAIL)){
        header('Location: client_update_page.php?invalide_datas=3');
        die();
    } else if(md5($client->get_password()) != $_SESSION['client']['password']){
        header('Location: client_update_page.php?invalide_datas=4');
        die();
    }
} else {
    # Retorna para página de cadastro.
    header('Location: client_update_page.php?invalide_datas=5');
    die();
}

# Criptografia.
$client->set_password(md5($client->get_password()));