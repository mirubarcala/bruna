<?php

class Auth
{
    public function login($email)
    {
        Session::set('email', $email);
        Cookie::set('email', $email, 3600);
    }

    public function validatePassword($password, $hash)
    {
        return password_verify($password, $hash);
    }

    static public function validarUsuario(){
        if(isset($_SESSION["email"])){
            return true;
        }elseif (isset($_COOKIE["email"])) {
            $_SESSION["email"]=$_COOKIE["email"];
            return true;
        }else{
            return false;
        }
    }

    public function logout()
    {
        if(!$_SESSION) {
            
        }
    }
}