# Basic WebShop for EITF05

To demystify the webshop, follow index.php -> controller -> model & view

The database credentials are located in Database.php

## Autoloader
We use a PSR4 autoloader, the source is located in src directory.

## Router
The webshop uses a extremly basic routing system to load controllers, the routes are defined in index.php.

## MVC
We follow the MVC principle, with controllers managing the requests, models managing the data, and views managing the presentation. (Simplified)
