<?php
class Validator
{
  public function validate(User $user, string $repassword = "")
  {
    $errors = array();

    if($user->getEmail() == ""){
      $errors['email'] = "El email no puede ser vacio";
    } else if(!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "El email es invalido";
    }
    //validar el phone como me dijo rodo

    if($user->getPassword() == "") {
      $errors['password'] = "Por favor, escriba una contraseña";
    }else if (strlen($user->getPassword()) < 6) {
      $errors['password'] = "Por favor, indique una contraseña mayor a 6 digitos";
    }else if ($repassword !== "" && $user->getPassword() !== $repassword) {
      $errors['repassword'] = "Las contraseñas no coinciden";
    }

    return $errors;

  }








}