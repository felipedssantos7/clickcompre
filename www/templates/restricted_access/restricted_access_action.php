<?php

/* 
 * Esta classe recebe os dados da página de acesso restrito, faz a validação e 
 * os consulta no banco de dados.
 */

# Recebe dados.
$id = $_POST['id'];
$password = $_POST['password'];

if($id == 'admin' && $password == 'adm123'){
    # Redireciona para a página de listagem dos clientes.
    header('Location: ../client_list/client_list_page.php');
} else {
    # Retorna para a página anterior informando o erro.
    header('Location: restricted_access_page.php?invalide_datas=1');
}
