<?php
include "db.php";
include "global.php";

if (isset($_POST['submit'])) {
    if ($_POST['property_type'] != "all") {
        $property_type = (int)$_POST['property_type'];
    }
    else{
        array_push($errors, "Property type needed");
    }

    if ($_POST['agreement_type'] != "all") {
        $agreement_type = (int)$_POST['agreement_type'];
    }
    else{
        array_push($errors, "agreement type needed");
    }

    if ($_POST['location_city'] != "all") {
        $location_city = (int)$_POST['location_city'];
    }
    else{
        array_push($errors, "location city needed");
    }

    if ($_POST['location_district'] != "all") {
        $location_district = (int)$_POST['location_district'];
    }
    else{
        array_push($errors, "location district needed");
    }

    $damateba_room = $_POST['damateba_room'];
    $damateba_price = $_POST['damateba_price'];
    $damateba_area = $_POST['damateba_area'];

    $description = $_POST['description'];

    if (isset($_POST['balcon'])) {$balcon = 1;}
    else{$balcon = 0;}

    if (isset($_POST['loggy'])) {$loggy = 1;}
    else{$loggy = 0;}

    if (isset($_POST['verandah'])) {$verandah = 1;}
    else{$verandah = 0;}

    if (isset($_POST['gatboba'])) {$gatboba = 1;}
    else{$gatboba = 0;}

    if (isset($_POST['gazi'])) {$gazi = 1;}
    else{$gazi = 0;}

    if (isset($_POST['aveji'])) {$aveji = 1;}
    else{$aveji = 0;}

    if (isset($_POST['internet'])) {$internet = 1;}
    else{$internet = 0;}

    if (isset($_POST['telefoni'])) {$telefoni = 1;}
    else{$telefoni = 0;}

    if (isset($_POST['tv'])) {$tv = 1;}
    else{$tv = 0;}

    if (isset($_POST['kondicioneri'])) {$kondicioneri = 1;}
    else{$kondicioneri = 0;}

    if (isset($_POST['lifti'])) {$lifti = 1;}
    else{$lifti = 0;}

    if (isset($_POST['buxari'])) {$buxari = 1;}
    else{$buxari = 0;}

    if (isset($_POST['parkingi'])) {$parkingi = 1;}
    else{$parkingi = 0;}


    if (isset($_POST['Filename'])) {
        $image = "photo/".$_FILES["fileToUpload"]["name"];
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    }


    var_dump($errors);

    if (count($errors) == 0) {
        session_start();
        $upload_date = date("Y-m-d");
        $user = $_SESSION['username'];

        $insert = "INSERT INTO `property`(`user`, `property_type`, `agreement_type`, `location_city`, `location_district`, `room`, `price`, `area`, `balcony`, `loggy`, `verandah`, `heating _system`, `natural_gas`, `furniture`, `internet`, `phone`, `television`, `air_conditioner`, `elevator`, `fireplace`, `parking`, `description`, `upload_date`, `photo`) VALUES ('$user', '$property_type', '$agreement_type', '$location_city', '$location_district', '$damateba_room', '$damateba_price','$damateba_area', '$balcon', '$loggy', '$verandah', '$gatboba', '$gazi', '$aveji',  '$internet', '$telefoni', '$tv', '$kondicioneri', '$lifti', '$buxari', '$parkingi', '$description', '$upload_date', '$image')";
        mysqli_query($conn, $insert);

        $inser1_id = "SELECT fields FROM property ORDER BY propertyId DESC LIMIT 1;";
        $result1 = mysqli_query($conn,$inser1_id);
        $row = mysqli_fetch_assoc($result1);
        $propertyId = $row['propertyId'];

        $insert1 = "INSERT INTO `userproperty`(`user`, `property`) VALUES ('$user','$propertyId')";
        mysqli_query($conn, $insert1);
        
        var_dump($insert);
        if ($insert) {
            echo "success";
        }else{
            echo "fail";
        }

        header('location: ../www/user/user.php');
    }
}


