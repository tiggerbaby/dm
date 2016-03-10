<?php

namespace App\Controllers;

use App\Views\RegisterSuccessView;

class RegisterSuccessController 
{
	public function show()
	{
		
		$view = new RegisterSuccessView();
		$view->render();
	}


}