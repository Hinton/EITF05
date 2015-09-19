<?php

namespace Shop\Controller;

class Controller {

	private $params = [];
	protected $view;
	protected $name = 'Unknown'; // Page name
	protected $cart;

	public function __construct($params)
	{
		$this->params = $params;

		// Setup the cart
		$this->cart = new \Shop\Cart();
		$this->cart->load();
	}

	protected function getParam($i)
	{
		return $this->params[$i];
	}

	// Runs before the action
	public function before()
	{

	}

	// Runs after the action
	public function after()
	{
		if ($this->view) {
			$template = new \Shop\View("template");
			$template->set('content', $this->view->render());
			$template->set('name', $this->name);
			$template->set('numProductsInCart', $this->cart->count());

			echo $template->render();
		}
	}
	
}