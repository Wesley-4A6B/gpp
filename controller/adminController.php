<?php

require_once('model/adminModel.php');
require_once('model/userModel.php');

class adminController
{	
	/**
	* New instance of a class
	*/
	function __construct()
	{	
		$this->adminModel = new adminModel;
		$this->userModel = new userModel;
		$this->userModel->checkUserRole(["admin"]);
		// echo "<pre>";
		// var_dump($this->userModel);
		// echo "</pre>";
	}

	/**
	* Find bugs with this method.
	*/
	private function debug($data)
	{
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}

	/**
	* show bios panel
	*/
	public function biosPanel() 
	{	
		require_once('view/biosPanel.php');
	}

	/**
	* show form for adding bios
	*/
	public function addBios() 
	{
		require_once('view/addBios.php');
	}

	/**
	* show admin panel
	*/
	public function adminPanel()
	{
		require_once('view/adminPanel.php');
	}

	/**
	* show cms
	*/
	public function editOverOns()
	{
		require_once('view/editOverOns.php');
	}
	
	/**
	* Input: form filled in with data for new bios
	  Output: new bios in database
	*/
	public function collectBios() {
		if(isset($_POST["create"])) {
			$naam = $_POST['bios_naam'];
			$foto = $_FILES['image']["name"];
			$adres = $_POST['adres'];
			$postcode = $_POST['postcode'];
			$stad = $_POST['stad'];
			$provincie = $_POST['provincie'];
			$begintijd = $_POST['begintijd'];
			$eindtijd = $_POST['eindtijd'];
			$auto = $_POST['bereikbaar_auto'];
			$ov = $_POST['bereikbaar_ov'];
			$fiets = $_POST['bereikbaar_fiets'];
			$rolstoel = $_POST['rolstoeltoegankelijkheid'];
			$voorwaarden = $_POST['voorwaarden'];
			$link = $_POST['link'];
			$bioscopen = $this->adminModel->createBios($naam, $foto, $adres, $postcode, $stad, $provincie, $begintijd, $eindtijd, $auto, $ov, $fiets, $rolstoel, $voorwaarden, $link);

			if(isset($_POST["create"])) {

            $target_path = "view/images/thumbnails/";
            $target_path = $target_path . basename($_FILES['image']['name']); 
           
   		   if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
                echo "The file ".  basename( $_FILES['image']['name']). 
                " has been uploaded";
            } else{
                echo "There was an error uploading the file, please try again!";
            }
        }
			header("Location: ../../catalogusController/showCatalogus");
			exit;
		} else {
			require_once('view/addBios.php');
		}
		
	}

	/**
	* show cms
	*/
	public function showCMS() 
	{
		$cms = $this->adminModel->readCMS();
		include('view/cms.php');
	}

}
