<?php
require("mysqli_connect.php");
$status = 'FAIL';
if(isset($_POST['old-meal-id'], $_POST['new-meal-id'])) {
    $uid = $_SESSION['uid'];
    $oldMealId = $_POST['old-meal-id'];
    $newMealId = $_POST['new-meal-id'];
    $sql = "UPDATE user_meal " +
        "SET meal_id = '".$newMealId."' " +
        "WHERE user_id = '".$uid."' " +
        "   AND meal_id = '".$oldMealId."'";
    if(@mysqli_query($dbc, $query)) {
        $status = 'SUCCESS';
    }
}
echo $status;
$dbc->close();
?>
