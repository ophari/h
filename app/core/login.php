<?php
require_once "connection.php";

class User extends Database
{
    private $conn;
    private $username;
    private $password;
    private $level;

    public function __construct()
    {
        $database = new Database;
        $this->conn = $database->getConnection();
    }

    public function Login()
    {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];

        $sql="SELECT * FROM users WHERE username = '$this->username'";
        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($this->password, $user['password'])) {
                session_start();
                $_SESSION['username'] = $user['username'];
                $_SESSION['level'] = $user['level'];

                // Set cookie
                $expiry = time() + (86400 * 30); // 30 hari
                setcookie('username', $user['username'], $expiry);
                setcookie('level', $user['level'], $expiry);

                if ($_SESSION['level'] == 'users') {
                    header('location: ../h/home.html');
                } elseif ($_SESSION['level'] == 'admin') {
                    header("location: /h/admin.html");
                }
            } else {
                echo "<script>alert('Username atau password salah');window.location='index.php';</script>";
            }
        } else {
            echo "<script>alert('Username atau password salah');window.location='index.php';</script>";
        }
        mysqli_close($this->conn);
    }
}

?>
