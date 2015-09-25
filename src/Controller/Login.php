<?php

namespace Shop\Controller;

class Login extends Controller {

	private $message = null;

	public function index()
	{
		$this->view = new \Shop\View('login', array(
			'message' => $this->message,
			'hasMessage' => false,
		));

		$loginModel = new \Shop\Login();

		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			$loginSuccessful = $loginModel->login($username, $password);

			if($loginSuccessful){
				$this->view = new \Shop\View('index');
				$this->view->set('name', $username);
			} else{
				$this->message = $loginModel->getMessage();
				$this->view->set('message', $this->message);
				$this->view->set('hasMessage', true);
			}
		}

	}


}
