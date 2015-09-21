<?php

namespace Shop\Controller;

class Index extends Controller {

	protected $name = 'Home';

	public function index()
	{

		$this->view = new \Shop\View("index");

		$this->view->set('name', 'Foo');

	}


}