<?php

/*
 * Esse arquivo recebe a frase escrita pelo cliente, verifica se está 
 * correta e, caso sim, remove a conta do usuário do banco de dados.
 */

# Permite que use variáveis visíveis em todo site.
session_start();

# Importações.
require '../../modulos/ClientDao.php';

# Recebe frase.
$phrase = isset($_POST['phrase']) ? $_POST['phrase'] : '';
# Válida frase.
if($phrase == "Eu desejo apagar minha conta."){
    # Recupera id.
    $id = $_SESSION['client']['id'];
    # Delete cliente.
    $clientDao = new ClientDao();
    $clientDao->clientDelete($id);
    # Limpa variável de sessão.
    $_SESSION['client'] = '';
    # Redireciona usuário para a página inicial.
    header('Location: ../index.php');
} else {
    # Retorna para página de remoção informando erro.
    header('Location: client_delete_page.php?invalide_datas=1');
}