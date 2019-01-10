<?php

require_once('controller/dataHandler.php');

/**
 * The bios model
 */
class biosModel {

    /**
    * Create new instance
    */

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    /**
     * Selects contacts from the contacts
     *
     * @return void
     */
    public function readBios()
    {
       $query = 'SELECT * FROM contacts';
       $bioscopen = $this->dataHandler->ReadData($query);

       return $bioscopen;
    }
}