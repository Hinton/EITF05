<?php

namespace Shop;

class Signup {

  private $errorMessage = null;


  public function __construct()
  {

  }

  public function signup($username, $address, $password, $repassword){
    $db = new \Shop\Database();

    if (!$this->checkUsername($username)){
      return false;
    }
    if(!$db->usernameAvailable($username)){
      $this->errorMessage = "Username not available!";
      return false;
    }
    $passwordOK = $this->checkPasswordSecurity($password, $repassword);
    
    if($passwordOK){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['user'] = [$username, $address];
        $db->addUser($username, $this->untagAddress($address), $hash);
        return true;
    }

    return false;
  }

  private function checkUsername($username){
    if(!ctype_alnum($username)){
      $this->errorMessage = "Your username is not alphanumeric!";
      return false;
    }
    return true;
  }
  private function untagAddress($address){
    return htmlspecialchars($address);
  }

  private function checkPasswordSecurity($password, $repassword){
    if(empty($password)){
      $this->errorMessage = "Password Field Empty!";
      return false;
    }
    elseif ($password != $repassword) {
      $this->errorMessage = "Passwords did not match!";
      return false;
    }
    elseif (strlen($password) <= '8') {
      $this->errorMessage = "Your password must contain at least 8 characters!";
      return false;
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
      $this->errorMessage = "Your password must contain at least 1 number!";
      return false;
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
      $this->errorMessage = "Your password must contain at least 1 uppercase letter!";
      return false;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
      $this->errorMessage = "Your password must contain at least 1 lowercase letter!";
      return false;
    } elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{8,100}$/', $password)) {
      $this->errorMessage = "Your password is not alphanumeric!";
      return false;
    }

    return true;
  }

  public function getMessage(){
    return $this->errorMessage;
  }

}
