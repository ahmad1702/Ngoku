<?php 

/**
 * DBOperation
 */
class DBOperation
{
    private $con;

    function __construct() {
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db->connect();
        // if ($this->con) {
        //     echo "Connected";
        // }
    }

    public function addCategory($parent, $cat) {
        $pre_stmt = $this->con->prepare("INSERT INTO `categories`(`parent_cat`, `category_name`, `status`) VALUES (?,?,?)");
        $status = 1;
        $pre_stmt->bind_param("isi", $parent, $cat, $status);
        $result = $pre_stmt->execute() or die($this->con->error);
        if ($result) {
            echo "Category Added";
            return "CATEGORY_ADDED";
        } else {
            return 0;
        }
    }

    public function getAllRecords($table) {
        $pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        $rows = array();

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }
        return "NO_DATA";
    }
}

// $newdb = new DBOperation();

// Get All Records
// $newdb->addCategory(1, "Cell Phones");

// Get All Records
// echo"<pre>";
// print_r($newdb->getAllRecords("categories"));
?>