<?php

//stableshing connection to DB
class Conection{
    private $host="50.87.249.35";
    private $port="3306";
    private $database="gringote_gringotech";
    private $username="gringote_admin";
    private $password="admin";
    private $opcoesConexao = [

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

        PDO::ATTR_PERSISTENT => true,

        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

    ]; 
    
    function __construct() {
        $this->host;
        $this->port;
        $this->database;
        $this->username;
        $this->password;
    }

    
 public function conectar() {

        try {

            $conn=new PDO("mysql:host=$this->host:$this->port;dbname=$this->database;charset=utf8", $this->username, $this->password, $this->opcoesConexao);

        } catch (PDOException $e) {

            exit('Erro ao tentar conexão: ' . $e->getMessage());

        }

        return $conn;

    } 

    public function executarSql($sql){

        $conn = $this->conectar();        

        $stmt=$conn->exec($sql);

    }
    
}

