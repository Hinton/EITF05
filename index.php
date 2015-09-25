<?php

session_start();

// Include PSR4 example autoloader
include 'src/autoloader.php';

// Setup our router with the rules
$router = new \Shop\Router();


// Add all the routes
$router->add("/", "\Shop\Controller\Index");

$router->add('/product/:id', "\Shop\Controller\Product");

$router->add("/cart", "\Shop\Controller\Cart");

$router->add("/confirmation", "\Shop\Controller\Confirmation");

$router->add("/signup", "\Shop\Controller\Signup");

$router->add("/login", "\Shop\Controller\Login");

$router->add("/logout", "\Shop\Controller\Logout");

// Find a matching route, and execute it.
$router->execute();
