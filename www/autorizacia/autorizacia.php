<?php 
include "../../php/authorization.php";

if (isset($_GET['action'])) {
  if (isset($_SESSION['username'])) {
    header('location: ../user/user.php');
  }
  else{
    header('location: autorizacia.php');    
  }
}

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
      <a href="autorizaciaEn.php" target="_self" class="language english"> <img class="icon" src="../../photo/en.jpg" alt="en"> </a>
      <a href="autorizacia.php" target="_self" class="language georgian" style="background-color: #f2f2f2;"> <img class="icon" src="../../photo/geo.jpg" alt="ge"> </a>
      <div class="menu_conteiner">
        <div class="avtorizacia_registracia">
          <a href="../../www/autorizacia/autorizacia.php"><img class="img1 move" src="../../photo/logo_account.png" alt="" style="left:20px;"></a>
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
      <div class="forma">
        <h3>ავტორიზაცია</h3>
        <form action="../../php/authorization.php" method="post">
        <input type="text" id="email" name="username" placeholder="მომხმარებლის სახელი">
        <div class="">
          <p id="wrong_email" style = "display:none" class="wrong">შეიყვანეთ ელ. მისამართი სწორად!</p>
        </div>
        <input type="password" id="password" name="password" placeholder="პაროლი">
        <div class="">
          <p id="wrong_password" style = "display:none" class="wrong">შეიყვანეთ პაროლი სწორად!(არ უნდა შეიცავდეს სიმბოლოებს)</p>
        </div>
        <div class="shua">
          <input type="submit" name="authorization" value="შესვლა" onclick="checkemail()" class="buttshesvla">
        </div>
        <div class="qveda">
          <a href="#" class="aAvtorizacia">დაგავიწყდათ პაროლი?</a>
          <a href="../registracia/registracia.php" class="aAvtorizacia" style="float:right">რეგისტრაცია</a>

        </div>
        </form>


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
