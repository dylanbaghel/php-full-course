<?php include 'config.php'; ?>
<?php 
    class DB {
        public $conn;

        public function __construct()
        {
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if ($this->conn->connect_error) {
                die("Connection Failed: " . $this->conn->connect_error);
            }
        }

        public function __destruct()
        {
            $this->conn->close();
        }
    }

?>