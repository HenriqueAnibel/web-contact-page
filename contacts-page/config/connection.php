<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        //ERROR MODE
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e){
        // IF ERROR
        $error = $e->getMessage();
        echo "Error: $error";
    }