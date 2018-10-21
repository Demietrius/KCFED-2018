<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header("location: login.php");
    }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>4 Col Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><h3>tasteBuds</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">My Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="grocerylist.php">Grocery List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="preferences.php">Preferences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?logout='1'">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>