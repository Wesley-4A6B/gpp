<?php

require_once('model/userModel.php');

class loginController
{	 
    /**
    * Create new instance
    */
	function __construct()
	{
		$this->userModel = new userModel;
	}

     /**
    * Input: Login data
      Output: Logged in or failed login
    */
	 public function login() 
    {
    if(isset($_REQUEST["submit"])) {
		$this->userModel->login($_REQUEST["username"], $_REQUEST["password"]);
		// echo("<pre>");
        // var_dump($this->userModel);
        // echo("</pre>");
        if(!$this->userModel->isLoggedIn)
		die(header("Location: ../loginController/login"));

        switch($this->userModel->user["role"]) {
            case "admin":
			header("Location: ../adminController/adminPanel");

                break;
            case "bioscoop":
			header("Location: ../adminController/adminPanel");
                break;
             default:
			// header("Location: ../adminController/adminPanel");
                break;
        }
    } else {
        include "view/login.php";
    }
    
     }
	
}
