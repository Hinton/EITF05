<?php

namespace Shop\Controller;

class Cart extends Controller {


	public function index()
	{

		$products = $this->cart->getProducts();

		$this->view = new \Shop\View('cart');
		$this->view->set('products', $products);
		$this->view->set('sum', $this->cart->sum());

	}


}