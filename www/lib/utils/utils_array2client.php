<?php

/* 
 * Este arquivo recebe o array que contém os dados do cliente e os transforma 
 * em um objeto do tipo Cliete.
 */

# Importações.
require '../../modulos/Client.php';

# Permite que use variáveis visíveis em todo site.
session_start();

# Verifica se o cliente fez login.
$client_aux = isset($_SESSION['client']) ? $_SESSION['client'] : '';
if($client_aux != ''){
    # Conversão.
    $client = new Client(
            $client_aux['name'], 
            $client_aux['cpf'], 
            $client_aux['email'],
            $client_aux['gender'],
            $client_aux['date_of_birth'], 
            $client_aux['password']);
    $client->set_id($client_aux['id']);
} else {
    # Redireciona para a página inicial.
    header('Location: ../../templates/index.php?not_login=1');
}

