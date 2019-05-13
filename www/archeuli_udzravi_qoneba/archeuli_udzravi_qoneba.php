<?php
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
      <a href="archeuli_udzravi_qonebaEn.php" target="_self" class="language english"> <img class="icon" src="../../photo/en.jpg" alt="en"> </a>
      <a href="archeuli_udzravi_qoneba.php" target="_self" class="language georgian" style="background-color: #f2f2f2;"> <img class="icon" src="../../photo/geo.jpg" alt="ge"> </a>
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
      <div class="container_zeda">
        <div class="left">
          <div class="container">
            <div class="mySlides">
              <img src="../../photo/house_photos/1/7.jpg" style="width:100%">
            </div>
            <div class="monacemebi">
              <div class="date">
                <img src="../../photo/calendar.png">
                <span class="font20">23/12/2018</span>
                <br>
                <span class="blue"><b>ქუჩა:</b></span>  ვაჟა ფშაველას გამზირი 76ბ
                <br>
                <span style="position:relative;top:5px"><b class="blue">გარიგების ტიპი:</b><span> ქირავდება დღიურად</span></span>
              </div>
              <div class="tanxa">
                <div class="favoriti1"></div>
                <span></span>
                <br>
                <span  style="position:relative;left:25px;"><span class="blue"><b>ფასი:</b></span><b style="color:#fd1a26">100₾</b></span>
                <br>
                <span style="position:relative;top:5px"><b class="blue">ID:</b><span>36479</span></span>
              </div>

            </div>
          </div>
        </div>
        <div class="right">
          <a><img src="../../photo/reklama/1.jpg" id="reklama1"></a>
          <a><img src="../../photo/reklama/2.jpg" id="reklama2"></a>

        </div>

      </div>
      <div class="container_qveda">
        <div class="satauri">
          <b>მონაცემები</b>
        </div>
        <div class="left">
          <div class="xazi">
            <div class="leftside">
              <b>ქალაქი:</b>
            </div>
            <div class="rightside">
              თბილისი
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>რაიონი:</b>
            </div>
            <div class="rightside">
              საბურთალო
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>მდგომარეობა:</b>
            </div>
            <div class="rightside">
              ახალი აშენებული
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ფართი:</b>
            </div>
            <div class="rightside">
              50 მ²
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>სართული:</b>
            </div>
            <div class="rightside">
              7/10
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ოთახები:</b>
            </div>
            <div class="rightside">
              2
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>საძინებელი:</b>
            </div>
            <div class="rightside">
              1
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>სველი წერტილი:</b>
            </div>
            <div class="rightside">
              1
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>აივანი:</b>
            </div>
            <div class="rightside">
              1
            </div>
          </div>

          <div class="xazi" style="border:none;">
            <div class="leftside">
              <b> გათბობის სისტემა:</b>
            </div>
            <div class="rightside">
              ცენტრალური
            </div>
          </div>


        </div>

        <div class="shua">
          <div class="xazi">
            <div class="leftside">
              <b>ბუნებრივი აირი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ავეჯი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ინტერნეტი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ტელეფონი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ტელევიზია:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>კონდიციონერი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ლიფტი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>ბუხარი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/no.png" alt="">
            </div>
          </div>
          <div class="xazi">
            <div class="leftside">
              <b>პარკინგი:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>
          <div class="xazi" style="border:none;">
            <div class="leftside">
              <b>სიგნალიზაცია:</b>
            </div>
            <div class="rightside">
              <img src="../../photo/ok.png" alt="">
            </div>
          </div>


        </div>


        <div class="right">
          <div class="satauri">
            <b>მოკლე აღწერა</b>
          </div>
          <div class="zeda">

            <p>
              ქირავდება ბინა დღიურად კარტოზიას 8 ნომერში.
              მ2 იპოდრომთან . ბინა არის უზრუნველყოფილი
              ყველა საჭირო ნივთით. ღირებულება 50 დან 100 ლარამდრე. 24 საათი ფასი 100 ლარი.
            </p>

          </div>
          <div class="qveda" id="googleMap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d744.4331758958966!2d44.78881102920507!3d41.72628639870214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472cf04ec835f%3A0x4f69de677808e81e!2sAkaki+Tsereteli+Ave%2C+T&#39;bilisi!5e0!3m2!1sru!2sge!4v1545758219704" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>

        </div>

      </div>

      <div class="popular">
        <div class="satauri">
          <h3>პოპულარული</h3>
        </div>


        <div class="variantebi">
          <a href="#">
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




        </div>
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
    <script src="../../main_js.js"></script>

  </body>
</html>
