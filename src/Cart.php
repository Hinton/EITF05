<?php

namespace Shop;

class Cart {

	private $_products = [];
	private $_list;

	public function __construct()
	{
		$this->_list = new Products();
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
		$products = [];
		foreach ($this->_products as $id => $amount) {
			$products[$id] = array_merge($this->_list->getProduct($id), ['amount' => $amount]);
		}

		return $products;
	}

	public function count()
	{
		return count($this->_products);
	}

	public function load()
	{
		$products = [];
		if (isset($_SESSION['cart'])) {
			$products = json_decode($_SESSION['cart'], true);
		}

		$this->_products = $products;
	}

	public function save()
	{
		$_SESSION['cart'] = json_encode($this->_products);
	}

	public function sum()
	{
		$products = $this->getProducts();
		$sum = 0;

		foreach ($products as $p) {
			$sum += $p['price'] * $p['amount'];
		}

		return $sum;
	}

}