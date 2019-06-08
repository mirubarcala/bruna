<?php

class DBMySQL extends Database
{
    public static function connect($host, $db_name, $username, $password, $port = null)
    {
        $dsn = "";
        if($port !== null) {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name . ';port=' . $port;
        } else {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $db_name;
        }
        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            return $pdo;
        } catch (PDOException $e) {
           
           die ('No pude conectarme a la base de datos' . $e->getMessage());
           
        }
    }

  
    public function read(){
        //
    }
    public function update(){
        //
    }
    public function delete(){
        //
    }
    public function save($user){
        //ver si era $userArray
    }

} 