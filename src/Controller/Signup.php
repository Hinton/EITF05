<?php

namespace Shop\Controller;

class Signup extends Controller {

	private $message = null;

	public function index()
	{

		$this->view = new \Shop\View('signup', array(
			'message' => $this->message,
			'hasMessage' => false,
		));

		$signupModel = new \Shop\Signup();

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$username = $_POST['username'];
			$address = $_POST['address'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];


			$signupSuccessful = $signupModel->signup($username, $address, $password, $repassword);

			if($signupSuccessful){
				$this->view = new \Shop\View('index');
				$this->view->set('name', $username);
			} else{
				$this->message = $signupModel->getMessage();
				$this->view->set('message', $this->message);
				$this->view->set('hasMessage', true);
			}
		}
	}


}
