<?php

// Include PSR4 example autoloader
include 'src/autoloader.php';

// Setup our router with the rules
$router = new \Shop\Router();


// Add all the routes
$router->add("/", "\Shop\Controller\Index");

$router->add('/product/:id', "\Shop\Controller\Product");




// Find a matching route, and execute it.
$router->execute();
