<?php
// User Class for account creation and login

class User
{
    private $con;


    function __construct() {
        include_once("../database/db.php");
        $db = new Database();
        $this->con = $db->connect();
        // if ($this->con) {
        //     echo "Connected";
        // } else {
        //     echo "this did not work";
        // }
    }

    // Checks if user exists

    private function emailExists($email) {
        $pre_stmt = $this->con->prepare("SELECT id FROM user WHERE email = ?");
        if ($pre_stmt) {
            $pre_stmt->bind_param("s", $email);
            $pre_stmt->execute();
            $pre_stmt->store_result();
            if ($pre_stmt->num_rows > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            echo "ERR: Email Exists";
            return "DATABASE_CONNECTION_FAIL";
        }
        // // s means string type
        // $pre_stmt->bind_param("s", $email);
        // $pre_stmt->execute() or die($this->con->error);
        // $pre_stmt->get_result();
        // $result = $pre_stmt->get_result();
        // if ($result->num_rows > 0) {
        //     return true;
        // } else {
        //     return false;
        // };
    }



    public function createUserAccount($username, $email, $password, $usertype) {
        // To protect your application from sql attack you can use prepared statement
        if ($this->emailExists($email)) {
            return ("EMAIL_ALREADY_EXISTS");
        } else {
            $pass_hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 8]);
            $date = date("Y-m-d");
            $notes = "";

            $pre_stmt = $this->con->prepare("INSERT INTO `user`(`username`, `email`, `password`, `usertype`, `register_date`, `last_login`, `notes`) VALUES (?,?,?,?,?,?,?)");
            if ($pre_stmt) {
                $pre_stmt->bind_param("sssssss", $username, $email, $pass_hash, $usertype, $date, $date, $notes);
                $pre_stmt->execute() or die($this->con->error);
                $pre_stmt->get_result();
                $result = $pre_stmt->get_result();
                return $this->con->insert_id;
            } else {
                echo "ERR: Create User Account";
            }
        }
    }

    public function userLogin($email, $password) {
        $pre_stmt = $this->con->prepare("SELECT id, username, password, last_login FROM user WHERE email = ?");
        $pre_stmt->bind_param("s", $email);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        
        if ($result->num_rows < 1) {
            return "EMAIL_NOT_FOUND";
        } else {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                $_SESSION["userid"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["last_login"] = $row["last_login"];
                $last_login = date("Y-m-d h:i:s");
                $pre_stmt = $this->con->prepare("UPDATE user SET last_login = ? WHERE id = ?");
                $pre_stmt->bind_param("si", $last_login, $_SESSION["userid"]);
                $pre_stmt->execute() or die($this->con->error);
                $pre_stmt->get_result();
                return "LOGIN_SUCCESS";
            } else {
                return "PASSWORD_NOT_MATCHED";
            }
        }
    }
}

$user = new User();

// echo $user->createUserAccount("test", "test@mail.com", "1234567890", "Admin");
// echo $user->userLogin("test@mail.com", "1234567890");
// echo "helloss"
// $obj->connect();


    // public function register($username, $email, $password) {
    //     $password = md5($password);
    //     $statement = $this->con->prepare("INSERT INTO users(username, email, password) VALUES(?, ?, ?)");
    //     $statement->bind_param("sss", $username, $email, $password);
    //     if ($statement->execute()) {
    //         return "REGISTER_SUCCESS";
    //     } else {
    //         return "REGISTER_FAIL";
    //     }
    // }

    // private function getUser($email) {
    //     $query = $this->con->prepare("SELECT * FROM users WHERE email=?");
    //     $query->bind_param("s", $email);
    //     $query->execute();
    //     $result = $query->get_result();
    //     return $result->fetch_assoc();
    // }
?>