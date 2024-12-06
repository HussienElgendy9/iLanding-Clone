<?php
include('includes\Database.php');

class User {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function register($name, $email, $password) {
        // Hash the password
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL))
        {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$hashedPassword')";
            // Prepare SQL statement to insert user

            if ($this->conn->query($sql) === TRUE) {
                return true;
            } else {
                return false;
            }
        }

        
    }

    public function login($email, $password) {
        // Prepare SQL statement to fetch user by email
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return true;
            }
        }
        return false;
    }
}
