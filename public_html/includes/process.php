<?php 
include_once("DBOperation.php");
include_once("../database/constants.php");
include_once("user.php");

// For Signup
if (isset($_POST["username"]) AND isset($_POST["email"])) {
    $user = new User();
    $result = $user->createUserAccount($_POST["username"], $_POST["email"], $_POST["password"], $_POST["usertype"]);
    echo $result;
    exit();
}

// For Login
if (isset($_POST["log_email"]) AND isset($_POST["log_pass"])) {
    $user = new User();
    $result = $user->userLogin($_POST["log_email"], $_POST["log_pass"]);
    echo $result;
    exit();
}


// To get Category
if (isset($_POST["getCategory"])) {
    $obj = new DBOperation();
    $rows = $obj->getAllRecords("categories");
    // echo json_encode($rows);
    foreach($rows as $row) {
        echo "<option value='".$row["parent_cat"]."'>".$row["category_name"]."</option>";
    }
    exit();
}
?>