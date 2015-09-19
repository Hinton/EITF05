<?php

namespace Shop\Controller;

class Product extends Controller {

	
	public function index()
	{

		$cart = false;
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$this->cart->addProduct($this->getParam(':id'));
			$this->cart->save();

			$cart = true;
		}

		$products = new \Shop\Products();
		$product = $products->getProduct($this->getParam(':id'));

		$this->view = new \Shop\View('product', array(
			'id'      => $this->getParam(':id'),
			'product' => $product,
			'cart'    => $cart,
		));

	}


}