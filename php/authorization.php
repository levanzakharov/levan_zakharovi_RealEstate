<?php
session_start();
include "db.php";
include "global.php";

if (isset($_POST['authorization'])) {
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password =  mysqli_real_escape_string($conn,$_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username or Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($results);

    if (mysqli_num_rows($results) != 1) {
        array_push($errors, "Username or password is incorrect");
    }
    
    foreach ($errors as $value) {
        echo $value;
        echo "<br>";
    }

    if (count($errors) == 0) {
        $_SESSION['userId'] = $row['userId'];
        $_SESSION['username'] = $username;
        var_dump($_SESSION);
        header('location: ../www/user/user.php?login=success');
    }
  }


?>