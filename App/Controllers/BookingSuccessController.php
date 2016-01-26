<?php

namespace App\Controllers;

use App\Views\BookingSuccessView;

class BookingSuccessController 
{
	public function show()
	{
		
		$view = new BookingSuccessView();
		$view->render();
	}


}