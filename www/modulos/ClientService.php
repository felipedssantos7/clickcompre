<?php

/* 
 * Este arquivo contém funções úteis para o tratamento dos dados do Cliente.
 */

class ClientService {
    # Validar CPF.
    function valideCPF($cpf) {
        // Retira pontuação.
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se a sequência é totalmente repetida.
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo de validação do CPF.
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                echo "false";
                return false;
            }
        }
        return true;
    }
}
