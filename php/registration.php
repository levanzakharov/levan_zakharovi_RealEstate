<?php
include "db.php";
include "global.php";

if (isset($_POST['registration'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);



    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($lastname)) { array_push($errors, "Lastname is required"); }
    if (empty($phone)) { array_push($errors, "Phone is required"); }
    
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $row = mysqli_fetch_assoc($result);

    var_dump($row);
    echo "<br>";
    
    if ($row) {
        if ($row['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if (!ctype_alnum($row['username'])) { 
            array_push($errors, "username has special character");
        }

        
        if ($row['email'] === $email) {
            array_push($errors, "email already exists");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "email is not a valid email address");
          }

        if (ctype_alnum($row['password'])) { 
            if (7 < strlen($row['password'])){ 
                if (strcspn($row['password'], '0123456789') != strlen($row['password'])){
                    if (strcspn($row['password'], 'abcdefghijklmnopqrstuvwxyz') != strlen($row['password'])) {
                        if (strcspn($row['password'], 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') == strlen($row['password'])) {
                            array_push($errors, "Password does not have capital letter");
                        }
                    }
                    else {
                        array_push($errors, "Password does not have small letter");
                    }
                }
                else {
                    array_push($errors, "Password does not have number");
                }
            }
            else {
                array_push($errors, "Password is short");
            }
        }
        else {
            array_push($errors, "Password has special character");
        }
    
        if (strcspn($row['name'], '0123456789') == strlen($row['name'])){
            array_push($errors, "name has number");
        }
    
        if (strcspn($row['lastname'], '0123456789') == strlen($row['lastname'])){
            array_push($errors, "lastname has number");
        }

        if (strcspn($row['phone'], 'abcdefghijklmnopqrstuvwxyz') != strlen($row['phone'])) {
            if (strcspn($row['phone'], 'ABCDEFGHIJKLMNOPQRSTUVWXYZ') != strlen($row['phone'])) {
                array_push($errors, "phone has capital letter");
            }
        }
        else {
            array_push($errors, "phone has small letter");
        }
    }

    var_dump($errors);

    if (count($errors) == 0) {
        $password = md5($password_1);
        $Reg_date = date("Y-m-d");

        $insert = "INSERT INTO users (username, email, password, name, lastname, phone, Reg_date) 
        VALUES('$username', '$email', '$password', '$name', '$lastname', '$phone', '$Reg_date')";
        mysqli_query($conn, $insert);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../index.php');
    }
}

?>
