<?php

namespace App\Controllers;

use App\Views\RegisterFormView;
use App\Views\LoginFormView;
use App\Views\UserAccountView;
use App\Models\User;
use App\Models\Booking;

class AuthenticationController extends Controller
{
	public function register()
	{
		$user = $this->getUserFormData();
		$view = new RegisterFormView(compact('user'));
		$view->render();
	}
	public function store()
	{
		$user = new User($_POST);
		if(! $user->isValid()){
			$_SESSION['user.form'] = $user;
			header("Location: .\?page=register");
			exit();
		}
		$user->save();
		header("Location:.\?page=registersuccess");
	}
	public function login()
	{
		$user = $this->getUserFormData();
		$error = isset($_GET['error']) ? $_GET['error'] : null;
		$view = new LoginFormView(compact('user', 'error'));
		$view->render();
	}
	public function attempt()
	{
		if(static::$auth->attempt($_POST['email'],$_POST['password'])){
			//login is successful
			header("Location: ./");
			exit();
		}
		header("Location: .\?page=login&error=true");
		exit();
	}
	public function logout()
	{
		static::$auth->logout();
		header("Location:.\?page=login");
		exit();
	}
	protected function getUserFormData($id = null)
	{
		if(isset($_SESSION['user.form'])){
			$user = $_SESSION['user.form'];
			unset($_SESSION['user.form']);
		} else {
			$user =new User($id); 
		}
		return $user;
	}

	public function index()
	{   
		// $account = new User((int)$_GET['id']);
		$view = new UserAccountView();
		$view->render();
	}
}