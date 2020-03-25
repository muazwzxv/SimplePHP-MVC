<?php
class ConnectDB{
    private static $db = null;
    private $conn;
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "mvc_test";
    private function __construct(){
        // Connect db
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        //var_dump($this->conn);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance(){
        if(self::$db == null){
            self::$db = new ConnectDB();
            //var_dump(self::$db);
        }

        return self::$db;
    }

    public function getDBConn(){
        return $this->conn;
    }
}
?>
