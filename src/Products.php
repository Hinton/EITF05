<?php

namespace Shop;

class Products {


	private $_products = [
		12 => [
			'name'  => 'Test product',
			'price' => 200,
		]
	];

	public function __construct()
	{

	}

	public function getProduct($id)
	{
		return $this->_products[$id];
	}

}