<?php

    include "header.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_id = $_POST['user_id'];
        $seats = json_decode($_POST['seats'], true);

        $conn = new mysqli('localhost', 'root', '', 'planetakina');

        if ($conn->connect_error) {
            die("Błąd podłączenia: " . $conn->connect_error);
        }

        foreach ($seats as $seat) {
            $seatNumber = $seat['seat'];
            $rowNumber = $seat['row'];
            $movieName = $seat['movie'];

            $sql = "INSERT INTO tickets (user_id, movie_name, seat_number, row_number)
                        VALUES ('$user_id', '$movieName', '$seatNumber', '$rowNumber')";

            if (!$conn->query($sql)) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        echo "Bilety zostały kupione pomyślnie!";

        $conn->close();
    }

    include "footer.php";

?>
