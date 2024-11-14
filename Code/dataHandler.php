<?php
class DataHandler{
    private static $conn;
    public static function openConnection()
    {
        $severName="localhost:3308";
        $user="root";
        $pw="";
        $db="onlineshop";

        try {
            DataHandler::$conn = new PDO("mysql:host=$severName;dbname=$db", $user, $pw);
            DataHandler::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            echo "exception:" . $e->getMessage();
            return false;
        }
    }
    

}
?>