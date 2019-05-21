<?php

class Validator
{
    public function validate(User $user, string $cpassword = "")
    {
        $errors = array();

        if($user->getEmail() == "") {
            $errors['email'] = "El email no es valido";
        } else if(!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "El email no es valido";
        }

        if($user->getPassword() == "") {
            $errors['password'] = "La contraseña debe ser mayor a 6 digitos";
        }else if(strlen($user->getPassword()) < 6) {
            $errors['password'] = "La contraseña debe ser mayor a 6 digitos";
        } else if( $cpassword !== "" && $user->getPassword() !== $cpassword) {
            $errors['cpassword'] = "Las contraseñas no coinciden";
        }
        if(isset($_FILES)) {
            if(!$this->validateAvatar($_FILES)) {
                $errors['image'] = "Imagen no valida";
            }
        }

        return $errors;
    }

    private function validateAvatar($file)
    {
        return true;
    }
}