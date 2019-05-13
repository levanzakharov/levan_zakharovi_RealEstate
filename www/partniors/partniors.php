<?php
include "../../php/user.php";
session_start();
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
      <a href="partniorsEn.php" target="_self" class="language english"> <img class="icon" src="../../photo/en.jpg" alt="en"> </a>
      <a href="partniors.php" target="_self" class="language georgian" style="background-color: #f2f2f2;"> <img class="icon" src="../../photo/geo.jpg" alt="ge"> </a>
      <div class="menu_conteiner">
        <div class="avtorizacia_registracia">
          <a href="../autorizacia/autorizacia.php"><img class="img1 move" src="../../photo/logo_account.png" alt="" style="left:20px;"></a>
        </div>
        <div class="menu_right">
          <a href="about_us.php" class="qvemo">მთავარი</a>
          <a href="#" class="qvemo">ჩემი აგენტი</a>
          <div class="dropdown up">
            <button class="dropbtn">უძრავი ქონება
            </button>
          <div class="dropdown-content">
            <a href="../dzebna/dzebna.php">სახლი</a>
            <a href="../dzebna/dzebna.php">ბინა</a>
            <a href="../dzebna/dzebna.php">აგარაკი</a>
            <a href="../dzebna/dzebna.php">კომერციული ფართი</a>
            <a href="../dzebna/dzebna.php">მიწის ნაკვეთი</a>
          </div>
          </div>
          <div class="dropdown1 up">
            <button class="dropbtn1">ჩვენ შესახებ
            </button>
          <div class="dropdown-content1">
            <a href="../contact/contact.php">კონტაქტი</a>
            <a href="../partniors/partniors.php">პარტნიორები</a>
            <a href="#">აგენტები</a>
          </div>
          </div>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

      </div>

    </div>


    <div class="body">
      <h3>პარტნიორები</h3>
      <div class="container">
        <a href="https://bankofgeorgia.ge/" target="_blank"> <img src="../../photo/partniors/1.jpg" alt=""> </a>
        <a href="http://www.tbcbank.ge/web/ka" target="_blank"> <img src="../../photo/partniors/2.jpg" alt=""> </a>
        <a href="https://www.finca.ge/" target="_blank"> <img src="../../photo/partniors/3.jpg" alt=""> </a>
        <a href="https://www.procreditbank.ge/" target="_blank"> <img src="../../photo/partniors/4.png" alt=""> </a>
        <a href="https://vtb.ge/ge/individuals" target="_blank"> <img src="../../photo/partniors/5.png" alt=""> </a>
        <a href="https://www.libertybank.ge/" target="_blank"> <img src="../../photo/partniors/6.jpg" alt=""> </a>
        <a href="https://www.terabank.ge/ge/retail" target="_blank"> <img src="../../photo/partniors/7.png" alt=""> </a>
        <a href="http://www.basisbank.ge/" target="_blank"> <img src="../../photo/partniors/8.png" alt=""> </a>
        <a href="https://m2.ge/" target="_blank"> <img src="../../photo/partniors/9.jpg" alt=""> </a>
        <a href="http://metra.ge/ge/" target="_blank"> <img src="../../photo/partniors/10.jpg" alt=""> </a>
        <a href="http://anagi.ge/ka/" target="_blank"> <img src="../../photo/partniors/11.png" alt=""> </a>
        <a href="http://gld.ge/" target="_blank"> <img src="../../photo/partniors/12.jpg" alt=""> </a>
        <a href="http://monolith.ge/ge" target="_blank"> <img src="../../photo/partniors/13.png" alt=""> </a>
        <a href="https://unix.ge/ka/" target="_blank"> <img src="../../photo/partniors/14.jpg" alt=""> </a>
        <a href="https://buildgeo.ge/ka/menejmenti/article/20690" target="_blank"> <img src="../../photo/partniors/15.png" alt=""> </a>
        <a href="http://www.igsgroup.ge/" target="_blank"> <img src="../../photo/partniors/16.png" alt=""> </a>


      </div>
    </div>




    <div class="foot">

      <div class="margin">
        <div class="foot_menu">
          <p>
            <b>მენიუ</b><br><br>
            <a href="../../index.php">მთავარი</a><br>
            <a href="#">ჩემი აგენტი</a><br>
            <a href="../about us/about_us.php">ჩვენს შესახებ</a><br>
            <a href="../dzebna/dzebna.php">უძრავი ქონება</a>
          </p>
        </div>
        <hr width="1" size="150" class="foot_xazi">
        <div class="foot_menu ">
          <p>
            <b>უძრავი ქონების ტიპი</b><br><br>
            <a href="../dzebna/dzebna.php">ბინები</a><br>
            <a href="../dzebna/dzebna.php">სახლები და აგარაკები</a><br>
            <a href="../dzebna/dzebna.php">კომერციული ფართები</a><br>
            <a href="../dzebna/dzebna.php">აგარაკები</a><br>
            <a href="../dzebna/dzebna.php">მიწის ნაკვეთები</a>
          </p>
        </div>
        <hr width="1" size="150" class="foot_xazi">
        <div class="foot_menu">
          <p>
            <b>ჩვენ შესახებ</b><br><br>
            <a href="../contact/contact.php">კონტაქტი</a><br>
            <a href="../partniors/partniors.php">პარტნიორები</a><br>
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

  </body>
</html>
