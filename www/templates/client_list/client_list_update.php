<?php

/* 
 * Este arquivo recebe os dados do cliente da página de listagem dos clientes 
 * escolhido para ser atualizado.
 */

# Permite acesso à variáveis visíveis em todas as páginas.
session_start();

# Recebe dados.
$client_array = isset($_POST['client']) ? $_POST['client'] : '';
# Verifica se há dados.
if($client_array != ''){
    # Salva dados em uma variável de sessão.
    $_SESSION['client'] = $client_array;
    $_SESSION['restricted_access'] = 1;
    echo 1;
} else {
    echo 0;
}
