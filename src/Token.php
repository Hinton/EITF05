<?php
namespace Shop;

class Token{

    public function __construct()
    {
      if (! isset($_SESSION['CSRF_TOKEN'])) {
        $_SESSION['CSRF_TOKEN'] = base64_encode( openssl_random_pseudo_bytes(32));
      }
    }
    public function getToken() {
      return $_SESSION['CSRF_TOKEN'];
    }

    public function validToken($token) {
      return $token === $this->getToken();
    }
}
