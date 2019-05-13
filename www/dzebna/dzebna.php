<?php
session_start();
include "../../php/db.php";
include "../../php/search.php"
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>საოცნებო სახლი</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../../main_css.css" />
    <link rel="icon" type="text/css" media="screen" href="../../photo/logo.png" />
  </head>
  <body>
    <div class="menu">
      <a href="../../index.php"> <img class="img1" src="../../photo/logo.png" alt="logo"> </a>
      <a href="dzebnaEn.php" target="_self" class="language english"> <img class="icon" src="../../photo/en.jpg" alt="en"> </a>
      <a href="dzebna.php" target="_self" class="language georgian" style="background-color: #f2f2f2;"> <img class="icon" src="../../photo/geo.jpg" alt="ge"> </a>
      <div class="menu_conteiner">
        <div class="avtorizacia_registracia">
          <a href="../../www/autorizacia/autorizacia.php"><img class="img1 move" src="../../photo/logo_account.png" alt="" style="left:20px;"></a>
        </div>
        <div class="menu_right">
          <a href="../../index.php" class="qvemo">მთავარი</a>
          <a href="#" class="qvemo">ჩემი აგენტი</a>
          <div class="dropdown up">
            <button class="dropbtn">უძრავი ქონება
            </button>
          <div class="dropdown-content">
            <a href="#">სახლი</a>
            <a href="#">ბინა</a>
            <a href="#">აგარაკი</a>
            <a href="#">კომერციული ფართი</a>
            <a href="#">მიწის ნაკვეთი</a>
          </div>
          </div>
          <div class="dropdown1 up">
            <button class="dropbtn1">ჩვენ შესახებ
            </button>
          <div class="dropdown-content1">
            <a href="../../www/contact/contact.php">კონტაქტი</a>
            <a href="../../www/partniors/partniors.php">პარტნიორები</a>
            <a href="#">აგენტები</a>
          </div>
          </div>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

      </div>

    </div>


    <div class="body">
      <div class="">
        <div class="search">
          <h3 style="text-align:center;  color: #1b0f55;">ძებნა</h3>
          <form action="" method="post">
          <div class="search_variantebi">
            <select name="property_type">
              <option value="all" class="underline blue">უძრავი ქონების ტიპი</option>
              <option value="all">ყველა</option>
              <option value="1">სახლი</option>
              <option value="2">ბინა</option>
              <option value="3">კომერციული ფართი</option>
              <option value="4">აგარაკი</option>
              <option value="5">მიწის ნაკვეთი</option>
            </select>
          </div>
          <div class="search_variantebi">
            <select name="agreement_type">
              <option value="all" class="underline blue">გარიგების ტიპი</option>
              <option value="all">ყველა</option>
              <option value="1">იყიდება</option>
              <option value="2">ქირავდება</option>
              <option value="3">გირავდება</option>
              <option value="4">ქირავდება დღიურად</option>
            </select>
          </div>
          <div class="search_variantebi">
            <select  name="location_city">
              <option value="all" class="underline blue">ქალაქი</option>
              <option value="all">ყველა</option>
              <option value="1">თბილისი</option>
              <option value="2">ქუთაისი</option>
              <option value="3">ბათუმი</option>
              <option value="4">რუსთავი</option>
              <option value="5">სხვა</option>
            </select>
          </div>
          <div class="search_variantebi">
            <select  name="location_district">
              <option value="all" class="underline blue">რაიონი</option>
              <option value="all">ყველა</option>
              <option value="1">გლდანი</option>
              <option value="2">დიდუბე</option>
              <option value="3">ვაკე</option>
              <option value="4">ისანი</option>
              <option value="5">კრწანისი</option>
              <option value="6">მთაწმინდა</option>
              <option value="7">ნაძალადევი</option>
              <option value="8">საბურთალო</option>
              <option value="9">სამგორი</option>
              <option value="10">ჩუღურეთი</option>
            </select>
          </div>
          <div class="search_variantebi">
            <p>ოთახი</p>
            <input type="number" class="search_money"  name="damateba_room" style="width:100%" placeholder="დან" min="1">
          </div>
          <hr>
          <div class="search_variantebi">
            <p>ფასი</p>
            <input type="number" class="search_money" placeholder="დან" value=1  name="damateba_price_from" min="1">
            <input type="number" class="search_money" placeholder="მდე" value=1000000  name="damateba_price_to" min="1">
            <div class="search_money_type" style="font-size: 20px; text_align:center">
            ₾
            </div>
          </div>
          <div class="search_variantebi">
            <p>ფართი</p>
            <input type="number" class="search_money" placeholder="დან"  name="damateba_area_from" min="1">
            <input type="number" class="search_money" placeholder="მდე"  name="damateba_area_to" min="1">
            <div class="search_money_type" style="font-size: 20px; text_align:center">
              მ²
            </div>
          </div>
          <hr>
          <!-- <div class="check">
              <input type="checkbox" name="balcon" value="Yes">აივანი
              <br>
              <input type="checkbox" name="loggy" value="Yes">ლოჯი
              <br>
              <input type="checkbox" name="verandah" value="Yes">ვერანდა
              <br>
              <input type="checkbox" name="gatboba" value="Yes">გათბობის სისტემა
              <br>
              <input type="checkbox" name="gazi" value="Yes">ბუნებრივი აირი
              <br>
              <input type="checkbox" name="aveji" value="Yes">ავეჯი
              <br>
              <input type="checkbox" name="internet" value="Yes">ინტერნეტი
              <br>
              <input type="checkbox" name="telefoni" value="Yes">ტელეფონი
              <br>
              <input type="checkbox" name="tv" value="Yes">ტელევიზია
              <br>
              <input type="checkbox" name="kondicioneri" value="Yes">კონდიციონერი
              <br>
              <input type="checkbox" name="lifti" value="Yes">ლიფტი
              <br>
              <input type="checkbox" name="buxari" value="Yes">ბუხარი
              <br>
              <input type="checkbox" name="parkingi" value="Yes">პარკინგი
          </div> -->

          <div class="search_dzebna">
            <input type="submit" name="submit" value="ძებნა">
          </div>
        </form>

        </div>
        
        <div class="shedegi aweva">

          <div class="variantebi">
          <?php 
          
          $property_type_array = array("1"=>"სახლი", "2"=>"ბინა", "3"=>"კომერციული ფართი", "4"=>"აგარაკი", "5"=>"მიწის ნაკვეთი");
          $agreement_type_array = array("1"=>"იყიდება", "2"=>"ქირავდება", "3"=>"გირავდება", "4"=>"ქირავდება დღიურად");
          $location_city_array = array("1"=>"თბილისი", "2"=>"ქუთაისი", "3"=>"ბათუმი", "4"=>"რუსთავი");
          $location_disrtict_array = array("1"=>"გლდანი", "2"=>"დიდუბე", "3"=>"ვაკე", "4"=>"ისანი","5"=>"კრწანისი", "6"=>"მთაწმინდა", "7"=>"ნაძალადევი", "8"=>"საბურთალო", "9"=>"სამგორი", "10"=>"ჩუღურეთი");
          
          
          while ($row = mysqli_fetch_assoc($result)){
              $property_type_value = $property_type_array[$row['property_type']];
              $agreement_type_value = $agreement_type_array[$row['agreement_type']];
              $location_city_value = $location_city_array[$row['location_city']];
              $location_district_value = $location_disrtict_array[$row['location_district']];
              $image = $row['photo'];
              $price_value=$row['price'];
              $photo_value="";
          ?>
          <a href="../archeuli_udzravi_qoneba/archeuli_udzravi_qoneba.php">
            <div class="varianti">
              <img src= <?php echo "../../photo/house_photos/".$image.""?> alt="bina">
              <p>
                <span class="red"><?php echo $agreement_type_value?></span> <?php echo $property_type_value?> <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> <?php echo $price_value?> ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> <?php echo $location_city_value.",".$location_district_value?>
              </p>
            <div class="favoriti"></div>
            </div>
          </a>

          <?php
          }
          ?>
          </div>



          <!-- <div class="variantebi">
            
            <a href="../archeuli_udzravi_qoneba/archeuli_udzravi_qoneba.php">
            <div class="varianti">
              <img src="../../photo/house_photos/6.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 611799 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> სოფ. დიღომი,თბილისი
              </p>
            <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
              <div class="varianti">
                <img src="../../photo/house_photos/7.jpg" alt="bina">
                <p>
                  <span class="red">იყიდება</span> სახლი <br>
                  <img class="logo" src="../../photo/lari.png" alt="logo"> 1333500 ლარი <br>
                  <img class="logo" src="../../photo/address.png" alt="logo"> კრწანისი,თბილისი
                </p>
                <div class="favoriti"></div>
              </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/8.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> აგარაკი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 1466850 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> თეთრიწყარო
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/9.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> კომერც. ფართი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 6134 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ჩუღურეთი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/10.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 589 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo">ისანი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>
            <a href="#">
              <div class="varianti">
                <img src="../../photo/house_photos/1.jpg" alt="bina">
                <p>
                  <span class="red">ქირავდება</span> ბინა <br>
                  <img class="logo" src="../../photo/lari.png" alt="logo"> 1500 ლარი <br>
                  <img class="logo" src="../../photo/address.png" alt="logo"> საბურთალო,თბილისი
                </p>
                <div class="favoriti"></div>
              </div>
            </a>

            <a href="#">
              <div class="varianti">
                <img style="height:240px;width:100%;" src="../../photo/reklama/1.jpg" id="reklama1">
              </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/3.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 283500 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/4.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 1380 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> გლდანი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/5.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 221610 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/11.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება დღიურად</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 140 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/12.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> კომერც. ფართი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 6200 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> საბურთალო,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/13.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 166000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> გლდანი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/14.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 1300 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> დიდუბე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/15.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 324000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> გორაშვილი,ქობულეთი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/16.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> აგარაკი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 400000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ბაზალეთის,დუშეთი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/17.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 159600 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/18.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> მიწის ნაკვეთი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 24000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> გარდაბანი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/19.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> აგარაკი<br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 2000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ბაკურიანი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
                <img src="../../photo/house_photos/2.jpg" alt="bina">
                <p>
                  <span class="red">ქირავდება დღიურად</span> ბინა <br>
                  <img class="logo" src="../../photo/lari.png" alt="logo"> 100 ლარი <br>
                  <img class="logo" src="../../photo/address.png" alt="logo"> ვარკეთილი,თბილისი
                </p>
                <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/20.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 439000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> დიდგორი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/21.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 160800 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/22.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> კომერც. ფართი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 7320 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> საბურთალო,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/23.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 533400 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/24.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 3170 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> სამგორი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/25.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> აგარაკი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 7200 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> დიღომი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/26.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> კომერც. ფართი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 5190 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> გლდანი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/27.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> აგარაკი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 5000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> საგურამო
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/28.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 32000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> გლდანი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/29.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 7580 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/30.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება დღიურად</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 40 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> საბურთალო,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/31.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 4880 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> დიდუბე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/32.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება დღიურად</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 150 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ბაკურიანი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
              <div class="varianti">
                <img style="height:240px;width:100%;" src="../../photo/reklama/2.jpg" id="reklama2">
              </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/33.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 1479000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> დიდგორი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/34.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება დღიურად</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 200 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ბაკურიანი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/35.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება</span> კომერც. ფართი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 8360 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> ვაკე,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/36.jpg" alt="bina">
              <p>
                <span class="red">ქირავდება დღიურად</span> ბინა <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 80 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> გლდანი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/37.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 495000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> დიდგორი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>

            <a href="#">
            <div class="varianti">
              <img src="../../photo/house_photos/38.jpg" alt="bina">
              <p>
                <span class="red">იყიდება</span> სახლი <br>
                <img class="logo" src="../../photo/lari.png" alt="logo"> 300000 ლარი <br>
                <img class="logo" src="../../photo/address.png" alt="logo"> დიდგორი,თბილისი
              </p>
              <div class="favoriti"></div>
            </div>
            </a>
          </div> -->
        </div>

      </div>

      <div class="gverdinm">
        <a href="#" style="background-color: white;color: #ec1b26;">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#" style="">...</a>
        <a href="#" style="width:42px">523</a>

      </div>

    </div>




    <div class="foot">

      <div class="margin">
        <div class="foot_menu">
          <p>
            <b>მენიუ</b><br><br>
            <a href="#">მთავარი</a><br>
            <a href="#">ჩემი აგენტი</a><br>
            <a href="#">ჩვენს შესახებ</a><br>
            <a href="#">უძრავი ქონება</a>
          </p>
        </div>
        <hr width="1" size="150" class="foot_xazi">
        <div class="foot_menu ">
          <p>
            <b>უძრავი ქონების ტიპი</b><br><br>
            <a href="#">ბინები</a><br>
            <a href="#">სახლები და აგარაკები</a><br>
            <a href="#">კომერციული ფართები</a><br>
            <a href="#">აგარაკები</a><br>
            <a href="#">მიწის ნაკვეთები</a>
          </p>
        </div>
        <hr width="1" size="150" class="foot_xazi">
        <div class="foot_menu">
          <p>
            <b>ჩვენ შესახებ</b><br><br>
            <a href="#">კონტაქტი</a><br>
            <a href="#">პარტნიორები</a><br>
            <a href="#">აგენტები</a>
          </p>
        </div>
        <hr width="1" size="150" class="foot_xazi">
        <div class="foot_menu">
          <p>
            <b>სოციალური ქსელები</b><br><br>
            <a href="#">Facebook</a><br>
            <a href="#">Instagram</a><br>
            <a href="#">Linkedin</a><br>
            <a href="#">Google+</a>
          </p>
        </div>

      </div>
    </div>







    <script src="js.js"></script>
    <script src="../../main_js.js"></script>
  </body>
</html>
