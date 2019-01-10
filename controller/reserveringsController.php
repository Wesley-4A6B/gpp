<?php

require_once('model/reserveringsModel.php');

class reserveringsController
{	
	/**
	* Create new instance
	*/
	function __construct()
	{
		$this->reserveringsModel = new reserveringsModel;
	}

	/**
	* Show reserve form
	*/
	public function reservering() 
	{
		$tijden = $this->reserveringsModel->readTijden();
		include('view/reserveringsform.php');
		
    }
   	
   	/**
	* Input: reserve data
	  Output: user has reserved
	*/
    public function collectreservering() {
		if(isset($_POST["create"])) {
			$voornaam = $_POST['voornaam'];
			$achternaam = $_POST['achternaam'];
			$telefoonnummer = $_POST['telefoonnummer'];                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
			$straatnaam = $_POST['straatnaam'];
			$huisnummer = $_POST['huisnummer'];
			$toevoeging = $_POST['toevoeging'];
            $postcode = $_POST['postcode'];
            $stad = $_POST['stad'];
            $provincie = $_POST['provincie'];
			$reservering_date = $_POST['reservering_date'];
			$begin_tijd = $_POST['begin_tijd'];
			$eind_tijd = $_POST['eind_tijd'];
			$aantal_personnen = $_POST['aantal_personnen'];
			$klant = $this->reserveringsModel->createKlant($voornaam, $achternaam , $telefoonnummer, $straatnaam, $huisnummer, $toevoeging, $postcode, $stad, $provincie);
			$reservering = $this->reserveringsModel->createReservering($reservering_date, $begin_tijd , $eind_tijd, $aantal_personnen);
			// $tijden = $this->reserveringsModel->createReservering();
			// header("Location: {$_SERVER['HTTP_REFERER']}");
			// exit;
		}
		$this->reservering();
	}
	
}
