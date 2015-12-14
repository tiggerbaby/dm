<?php

namespace App\Views;

abstract class View
{
	protected $data;

	public function __construct($data = [])
	{
		$this->data = $data;
	}

	abstract public function render();

}