<?php
require_once "connection.php";
class User extends Database{
    private $conn;
    private $id_users;
    private $username;
    private $password;
    private $email;
  

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function Register() {
        $this->id_users = uniqid(1,9999).time();
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $this->email = $_POST['email'];

        // Check if the id_users already exists
        $sql = "SELECT * FROM users WHERE id_users = '$this->id_users'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // id_users already exists, generate a new one
            $this->id_users = rand(1,9999).time();
        }

        // Encrypt the password
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        // Prepare the SQL statement
        $sql = "INSERT INTO users values ('$this->id_users','$this->username', '$this->password', '$this->email','users','')";

        // Execute the query
        if (mysqli_query($this->conn, $sql)) {
            echo "<script>alert('Berhasil registrasi, silakan login');window.location='login.html';</script>";

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }

        // Close the connection
        
        mysqli_close($this->conn);
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
