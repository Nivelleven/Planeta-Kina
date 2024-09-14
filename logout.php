<?php
    session_start();
    session_destroy(); // Знищення сесії
    header("Location: logowanie.php"); // Переадресація на сторінку логіну
    exit;
?>
