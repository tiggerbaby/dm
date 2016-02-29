<?php

namespace App\Controllers;

use App\Views\BusinessEmailView;
use App\Views\HostBusinessEmailView;
use App\Views\EnquirySuccessView;
use App\Models\AboutModel;


class EnquirySuccessController 
{
	public function show()
	{
		$id = $_GET['id'];

		$aboutbusiness = AboutModel::findBy('id', $id);
		$suggesteremail = $aboutbusiness->email;

		
		$view = new EnquirySuccessView();
		$view->render();



        //send email to the suggester
		$suggesterEmail = new BusinessEmailView(compact('aboutbusiness'));
		$suggesterEmail->render();

		//send email to the host
		// $hostEmail = new HostBusinessEmailView();
		// $hostEmail->render();
	}

}