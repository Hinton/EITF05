<?php

namespace Shop\Controller;

class Logout extends Controller {


	public function index()
	{
		session_destroy();
		$this->view = new \Shop\View('logout');
	}


}
