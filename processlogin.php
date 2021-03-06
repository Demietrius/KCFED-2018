<?php
require("mysqli_connect.php");
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array();

// REGISTER USER
if(isset($_POST['reg_user'])) {
    // receive all input values from the form
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $password_1 = mysqli_real_escape_string($dbc, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($dbc, $_POST['password_2']);
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($dbc, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database
        $query = "INSERT INTO user (email, password) VALUES('$email', '$password')";
        mysqli_query($dbc, $query);
        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($dbc, $query);
        if (mysqli_num_rows($result) == 1)
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
                $_SESSION['uid'] = $row['id'];
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $results = mysqli_query($dbc, $query);
        if (mysqli_num_rows($results) == 1) {
            while($row = mysqli_fetch_array($results, MYSQLI_ASSOC))
                $_SESSION['uid'] = $row['id'];

            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong password combination");
        }
    }
}
?>