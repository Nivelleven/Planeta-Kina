<?php
    include "header.php";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "planetakina";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Połączenie nieudane: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $conn->real_escape_string($_POST['email']);
        $contactText = $conn->real_escape_string($_POST['contactText']);
        
        $sql = "INSERT INTO contacts (email, text) VALUES ('$email', '$contactText')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Wiadomość została pomyślnie wysłana!";
        } else {
            echo "Błąd: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();

    include "footer.php";
?>