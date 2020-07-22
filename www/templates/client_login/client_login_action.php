<?php

/* 
 * Esta classe recebe os dados da página de login, faz a validação e os
 * pesquisa no banco de dados.
 */

# Permite que use variáveis visíveis em todo site.
session_start();

# Importações.
require '../../modulos/Client.php';
require '../../modulos/ClientDao.php';

# Validação.
require './client_login_validation.inc.php';

# Registra cliente no banco de dados e recupera ID.
$client_datas = $clientDao->clientLogin($client);

# Verifica se há dados no array cliente.
if(isset($client_datas['id'])){
    $_SESSION['client'] = $client_datas;
    header('Location: ../client_home/client_home_page.php');
} else {
    header('Location: client_login_page.php?invalide_datas=2');
}

