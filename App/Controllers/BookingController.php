<?php

namespace App\Controllers;

use App\Views\EnquirySuccessView;

class BookingController 
{
	public function show()
	{
		
		$view = new BookingView();
		$view->render();
	}


}