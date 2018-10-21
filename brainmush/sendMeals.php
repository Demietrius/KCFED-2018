<?php
$uid = $_SESSION['uid'];
$sql = "SELECT * FROM user_meal WHERE user_id = '".$uid."'";
$result = $dbc->query($sql);
/*if (!$result) {
    trigger_error('Invalid query: ' . $dbc->error);
}*/
if ($result->num_rows > 0) {
    $userMeals = array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($userMeals, $row);
        //echo "id: " . $row["user_id"]. " - Name: " . $row["meal_id"]. " " .$row["meal_type"]. "<br>";
    }
    $jsonUserMeals = json_encode($userMeals);
} else {
    echo '<script type="text/javascript">',
            'GenerateMeals();',
            '</script>';
}
$dbc->close();

?>
