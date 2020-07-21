<?php

/* 
 * Este arquivo lê a URL e verifica se houve algum erro no cadastramento.
 */

$error = '';
$invalide_datas = isset($_GET['invalide_datas']) ? $_GET['invalide_datas'] : 0;
switch ($invalide_datas){
    case 0:
        break;
    case 1:
        $error = 'Nome inválido!';
        break;
    case 2:
        $error = 'CPF inválido!';
        break;
    case 3:
        $error = 'E-mail inválido!';
        break;
    case 4:
        $error = 'Senha incorreta!';
        break;
    case 5:
        $error = 'Preencha todos os campos!';
        break;
}

# Verifica gênero.
$male = $female = '';
if($client->get_gender() == "Masculino"){
    $male = 'checked';
} else {
    $female = 'checked';
}