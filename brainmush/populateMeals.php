<?php
require ("../mysqli_connect.php");

session_start();

$mealid = htmlspecialchars($_GET["mealid"]);
$mealtype = htmlspecialchars($_GET["type"]);

$uid = $_SESSION['uid'];

$sql = "INSERT INTO user_meal (user_id, meal_id, meal_date, meal_type) VALUES ('".$uid."','".$mealid."', CURRENT_TIMESTAMP, '".$mealtype."')";

$dbc->query($sql);

$dbc->close();

?>