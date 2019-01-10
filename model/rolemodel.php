<?php

require_once('controller/dataHandler.php');


/**
 * The role model
 */
class roleModel {

    /**
    * Create new instance
    */

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
    }

    /**
     * read teh roles
     *
     * @param integer $id
     * @return void
     */
    public function read(int $id = null) {
        if(!$id) {
            return $this->dataHandler->readData("SELECT * FROM `roles`");
        } else {
            return $this->dataHandler->readData("SELECT * FROM `roles` WHERE `id` = :id", [":id" => $id], false);
        }
    }

}
