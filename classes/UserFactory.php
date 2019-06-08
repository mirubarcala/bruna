<?php

class UserFactory
{
    public function create(User $user)
    {
        $userArray = [
            'name' => $name->getName(),
            'email' => $user->getEmail(),
            'phone' => $phone->getPhone(),
            'password' => HashPassword::hash($user->getPassword()),
            'avatar' => null
        ];

        return $userArray;
    }

}