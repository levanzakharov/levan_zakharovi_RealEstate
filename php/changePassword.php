<?php
include "db.php";
include "global.php";
 session_start();

if (isset($_POST['changePassword'])) {
    var_dump($_SESSION);
    $username = $_SESSION['username'];
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if (empty($password_2)) { array_push($errors, "New Password is required"); }

    
    $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $row = mysqli_fetch_assoc($result);


    if (ctype_alnum($password_2)) { 
        if (7 < strlen($password_2)){ 
            if (strcspn($password_2, '0123456789') != strlen($password_2)){
                if (strcspn($password_2, 'abcdefghijklmnopqrstuvwxyz') != strlen($password_2)) {
                    if (strcspn($password_2, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') == strlen($password_2)) {
                        array_push($errors, "New Password does not have capital letter");
                    }
                }
                else {
                    array_push($errors, "New Password does not have small letter");
                }
            }
            else {
                array_push($errors, "New Password does not have number");
            }
        }
        else {
            array_push($errors, "New Password is short");
        }
    }
    else {
        array_push($errors, "New Password has special character");
    }

    
    if ($row) {
        if($row['password'] !== $password_1){
            array_push($errors, "password does not match");      
        }      
    }

    echo $username;
    echo "<br>";
    echo $row['password'];
    echo "<br>";
    echo $password_2;

    var_dump($errors);

    // if (count($errors) == 0) {
    //     $password = md5($password_2);

    //     $update = "UPDATE users SET password='$password' WHERE username='$username'";
    //     mysqli_query($conn, $update);

    // }
}

?>
