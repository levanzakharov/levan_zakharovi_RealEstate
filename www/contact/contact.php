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
      <a href="contactEn.php" target="_self" class="language english"> <img class="icon" src="../../photo/en.jpg" alt="en"> </a>
      <a href="contact.php" target="_self" class="language georgian" style="background-color: #f2f2f2;"> <img class="icon" src="../../photo/geo.jpg" alt="ge"> </a>
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
      <h3>კონტაქტი</h3>
      <div class="body_left">
        <p>
          მისამართი: წერეთლის ქ. N1, თბილისი
          <br>
          მობილური:	579 24 76 23
          <br>
          ტელეფონი:	2 468 338
          <br>
          ელ-ფოსტა: info@dreamhouse.ge
        </p>
        <br>
        <button type="button" name="button" onclick="writeLetter()" id="button">წერილის მიწერა</button>
        <div class="letterform" id="letterform">
          <p>
            <span class="down">სახელი</span>
            <br>
            <input type="text" name="" placeholder="სახელი">
            <br>
            <br>
            <span class="down">ელექტრონული მისამართი</span>
            <br>
            <input type="text" id="email" placeholder="ელექტრონული მისამართი">
            <div class="">
              <p id="wrong_email" style = "display:none" class="wrong">შეიყვანეთ ელ. მისამართი სწორად!</p>
            </div>
            <span class="down">ტელეფონის ნომერი</span>
            <br>
            <input type="text" name="nomeri" value="+995" id="nomeri">
            <div class="">
              <p id="wrong_nomeri" class="wrong" style = "display:none;bottom:0px;" >შეიყვანეთ ტელეფონის ნომერი სწორად!</p>
            </div>
            <br>
            ტექსტი
            <br>
            <textarea name="name" rows="8" cols="80"></textarea>
          </p>
          <button type="button" name="button" onclick="checkemail()">გაგზავნა</button>

        </div>

      </div>
      <div class="body_right">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d744.4331758958966!2d44.78881102920507!3d41.72628639870214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472cf04ec835f%3A0x4f69de677808e81e!2sAkaki+Tsereteli+Ave%2C+T&#39;bilisi!5e0!3m2!1sru!2sge!4v1545758219704" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>

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
