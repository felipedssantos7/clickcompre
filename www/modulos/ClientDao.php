<?php

/* 
 * Este arquivo possui todas as ações feitas sobre a tabela de usuários.
 */

class ClientDao {
    
    # PHP Data Object.
    var $pdo;
    function __construct() {
        $this->pdo = new PDO("mysql:dbname=heroku_b4cd65cb5d1df28;host=us-cdbr-east-02.cleardb.com","b81698ac9e2b6a","2241ac90");
    }
    
    # Cadastro.
    public function clientRegister($client){
        # Procedimento.
        $stmt = $this->pdo->prepare("CALL clientRegister(:name, :cpf, :email, :gender, :date_of_birth, :password)");
        # Validação e substituição de dados.
        $stmt->bindValue(':name', $client->get_name(), PDO::PARAM_STR);
        $stmt->bindValue(':cpf', $client->get_cpf(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $client->get_email(), PDO::PARAM_STR);
        $stmt->bindValue(':gender', $client->get_gender(), PDO::PARAM_STR);
        $stmt->bindValue(':date_of_birth', $client->get_date_of_birth(), PDO::PARAM_STR);
        $stmt->bindValue(':password', $client->get_password(), PDO::PARAM_STR);
        # Execução.
        $stmt->execute();
    }

    # Login.
    public function clientLogin($client){
        # Procedimento.
        $stmt = $this->pdo->prepare("CALL clientLogin(:email, :password)");
        # Validação e substituição de dados.
        $stmt->bindValue(':email', $client->get_email(), PDO::PARAM_STR);
        $stmt->bindValue(':password', $client->get_password(), PDO::PARAM_STR);
        # Execução.
        $stmt->execute();
        # Retorno.
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    }
    
    # Atualização.
    public function clientUpdate($client){
        # Procedimento.
        $stmt = $this->pdo->prepare("CALL clientUpdate(:id, :name, :cpf, "
                . ":email, :gender, :date_of_birth)");
        # Validação e substituição de dados.
        $stmt->bindValue(':id', $client->get_id(), PDO::PARAM_INT);
        $stmt->bindValue(':name', $client->get_name(), PDO::PARAM_STR);
        $stmt->bindValue(':cpf', $client->get_cpf(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $client->get_email(), PDO::PARAM_STR);
        $stmt->bindValue(':gender', $client->get_gender(), PDO::PARAM_STR);
        $stmt->bindValue(':date_of_birth', $client->get_date_of_birth(), PDO::PARAM_STR);
        # Execução.
        $stmt->execute();
        return $client;
    }
    
    # Remoção.
    public function clientDelete($id){
        # Procedimento.
        $stmt = $this->pdo->prepare("CALL clientDelete(:id)");
        # Validação e substituição de dados.
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        # Execução.
        $stmt->execute();
    }
    
}

