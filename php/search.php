<?php
include "db.php";
include "global.php";

$property_type_value="";
$agreement_type_value="";
$location_city_value="";
$location_district_value="";
$price_value=0;
$photo_value="";

$select = "SELECT `property_type`, `agreement_type`, `location_city`, `location_district`,`price`,`photo` FROM `property`;";
$result = mysqli_query($conn,$select);

if (isset($_POST['submit'])) {
    if ($_POST['property_type'] != "all") {
        $property_type = "=".$_POST['property_type'];
    }
    else{
        $property_type = "LIKE '%'";
    }

    if ($_POST['agreement_type'] != "all") {
        $agreement_type = "=".$_POST['agreement_type'];
    }
    else{
        $agreement_type = "LIKE '%'";
    }

    if ($_POST['location_city'] != "all") {
        $location_city = "=".$_POST['location_city'];
    }
    else{
        $location_city = "LIKE '%'";
    }

    if ($_POST['location_district'] != "all") {
        $location_district = "=".$_POST['location_district'];
    }
    else{
        $location_district = "LIKE '%'";
    }

    $damateba_room = $_POST['damateba_room'];
    $damateba_price_from = $_POST['damateba_price_from'];
    $damateba_price_to = $_POST['damateba_price_to'];
    $damateba_area_from = $_POST['damateba_area_from'];
    $damateba_area_to = $_POST['damateba_area_to']; 

    
    $price_from = (int)$damateba_price_from;
    $price_to = (int)$damateba_area_to;

    //" AND ".$price_from." < price < ".$price_to.

    $select = "SELECT `property_type`, `agreement_type`, `location_city`, `location_district`,`price`,`photo` FROM `property` WHERE property_type ".$property_type." AND agreement_type ".$agreement_type." AND location_city ".$location_city." AND location_district ".$location_district.";";
    $result = mysqli_query($conn,$select);  

    
}



