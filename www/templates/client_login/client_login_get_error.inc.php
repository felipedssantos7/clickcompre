<?php

/* 
 * Este arquivo lê a URL e verifica se houve algum erro no login.
 */

$error = '';
$invalide_datas = isset($_GET['invalide_datas']) ? $_GET['invalide_datas'] : 0;
switch ($invalide_datas){
    case 0:
        break;
    case 1:
        $error = 'Preencha todos os campos!*';
        break;
    case 2:
        $error = 'Cliente não cadastrado!';
        break;
}
