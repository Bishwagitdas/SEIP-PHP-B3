<?php

namespace Pondit;
use PDO;
use PDOException;

class DB
{
    public $pdo;

    public function connection(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login_php";
        
        try{
            $this->pdo = new PDO(
                "mysql:host=$servername;
                dbname=$dbname", 
                $username, 
                $password
        );
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
        }catch(PDOException $e){
        
            echo $e->getMessage() . $e->getLine();
        
        }
    }

    public function prepareSql($sql){
    
        return $this->pdo->prepare($sql);

    }
}

