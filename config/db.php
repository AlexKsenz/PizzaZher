<?php
    
    // Данные для подключение к базе данных
    $servername = "localhost";
    $database = "blog_php";
    $username = "root";
    $password = "";
    // создаем соединение
    $conn = mysqli_connect($servername, $username, $password, $database);
    $conn->set_charset("utf8");
    
    // проверяем соединение 
    if (!$conn) {
        die("connection failed: " . mysqli_connect_error());
    }

    

?>