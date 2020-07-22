<?php

/* 
 * Esta classe recebe os dados da página de cadastro, faz a validação e os
 * insere no banco de dados.
 */

# Permite que use variáveis visíveis em todo site.
session_start();

# Importações.
require '../../modulos/Client.php';
require '../../modulos/ClientDao.php';
require '../../modulos/ClientService.php';

# Validação.
require './client_register_validation.inc.php';

# Registra cliente no banco de dados e recupera ID.
$clientDao->clientRegister($client);
$client_datas = $clientDao->clientLogin($client);

# Verifica se há dados no array cliente.
if(isset($client_datas['id'])){
    $_SESSION['client'] = $client_datas;
    header('Location: ../client_home/client_home_page.php');
}

