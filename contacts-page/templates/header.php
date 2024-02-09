<?php
include_once("../config/process.php");

// Clears the message
if (isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

// Base URL
$baseURL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Contacts Page</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $baseURL ?>css/styles.css">
</head>
<body>
<header>
    <nav class="nav navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= $baseURL ?>index.php">
            <img src="<?= $baseURL ?>img/logo.svg" alt="Agenda">
        </a>
        <div>
            <div class="navbar-nav">
                <a class="nav-link active" id="home-link" href="<?= $baseURL ?>index.php">All contacts</a>
                <a class="nav-link active" href="<?= $baseURL ?>create.php">Add new contact</a>
            </div>
        </div>
    </nav>
</header>
