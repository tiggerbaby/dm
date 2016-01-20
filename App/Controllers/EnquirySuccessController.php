<?php

namespace App\Controllers;

use App\Views\BusinessEmailView;
use App\Views\HostBusinessEmailView;
use App\Views\EnquirySuccessView;


class EnquirySuccessController 
{
	public function show()
	{
		
		$view = new EnquirySuccessView();
		$view->render();

        //send email to the suggester
		$suggesterEmail = new BusinessEmailView();
		$suggesterEmail->render();

		//send email to the host
		$hostEmail = new HostBusinessEmailView();
		$hostEmail->render();
	}

}