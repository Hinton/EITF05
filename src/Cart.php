<?php

namespace Shop;

class Cart {

	private $_products = [];

	public function __construct()
	{

	}

	public function addProduct($productId)
	{
		if (! isset($this->_products[$productId])) {
			$this->_products[$productId] = 0;
		}
		$this->_products[$productId]++;
	}

	public function getProducts()
	{
		return $this->_products;
	}

	public function count()
	{
		return count($this->_products);
	}

	public function load()
	{
		$products = [];
		if (isset($_SESSION['cart'])) {
			$products = json_decode($_SESSION['cart']);
		}

		$this->_products = $products;
	}

	public function save()
	{
		$_SESSION['cart'] = json_encode($this->_products);
	}

}