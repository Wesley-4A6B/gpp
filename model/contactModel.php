<?php
require_once('controller/dataHandler.php');

/**
 * The contact model
 */
class contactModel {

    /**
	* Create new instance
    */
    
	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
}