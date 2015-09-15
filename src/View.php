<?php

namespace Shop;

class View {

	private $variables;
	private $template;

	public function __construct($template, $variables = [])
	{
		$this->template = $template;
		$this->variables = $variables;
	}

	public function set($variable, $value)
	{
		$this->variables[$variable] = $value;
	}

	public function render()
	{
		ob_start();

		extract($this->variables);

		require(__DIR__."/../templates/".$this->template.".php");

		return ob_get_clean();
	}

}