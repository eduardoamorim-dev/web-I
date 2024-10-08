<?php


include_once("ConnectionFactory_class.php"); //PDO
include_once("Contato_class.php"); //entidade

class ContatoDAO
{
    // DAO - Data Acess Object
    // CRUD - Creat, Read , Update e Delete
    // Operações básicas de banco de dados

    public $con = null; //obj recebe conexão

    public function __construct()
    {
        $conF = new ConnectionFactory();
        $this->con = $conF->getConnection();
    }

    // cadastrar

    public function cadastrar($cont)
    {
        try {
            $stmt = $this->con->prepare(
                "INSERT INTO contato(nome, email, telefone)
    VALUES (:nome, :email, :telefone)"
            );

            // : é utilizado para criar uma âncora, será ligado pelo bindValue 
            // bindValue indica qual é âncora e o que deve ser inserido nela.

            //ligamos as âncoras aos valores de Contato
            $stmt->bindValue(":nome", $cont->getNome());
            $stmt->bindValue(":email", $cont->getEmail());
            $stmt->bindValue(":telefone", $cont->getTelefone());

            $stmt->execute(); //execução do SQL
            // $this->con->close();
            //$this->con = null;

        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }
}
