<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 10/21/2018
 * Time: 9:42 AM
 */

//require ("mysqli_connect.php");

$uid = $_SESSION['uid'];

//$sql = "SELECT * user_meal WHERE id = '".$uid."'";
$sql = "SELECT * FROM user_meal WHERE user_id = '".$uid."'";




$result = $dbc->query($sql);

/*if (!$result) {
    trigger_error('Invalid query: ' . $dbc->error);
}*/

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["user_id"]. " - Name: " . $row["meal_id"]. "<br>";
    }
} else {
    echo "0 results";
    echo '<script type="text/javascript">',
            'GenerateMeals();',
            '</script>';
}
$dbc->close();

?>
