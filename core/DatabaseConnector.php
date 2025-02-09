<?php
class DatabaseConnector
{
    private $host = "localhost";
    private $dbname = "kakaDB";
    private $user = "root";
    private $password = "502914";
    public $conn;
    function getConnection()
    {
        $this->conn = null;
        try
        {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            error_log("Connection failed: " . $e->getMessage()); // Логирование ошибки вместо вывода
            return null;
        }
        return $this->conn;
    }

}
