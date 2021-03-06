<?php

namespace Shop;

class Database {

	private $db;



	public function __construct()
	{
		$this->db = new \PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->user, $this->pass);
	}

	public function addUser($username, $address, $hashedpassword){
		$stmt = $this->db->prepare('INSERT INTO users(username, address, password) VALUES(?,?,?)');
		$stmt->execute(array($username, $address, $hashedpassword));
	}

	public function usernameAvailable($username){
		$stmt = $this->db->prepare('SELECT COUNT(username) FROM users WHERE username=?');
		$stmt->execute(array($username));
		$rows = $stmt->fetch(\PDO::FETCH_ASSOC);
		if($rows[0] == 0){
			return true;
		}else{
			return false;
		}
	}

	public function fetchUser($username){
	//	$mysqli = mysqli_connect("127.0.0.1", "root", "@mumintroll!", "webshop");

	//	$result = $mysqli->multi_query("SELECT * FROM users WHERE username = '$username' LIMIT 1");

    //var_dump($result);

    /* free result set */
   // $result->close();

		$query = "SELECT * FROM users WHERE username=?";
		$statement = $this->db->prepare($query);
		if (!$statement->execute(array($username))){
				return false;
		}
		$response = $statement->fetch(\PDO::FETCH_ASSOC);
		$user = new \Shop\User();
		$user->username = $response['username'];
		$user->hashedPassword = $response['password'];
		$user->address = $response['address'];
		return $user;
	}

}
