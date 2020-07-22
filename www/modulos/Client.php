<?php

/**
 * Descrição de Cliente.
 *
 * @author felipe
 */
class Client {
    
    # Atributos.
    private $_id;
    private $_name;
    private $_cpf;
    private $_email;
    private $_gender;
    private $_date_of_birth;
    private $_password;

    # Construtor de cadastro.
    function __construct($_name, $_cpf, $_email, $_gender, $_date_of_birth, $_password) {
        $this->_name = $_name;
        $this->_cpf = $_cpf;
        $this->_email = $_email;
        $this->_gender = $_gender;
        $this->_date_of_birth = $_date_of_birth;
        $this->_password = $_password;
    }
    
    # Gets e sets
    function get_id() {
        return $this->_id;
    }

    function get_name() {
        return $this->_name;
    }

    function get_cpf() {
        return $this->_cpf;
    }

    function get_email() {
        return $this->_email;
    }

    function get_gender() {
        return $this->_gender;
    }

    function get_date_of_birth() {
        return $this->_date_of_birth;
    }

    function get_password() {
        return $this->_password;
    }

    function set_id($_id) {
        $this->_id = $_id;
    }

    function set_name($_name) {
        $this->_name = $_name;
    }

    function set_cpf($_cpf) {
        $this->_cpf = $_cpf;
    }

    function set_email($_email) {
        $this->_email = $_email;
    }

    function set_gender($_gender) {
        $this->_gender = $_gender;
    }

    function set_date_of_birth($_date_of_birth) {
        $this->_date_of_birth = $_date_of_birth;
    }

    function set_password($_password) {
        $this->_password = $_password;
    }
    
    # To String.
    public function __toString() {
        return 'ID: ' . $this->_id
                .'<br>Nome: ' . $this->_name 
                . '<br>CPF: ' . $this->_cpf 
                . '<br>E-mail: ' . $this->_email 
                . '<br>Gênero: ' . $this->_gender 
                . '<br>Data de nascimento: ' . $this->_date_of_birth 
                . '<br>Senha: ' . $this->_password;
    }


}
