<?php
session_start();

$conn = new mysqli('localhost:3306', 'root', 'Hpmani@6234', 'login_system');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, email, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $email;
            echo "<script>
                    alert('Login successful!');
                    window.location.href = 'Customerpage.php';
                  </script>";
        } else {
            echo "Invalid credentials!";
        }
    } else {
        echo "Invalid credentials!";
    }

    $stmt->close();
}

$conn->close();
?>