function CloseSession()
{
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    header('location: ../index.php');
}

function gancxadebebi()
{
    include "db.php";

    $result = mysqli_query($conn,"SELECT `propertyId`, `property_type`, `agreement_type`, `location_city`, `location_district`, `room`, `price`, `area`, `upload_date` FROM `userproperty` INNER JOIN property ON property.propertyId = userproperty.property INNER JOIN users ON users.userId = userproperty.user WHERE users.userId=$user");
    if (mysqli_num_rows($result) > 0) {
        $property_type_array = array("1"=>"სახლი", "2"=>"ბინა", "3"=>"კომერციული ფართი", "4"=>"აგარაკი", "5"=>"მიწის ნაკვეთი");
        $agreement_type_array = array("1"=>"იყიდება", "2"=>"ქირავდება", "3"=>"გირავდება", "4"=>"ქირავდება დღიურად");
        $location_city_array = array("1"=>"თბილისი", "2"=>"ქუთაისი", "3"=>"ბათუმი", "4"=>"რუსთავი");
        $location_disrtict_array = array("1"=>"გლდანი", "2"=>"დიდუბე", "3"=>"ვაკე", "4"=>"ისანი","5"=>"კრწანისი", "6"=>"მთაწმინდა", "7"=>"ნაძალადევი", "8"=>"საბურთალო", "9"=>"სამგორი", "10"=>"ჩუღურეთი");

        for ($i=0; $i < mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<tr><td>".$row["propertyId"]."</td><td>".$property_type_array[$row["property_type"]]."</td><td>". $agreement_type_array[$row["agreement_type"]]."</td><td>". $location_city_array[$row["location_city"]]."</td><td>". $location_disrtict_array[$row["location_district"]]."</td><td>". $row["room"]."</td><td>". $row["price"]."</td><td>". $row["area"]."</td><td>". $row["upload_date"]. "</td></tr>";
        }
    }
    else {
        echo "<tr><td style='text-align:center' colspan=9>0 result</td></tr>";
    }
}

function rcheulebi()
{
    include "db.php";

    $result = mysqli_query($conn,"SELECT `propertyId`, `property_type`, `agreement_type`, `location_city`, `location_district`, `room`, `price`, `area`, `upload_date` FROM `userlikes` INNER JOIN property ON property.propertyId = userlikes.property INNER JOIN users ON users.userId = userlikes.user WHERE users.userId=$user");
    if (mysqli_num_rows($result) > 0) {
        $property_type_array = array("1"=>"სახლი", "2"=>"ბინა", "3"=>"კომერციული ფართი", "4"=>"აგარაკი", "5"=>"მიწის ნაკვეთი");
        $agreement_type_array = array("1"=>"იყიდება", "2"=>"ქირავდება", "3"=>"გირავდება", "4"=>"ქირავდება დღიურად");
        $location_city_array = array("1"=>"თბილისი", "2"=>"ქუთაისი", "3"=>"ბათუმი", "4"=>"რუსთავი");
        $location_disrtict_array = array("1"=>"გლდანი", "2"=>"დიდუბე", "3"=>"ვაკე", "4"=>"ისანი","5"=>"კრწანისი", "6"=>"მთაწმინდა", "7"=>"ნაძალადევი", "8"=>"საბურთალო", "9"=>"სამგორი", "10"=>"ჩუღურეთი");

        for ($i=0; $i < mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_assoc($result);
            echo "<tr><td>".$row["propertyId"]."</td><td>".$property_type_array[$row["property_type"]]."</td><td>". $agreement_type_array[$row["agreement_type"]]."</td><td>". $location_city_array[$row["location_city"]]."</td><td>". $location_disrtict_array[$row["location_district"]]."</td><td>". $row["room"]."</td><td>". $row["price"]."</td><td>". $row["area"]."</td><td>". $row["upload_date"]. "</td></tr>";
        }
    }
    else {
        echo "<tr><td style='text-align:center' colspan=9>0 result</td></tr>";
    }
}

?>