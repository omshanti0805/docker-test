<?php
class Database{
 
    // specify your own database credentials
    private $host = "awsmysqlinstanace.cih5ouu0iydl.ap-south-1.rds.amazonaws.com";
    private $db_name = "acmestore";
    private $username = "awsuser";
    private $password = "ultimate";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>


