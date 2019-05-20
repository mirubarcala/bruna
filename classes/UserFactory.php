<?php

class UserFactory 
{
  public function create(User $user)
  {
    $userArray = [
        'name' => $user->getName(),
        'email' => $user->getEmail(),
        'password' => HashPassword::hash($user->getPassword())
    ];
    return $userArray;
  }

}