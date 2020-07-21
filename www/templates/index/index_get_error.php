<?php

/*
 * Este arquivo verifica se o usuário tentou entrar em uma página que exigia
 * cadastro/login prévio.
 */

# Lê URL.
$not_login = isset($_GET['not_login']) ? $_GET['not_login'] : '';
# Verifica erro.
if($not_login == 1){
    $not_login = 'Cadastre-se ou faça login para comprar produtos da loja!';
}

