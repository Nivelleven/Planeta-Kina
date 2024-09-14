<?php
    include "header.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $conn = new mysqli('localhost', 'root', '', 'planetakina');

        if ($conn->connect_error) {
            die("Błąd połączenia: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Rejestracja zakończona sukcesem!";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    include "footer.php";
?>
