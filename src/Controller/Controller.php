<?php

namespace Shop\Controller;

class Controller {

	private $params = [];
	protected $view;
	protected $name = 'Unknown'; // Page name

	public function __construct($params)
	{
		$this->params = $params;
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

			echo $template->render();
		}
	}
	
}