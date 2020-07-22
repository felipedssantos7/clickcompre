<?php

/* 
 * Este arquivo recebe os dados do cliente da página de listagem dos clientes 
 * escolhido para ser deletado.
 */

require '../../modulos/ClientDao.php';
$clientDao = new ClientDao();

# Recebe dados.
$client_array = isset($_POST['client']) ? $_POST['client'] : '';
# Verifica se há dados.
if($client_array != ''){
    # Deleta cliente.
    $clientDao->clientDelete($client_array['id']);    
    echo 1;
} else {
    echo 0;
}
