<?php

    include "header.php";

    session_start();

    if (!isset($_SESSION['user_id'])) {
        // Якщо користувач не увійшов, редирект на сторінку входу
        header("Location: login.php");
        exit;
    }

    echo "Logowanie przebiegło pomyślnie! Witaj, " . $_SESSION['username'] . "!";

    include "footer.php";
?>