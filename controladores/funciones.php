<?php
session_start();
function dd($valor){
    echo "<pre>";
        var_dump($valor);
    echo "</pre>";
    exit;
}

function validar($datos){
    $errores=[];
    
//VALIDACION NOMBRE

    if(isset($datos["nombre"])){
        $nombre = trim($datos["nombre"]);
    
    if(empty($nombre)){
        $errores["nombre"]= "El campo nombre no debe estar vacio";
        }
    }  

//VALIDACION EMAIL 

    $email = trim($datos["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores["email"]="Email invalido";
    }

//VALIDACION TELEFONO
    $telefono = trim($datos["telefono"]);
    if(empty($telefono)){
        $errores["telefono"]= "El campo teléfono no debe estar vacio";
    }elseif (strlen($telefono)<8) {
        $errores["telefono"]="El telefono debe tener como mínimo 8 cáracteres ";
    }

//VALIDACION PASSWORD Y REPASWORD

    $password= trim($datos["password"]);
    if(isset($datos["repassword"])){
        $repassword = trim($datos["repassword"]);
    }

    if(empty($password)){
        $errores["password"]= "El campo Password esta incompleto";
    }elseif (strlen($password)<6) {
        $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
    }
    if(isset($datos["repassword"])){
        if ($password != $repassword) {
            $errores["repassword"]="Las contraseñas no coinciden";
        }
    }
    
    return $errores;
}

function inputUsuario($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}

function armarRegistro($datos){
    $usuario = [
        "nombre"=>$datos["nombre"],
        "email"=>$datos["email"],
        "telefono"=>$telefono["telefono"],
        "password"=> password_hash($datos["password"],PASSWORD_DEFAULT),
        "perfil"=>1
    ];
    return $usuario;
}

function guardarUsuario($usuario){
    $jsusuario = json_encode($usuario);
    file_put_contents('usuarios.json',$jsusuario. PHP_EOL, FILE_APPEND);
}

function guardarTelefono($telefono){
    $jsusuario = json_encode($telefono);
    file_put_contents('usuarios.json',$jsusuario. PHP_EOL, FILE_APPEND);
}


function buscarEmail($email){
    $baseDatosUsuarios = abrirBaseDatos();
    foreach ($baseDatosUsuarios as $usuario) {
        if($usuario["email"]===$email){
            return $usuario;
        }
    }
    return null;
}


function abrirBaseDatos(){
    $datosjson = file_get_contents("usuarios.json");
    $datosjson = explode(PHP_EOL,$datosjson);
    array_pop($datosjson);
    foreach ($datosjson as  $usuario) {
        $baseDatosUsuarios[]= json_decode($usuario,true);
    }
    return $baseDatosUsuarios;
}

function crearSesion($usuario, $datos){
    $_SESSION["email"]=$usuario["email"];
    if (isset($datos["recordar"])){
        setcookie("password",$datos["password"],time()+365 * 24 * 60 * 60);
    }
}

function validarUsuario(){
    if(isset($_SESSION["email"])){
        return true;
    }elseif ($_COOKIE["email"]) {
        $_SESSION["email"]=$_COOKIE["email"];
        return true;
    }else
        return false;
}

