<?php

namespace Shop;

class User {

    public $username;
    public $hashedPassword;
    public $address;

    public static function getUser($username) {
        $db = new \Shop\Database();
        $obtainedUser = $db->fetchUser($username);
        if($obtainedUser == false){
          return false;
        }
        return $obtainedUser;
    }
}
