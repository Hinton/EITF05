<?php

namespace Shop\Controller;

class Index extends Controller {

	protected $name = 'Home';

	public function index()
	{

		$this->view = new \Shop\View("index");

		if (isset($_SESSION['user'])) {
			$this->view->set('username', $_SESSION['user'][0]);
		}

	}

}