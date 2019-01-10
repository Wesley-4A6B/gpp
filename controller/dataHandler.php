<?php

class dataHandler
{
    

    public $conn;

    /**
    * Create database connection
    */
    function __construct($dbtype, $servername, $dbname, $username, $password)
    {
        try {
            $this->conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    /**
    * Input: SQL for Creating data
      Output: last inserted ID
    */
    function CreateData($sql)
    {
        $data = $this->conn->prepare($sql);
        $data->execute();
        return $this->conn->lastInsertId();
    }

    /**
    * Input: SQL for Reading Data
      Output: the SQL you asked for
    */
    function ReadData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
    * Input: SQL for Updating Data
      Output: the SQL you asked for
    */
    function UpdateData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    /**
    * Input SQL for Deleting Data
      Output: the SQL you asked for
    */
    function DeleteData($sql)
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}

?>