<?php

require_once('model/contactModel.php');

class contactController
{	
	/**
	* Create new instance
	*/
	function __construct()
	{
		$this->model = new contactModel;
	}

	/**
	* Show contact form
	*/
	public function contact() 
	{
		include('view/contact.php');		
	}

	/**
	* Input: filled in fields for sending email
	  Output: email sent to Peter Piper
	*/
	public function sendMail()
	{
		 if (isset($_POST['submit'])) {
		 	$naam = $_POST['naam'];
		 	$email = $_POST['email'];
		 	$bericht = $_POST['bericht'];

		 	$email= mail("brandon.louwaars@gmail.com", "Contact", "Naam: " . $naam . "<br>" . "email: " . $email . "<br><br>" . "Bericht: " . $bericht);

		 	if(!preg_match("/^\S+@\S+$/", $email)) {
      		return "dit is geen emailadres";
    }
		 } else {		 	
		 	$this->contact();
		 }
	}
		
}

// $naam = isset($_POST["naam"]);
    //         // check name only contains letters and whitespace
    //         if (!preg_match("/^[a-zA-Z ]*$/",$naam))
    //         {
    //             throw new dataException('alleen letters en witruimtes worden geaccepteerd');
    //         }   
    //         else 
    //         {
    //             if(str_word_count($naam)!=2)
    //             {
    //                  throw new dataException('naam moet worden in gevuld achternaam is optioneel');
    //             }
    //         }