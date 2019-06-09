<?php
class Validador{

    public function validacionUsuario($usuario){
        
        $errores=array();
        $nombre = trim($usuario->getNombre());
        if(isset($nombre)) {
            if(empty($nombre)){
                $errores["nombre"]= "El campo nombre debe estar completo";
            }
        }
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email incorrecto";
        }
        $password= trim($usuario->getPassword());
   
        $repassword = trim($usuario->getRepassword());
        

        if(empty($password)){
            $errores["password"]= "El campo password debe estar completo";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(isset($repassword)){
            if ($password != $repassword) {
                $errores["repassword"]="Las contraseñas no coinciden";
            }
        }
        if($usuario->getAvatar()!=null){
            if($_FILES["avatar"]["error"]!=0){
                $errores["avatar"]="Error debe subir imagen";
            }else{
                $nombre = $_FILES["avatar"]["name"];
                $ext = pathinfo($nombre,PATHINFO_EXTENSION);
                if($ext != "png" && $ext != "jpg"){
                    $errores["avatar"]="Seleccione archivo png ó jpg";
                }
            }
        }
    
        return $errores;
    }
    //VALIDACION LOGIN
    public function validacionLogin($usuario){
        $errores=array();
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="El email no es válido";
        }
        $password= trim($usuario->getPassword());
       
        if(empty($password)){
            $errores["password"]= "El campo password debe estar completo";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
    
        return $errores;
    }
    //VALIDACION EN EL CASO DE RECUPERACION DE CONTRASEÑA
    public function validacionOlvide($usuario){
        
        $errores=array();
    
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="El email no es válido";
        }
        $password= trim($usuario->getPassword());
   
        $repassword = trim($usuario->getRepassword());
        

        if(empty($password)){
            $errores["password"]= "El campo password debe estar completo";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }
        if(empty($repassword)){
            $errores["repassword"]= "El campo confirmar nuevo password debe estar completo";
        }
    
        return $errores;
    }


}

