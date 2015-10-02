<?php

namespace Shop;

class Login {

  public function __construct()
  {

  }

  public function login($username, $password){
    $user = \Shop\User::getUser($username);
    if($user == false){
      return false;
    }
    if(password_verify($password, $user->hashedPassword)){
      $_SESSION['user'] = [$username, $user->address];
      return $user;
    } else {
      return false;
    }
  }

  public function getMessage(){
    return "Wrong username or password!";
  }
}
