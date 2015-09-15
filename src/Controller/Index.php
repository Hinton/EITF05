<?php

namespace Shop\Controller;

class Index extends Controller {

	
	public function index()
	{

		$this->view = new \Shop\View("index");

		$this->view->set('name', 'Foo');

	}


}