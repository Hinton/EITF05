<?php

namespace Shop;

class Database {

	public $pdo;

	public __construct()
	{
		$this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	}


}