<?php

class User
{
    private $name;
    private $email;
    private $phone;
    private $password;
    private $repassword;
    private $avatar = null;

    public function __construct($email,$password,$repassword=null, $name=null,$phone,$avatar=null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->repassword = $repassword;
        $this->avatar = $avatar;
    }
 
    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;

    }

    public function getAvatar()
    {
        return $this->avatar;
    }


    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

    }
}