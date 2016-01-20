<?php

namespace App\Controllers;

use App\Views\EnquirySuccessView;

class EnquirySuccessController 
{
	public function show()
	{
		
		$view = new EnquirySuccessView();
		$view->render();
	}

		
		//send email to the host
		$hostEmail = new HostBusinessEmailView();
		$hostEmail->render();
}