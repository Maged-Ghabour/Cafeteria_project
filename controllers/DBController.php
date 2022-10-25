<?php


class Db
{
    public $servername, $db_username, $db_password, $dbname;
    // database info => updated later  
    public function __construct($servername, $db_username, $db_password, $dbname)
    {
        $this->servername = $servername;
        $this->db_username = $db_username;
        $this->db_password = $db_password;
        $this->dbname = $dbname;
    }

    // Make Connection 
    public function getConnection()
    {
        $conn = new mysqli($this->servername, $this->db_username, $this->db_password, $this->dbname);
        return $conn;
    }
}

// Take an Object From Class Db 
$db = new Db("localhost", "root", "", "php_iti_project");
// $conn => used in any page you use database to fetch, get, update and delete data. as ( global $conn)
$conn = $db->getConnection();
