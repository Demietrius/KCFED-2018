<?php
$mealid = htmlspecialchars($_GET["mealid"]);
$mealtype = htmlspecialchars($_GET["type"]);

$con = mysqli_connect('www.math-cs.ucmo.edu', 'TeamMules1', 'ThisIsYourPassword-1', 'TeamMules1', '3306');

if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"TeamMules1");

$sql = "INSERT INTO user_meal (user_id, meal_id, meal_date, meal_type) VALUES ('1','".$mealid."', CURRENT_TIMESTAMP, '".$mealtype."')";

$con->query($sql);

$con->close();

?>