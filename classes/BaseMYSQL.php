<?php
class BaseMYSQL extends Database{
    static public function conexion($host,$db,$user,$password,$puerto,$charset){
        try {
            $dsn = "mysql:host=".$host.";"."dbname=".$db.";"."port=".$puerto.";"."charset=".$charset;
            $baseDatos = new PDO($dsn,$user,$password);
            $baseDatos->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $baseDatos;
        } catch (PDOException $errors) {
            echo "No me pude conectar a la BD ". $errors->getmessage();
            exit;
        }
    }

    
    static public function guardarUsuario($pdo,$user,$tabla,$avatar){
        $sql = "insert into $tabla (id,name,email,phone,password) values (:id,:name,:email,:phone, :password)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':id',$user->getId());
        $query->bindValue(':name',$user->getName());
        $query->bindValue(':email',$user->getEmail());
        $query->bindValue(':phone',$phone);
        $query->bindValue(':password',Encriptar::hashPassword($user->getPassword()));
        
        $query->execute();

    }
  
    public function read(){
       
    }
    public function update(){
    
    }
    public function delete(){
       
    }
    public function save($user){
        
    }

} 