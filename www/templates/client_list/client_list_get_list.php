<?php

# Importações.
require '../../modulos/ClientDao.php';

# Faz consulta no banco.
$clientDao = new ClientDao();
$clients = $clientDao->clientList();
$client_table = "";
# Verifica se há pelo menos 1 cliente cadastrado.
if(isset($clients[0]['id'])){
    for($i = 0;$i < sizeof($clients); $i++){
        # Converte array para json.
        $client = json_encode($clients[$i]);
        # Converte data de nascimento.
        $timestamp = strtotime($clients[$i]['date_of_birth']);
        $dob = date("d/m/Y", $timestamp);
        # Cria linha.
        $client_table .= '<tr id="' . $clients[$i]['id'] . '"><td>' . ($i + 1) . '</td>';
        $client_table .= '<td>' . $clients[$i]['name'] . '</td>';
        $client_table .= '<td>' . $clients[$i]['cpf'] . '</td>';
        $client_table .= '<td>' . $clients[$i]['email'] . '</td>';
        $client_table .= '<td>' . $clients[$i]['gender'] . '</td>';
        $client_table .= '<td>' . $dob . '</td>';
        $client_table .= "<td><button class='btn' onclick='clientUpdate(" . $client . ");'>Atualizar</button></td>";
        $client_table .= "<td><button class='btn' onclick='clientDelete(" . $client . ");'>Deletar</button></td></tr>";
    }
} else {
    $client_table = '';
}