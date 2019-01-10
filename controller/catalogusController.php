<?php

require_once('model/catalogusModel.php');

class catalogusController
{	
	/**
	* Create new instance
	*/
	function __construct()
	{
		$this->model = new catalogusModel;
	}

	/**
	* Show catalogus
	*/
	public function showCatalogus() 
	{
		$bioscopen = $this->model->readCatalogus();
		include('view/catalogus.php');
	}
}

