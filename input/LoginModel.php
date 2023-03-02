<?php
require_once "../connection.php";
session_start();
class User_model extends Database {
    private $conn;
    private $username;
    private $password;

    public function __construct($username, $password) {
        $database = new Database();
        $this->conn = $database->getConnection();
        $this->username = $username;
        $this->password = $password;
    }


    public function doLogin() {
        $sql = "SELECT * FROM users WHERE username = '$this->username'";
        $result = mysqli_query($this->conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if ($user['level'] == 'admin') {
                // jika level adalah admin, tidak perlu verifikasi password
                $_SESSION['id_users'] = $user['id_users'];
                return $user;
            } elseif (password_verify($this->password, $user['password'])) {
                // jika level adalah non-admin, lakukan verifikasi password
                $_SESSION['id_users'] = $user['id_users'];
                return $user;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    // public function doLogin() {
    //     $sql = "SELECT * FROM users WHERE username = '$this->username'";
    //     $result = mysqli_query($this->conn, $sql);
    
    //     if (mysqli_num_rows($result) > 0) {
    //         $user = mysqli_fetch_assoc($result);
    //         if (password_verify($this->password, $user['password'])) {
    //             // tambahkan session id_users saat login berhasil
    //             $_SESSION['id_users'] = $user['id_users'];
    //             return $user;
    //         } else {
    //             return false;
    //         }
    //     } else {
    //         return false;
    //     }
    // }
    
}

?>