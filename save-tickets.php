<?php
    include 'header.php'; 

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "bilety";

    $data = json_decode(file_get_contents('php://input'), true);

    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    
    if ($data === null) {
        echo "Дані не отримані або мають невірний формат.";
        var_dump($input);  // Виводимо, що саме отримує PHP для дебагу
        exit;
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";



      foreach ($data['selectedSeats'] as $query) {
        if ($conn->query($query) === TRUE) {
          echo "Data transfered successfully";
        } else {
          echo "Nah" .$conn->error;
        }
      } 
    
    $conn->close();

    include 'footer.php'; 
?>