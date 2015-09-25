<?php

namespace Shop\Controller;

class Logout extends Controller {


	public function index()
	{
		$_SESSION = array();
		session_destroy();
		
		$this->view = new \Shop\View('logout');
	}


}
