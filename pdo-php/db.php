<?php include 'config.php'; ?>

<?php
class DB
{
    public $host = DB_HOST;
    public $db_name = DB_NAME;
    public $db_user = DB_USER;
    public $db_pass = DB_PASS;
    public $conn;


    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // public function __destruct()
    // {
    //     $conn = null;
    // }
}
?>