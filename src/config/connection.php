<?php

require_once 'env.php';

class ConnectionDB
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $dsn;

    public function __construct(){
        $this->host = $GLOBALS['DB_HOST'];
        $this->dbname = $GLOBALS['DB_NAME'];
        $this->username = $GLOBALS['DB_USER'];
        $this->password = $GLOBALS['DB_PASS'];
    }

    public function getConnection(){
        $this->dsn = 'mysql:host='. $this->host .'; dbname='. $this->dbname .'; charset=utf8';
        try{
            $pdo = new PDO($this->dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            ]);
            return $pdo;
        }catch(PDOException $e){
            echo 'Error al procesar la conexion: '. $e->getMessage();
        }
    }
}

?>