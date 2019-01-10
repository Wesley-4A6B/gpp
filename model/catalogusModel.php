<?php

require_once('controller/dataHandler.php');

/**
 * The catalogus model
 */
class catalogusModel {

    /**
    * Create new instance
    */

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }
    /**
     * Select info from the table bioscopen
     *
     * @return void
     */
    public function readCatalogus()
    {
       $query = 'SELECT * FROM bioscopen';
       $bioscopen = $this->dataHandler->ReadData($query);

       return $bioscopen;
    }
}