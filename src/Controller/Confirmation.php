<?php

namespace Shop\Controller;

class Confirmation extends Controller {

	protected $name = 'Receipt';

	public function index()
	{

		$products = $this->cart->getProducts();

		$this->view = new \Shop\View('confirmation');
		$this->view->set('sum', $this->cart->sum());
		$this->view->set('products', $this->cart->getProducts());

		$this->cart->emptyCart();
		$this->cart->save();

	}

}