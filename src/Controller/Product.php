<?php

namespace Shop\Controller;

class Product extends Controller {

	protected $name = 'Product';
	
	public function index()
	{
		$token = new \Shop\Token();
		$cart = false;
		if ($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			if (! $token->validToken($_POST['csrf'])) {
				die('CSRF ERROR');
			}
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
			'csrf'    => $token->getToken(),
		));

	}


}