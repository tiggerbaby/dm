<?php

namespace App\Controllers;

use App\Views\AboutView;
use App\Models\AboutModel;
use App\Views\BusinessEmailView;
use App\Views\HostEmailView;


class AboutController 
{
	public function show()
	{   
		$enqiry = new AboutModel;
		$view = new AboutView(compact('enqiry'));
		$view->render();
	}

	public function displayerror()
	{
		$enqiry = $this->getFormData();
		$view = new AboutView(compact('enqiry'));
		$view->render();

		//send email to the suggester
		$businessEmail = new BusinessEmailView($this->eniryform);
		$businessEmail->render();
         
         //send email to the hoster
		$hostEmail = new HostEmailView($this->eniryform);
		$hostEmail->render();
	}

	public function store()
	{
		$enqiry = new AboutModel($_POST);
        
		if(! $enqiry->isValid()){
			$_SESSION['enqiryform'] = $enqiry;
			header("Location: .\?page=enqiry.invalid");
			exit();
		}
		$show_modal = false;
		if(isset($_POST['modal'])){
			 $activate = $_POST['modal'];
			 if($activate == "active"){
			 	$show_modal = true;
			 }
		}
		
		$enqiry -> save();
      
        header("Location: .\?page=enqirysuccess&id=$enqiry->id");        	
	}

	public function getFormData($id = null){
		if(isset($_SESSION['enqiryform'])){
			$enqiry = $_SESSION['enqiryform'];
			unset($_SESSION['enqiryform']);
		} else {
			$enqiry = new AboutModel((int)$id);
		}
		return $enqiry;
	}
}	

	