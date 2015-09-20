<?php

namespace Shop\Controller;

class Confirmation extends Controller {


	public function index()
	{

		$products = $this->cart->getProducts();

		$this->view = new \Shop\View('confirmation');
		$this->view->set('sum', $this->cart->sum());

	}


}