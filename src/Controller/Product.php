<?php

namespace Shop\Controller;

class Product extends Controller {

	
	public function index()
	{

		$this->view = new \Shop\View('product', array(
			'id'    => $this->getParam(':id'),
			'name'  => 'Test product',
			'price' => '200.00',
		));

	}


}