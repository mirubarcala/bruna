<?php

class User
{
    private $name;
    private $email;
    private $password;
    private $avatar = null;
    private $phone = null;

    public function __construct(string $name, string $email, string $password, string $phone = null, $avatar = null)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getPhone(string $phone)
    {
        return $this->phone;
    }
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }


 
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
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