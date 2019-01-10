<?php

require_once('model/biosModel.php');

class biosController
{	
	/**
	* Create new instance
	*/
	function __construct()
	{
		$this->model = new biosModel;
	}

	/**
	*Show bios
	*/
	public function showBios() 
	{
		$bioscopen = $this->model->readBios();
		include('view/biosView.php');
	}

	/**
	* Show homepage
	*/
	public function home() 
	{
		include('view/home.php');
		
	}

	/**
	* Show about us
	*/
	public function overons() 
	{
		include('view/overons.php');
		
	}

	/**
	* Show login function
	*/
	public function login() 
	{
		include('view/login.php');
		
	}
	
}
