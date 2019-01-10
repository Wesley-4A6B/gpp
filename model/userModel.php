<?php

require_once('controller/dataHandler.php');
require_once('model/rolemodel.php');

/**
 * The user model
 */
class userModel {

    /**
    * Create new instance
    */

	 public function __construct()
    {
        $this->dataHandler = new dataHandler("mysql", "localhost", "gameplayparty", "root", "");
        $this->isLoggedIn = false;
        $this->sessionLogin();
    }
    /**
     * Selects data from the users and an innerjoins in the roles
     *
     * @param string $username
     * @return void
     */
    public function read($username = null) {
        if(!$username) {
            return $this->dataHandler->readData(" SELECT *, `roles`.`name` as `role` FROM `users` INNER JOIN `roles` ON `roles`.`id` = `users`.`role_id`");
           
        } else {
            return $this->dataHandler->readData("SELECT *, `roles`.`name` as `role` FROM `users` INNER JOIN `roles` ON `roles`.`id` = `users`.`role_id` WHERE `username` = `username`")[0];
        }
    }
    /**
     * logges in as a role 
     *
     * @return void
     */
    public function sessionLogin() {
        if(isset($_SESSION["user"])) {
            $this->user = $this->read($_SESSION["user"]["username"]);
            $_SESSION["user"] = $this->user;
            $this->isLoggedIn = true;
            return true;
        }
        return false;
    }
    /**
     * the login function
     *
     * @param string $username
     * @param string $password
     * @return void
     */
    public function login(string $username, string $password) {
        if($this->checkPassword($username, $password)) {
            $this->user = $this->read($username);
            $_SESSION["user"] = $this->user;
            $this->isLoggedIn = true;
            return true;
        }
        return false;
    }
    
    /**
     * checks the user role
     *
     * @param array $roles
     * @return void
     */
    public function checkUserRole($roles) {
        if(!$this->isLoggedIn || !in_array($this->user["role"], $roles))
            return header("Location: /loginController/login");
    }
    
    /**
     * generates a password
     *
     * @param string $password
     * @return void
     */
    public function generatePassword(string $password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }
   /**
    * checks of the person is loged in correctly
    *
    * @param string $username
    * @param string $password
    * @return void
    */
    public function checkPassword(string $username, string $password) {
        $user = $this->read($username);
        // var_dump($user);
        if($user)
            return password_verify($password, $user["password"]);
        else
            return false;
    }

}
