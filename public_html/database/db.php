<?php 

class Database {

    private $con;

    public function connect() {
        include_once("constants.php");
        $this->con = new Mysqli(HOST, USER, PASS, DB);
        if ($this->con) {
            // echo "Connected";
            return $this->con;
        } else {
            echo "ERR: Not Connected";
            return "DATABASE_CONNECTION_FAIL";
        }
    }
}

// $db = new Database();
// $db->connect();
?>