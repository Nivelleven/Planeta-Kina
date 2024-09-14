<?php
    include "header.php";

    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $conn = new mysqli('localhost', 'root', '', 'planetakina');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                echo "Logowanie przebiegło pomyślnie! Witaj " . $_SESSION['username'];
                header("Location: dashboard.php");
                exit;
            } else {
                echo "Hybne hasło.";
            }
        } else {
            echo "Nie znaleziono użytkownika z tymm E-mail.";
        }

        $stmt->close();
        $conn->close();
    }

    include "footer.php";
?>
