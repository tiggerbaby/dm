<?php

namespace App\Controllers;

use App\Views\AboutView;
use App\Models\AboutModel;


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
	}

	public function store()
	{
		var_dump($_POST);
		$enqiry = new AboutModel($_POST);
        
		if(! $enqiry->isValid()){
			var_dump($enqiry);
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
        // header("Location: .\?page=enqirysuccess&show_modal=true");
        header("Location: .\?page=enqirysuccess&show_modal=true");
		
	}

	// public function success()
	// {
	// 	$view = new AboutView();
	// 	$view->rendersuccess();
	// }
	public function getFormData($id = null){
		if(isset($_SESSION['enqiryform'])){
			$enqiry = $_SESSION['enqiryform'];
			unset($_SESSION['enqiryform']);
		} else {
			$renqiry = new AboutModel((int)$id);
		}
		return $enqiry;
	}
}