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
require './client_update_validation.inc.php';

# Registra cliente no banco de dados e recupera ID.
$clientDao->clientUpdate($client);
$client_datas = $clientDao->clientLogin($client);

# Verifica se o superusuário está atualizando os dados.
$restricted_access = isset($_SESSION['restricted_access']) ? $_SESSION['restricted_access'] : 0;

# Verifica se há dados no array cliente.
if(isset($client_datas['id'])){
    if($restricted_access == 1){
        $_SESSION['client'] = '';
        $_SESSION['restricted_access'] = 0;
        header('Location: ../client_list/client_list_page.php');
    } else {
        $_SESSION['client'] = $client_datas;
        header('Location: ../client_home/client_home_page.php');
    }
}

