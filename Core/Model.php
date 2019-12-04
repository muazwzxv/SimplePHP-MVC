<?php

class Model{
    private static $dbConn = null;

    private static function getDB(){
        if(self::$dbConn == null){
            $db = ConnectDB::getInstance();
            //var_dump($db);
            self::$dbConn = $db->getDBConn();
        }

        return self::$dbConn;
    }
    
    public function query($sql){
        $conn = self::getDB();
        $result = $conn->query($sql);
        $conn->close();
        
        return $result;        
    }

    public function existRows($result){
        if(!$result)
            return $result;

        return $result->num_rows > 0;
    }
}
?>
