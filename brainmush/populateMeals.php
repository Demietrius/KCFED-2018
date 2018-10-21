<?php
require ("../mysqli_connect.php");

$mealid = htmlspecialchars($_GET["mealid"]);
$mealtype = htmlspecialchars($_GET["type"]);

if (!$dbc)
{
    die('Could not connect: ' . mysqli_error($dbc));
}

//mysqli_select_db($con,"TeamMules1");

$sql = "INSERT INTO user_meal (user_id, meal_id, meal_date, meal_type) VALUES ('1','".$mealid."', CURRENT_TIMESTAMP, '".$mealtype."')";

$dbc->query($sql);

$dbc->close();

?>