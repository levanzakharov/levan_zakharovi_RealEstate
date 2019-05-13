<?php
session_start();

include "../../php/user.php";



if (isset($_GET['action'])) {
  if (isset($_SESSION['username'])) {
    header('location: user.php');
  }
  else{
    header('location: ../autorizacia/autorizacia.php');    
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
      <a href="archeuli_udzravi_qonebaEn.php" target="_self" class="language english"> <img class="icon" src="../../photo/en.jpg" alt="en"> </a>
      <a href="archeuli_udzravi_qoneba.php" target="_self" class="language georgian" style="background-color: #f2f2f2;"> <img class="icon" src="../../photo/geo.jpg" alt="ge"> </a>
      <div class="menu_conteiner">
        <div class="avtorizacia_registracia">
          <a href="?action=user"><img class="img1 move" src="../../photo/logo_account.png" alt="" style="left:20px;"></a>
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
      <div class="left">
        <ul>
          <li>
            <a class="left_menu" id="user_id">
              <span>მომხმარებლის ID</span>
              <input type="text"  class="counter" onclick="this.select()" readonly value="<?php echo $_SESSION['userId']?>">
            </a>
          </li>

          <li>
            <a href="#" class="left_menu" onclick="show('add_statement') ">
              <img class="left_menu_icon" src="../../photo/user/1.png" alt="add">
              <span class="text">განცხადების დამატება</span>
            </a>
          </li>

          <li>
            <a href="#" class="left_menu" onclick="show('gancxadebebi')">
              <img class="left_menu_icon" src="../../photo/user/3.png" alt="add">
              <span class="text">ჩემი განცხადებები</span>
            </a>
          </li>

          <li>
            <a href="#" class="left_menu" onclick="show('rcheulebi')">
              <img class="left_menu_icon" src="../../photo/user/2.png" alt="add">
              <span class="text">ჩემი რჩეულები</span>
            </a>
          </li>

          <li>
            <a href="#" class="left_menu"  onclick="show('redaqtireba')" >
              <img class="left_menu_icon" src="../../photo/user/6.png" alt="add">
              <span class="text">ანგარიშის რედაქტირება</span>
            </a>
          </li>

          <li>
            <a href="#" class="left_menu"  onclick="show('change_password')">
              <img class="left_menu_icon" src="../../photo/user/7.png" alt="add">
              <span class="text">პაროლის შეცვლა</span>
            </a>
          </li>

          <li style="border: none;">
            <a href="#" class="left_menu"  onclick="<?php CloseSession()?>">
              <img class="left_menu_icon" src="../../photo/user/8.png" alt="add">
              <span class="text">გამოსვლა</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="right">

        <div class="damateba" id="add_statement">
          <h3 style="text-align:center;  color: #1b0f55;">განცხადების დამატება</h3>
          <br><br>

          <form action="../../php/user.php" method="post" enctype="multipart/form-data">

          <div class="damateba_variantebi">
            <select name="property_type">
              <option value="all" class="underline blue">უძრავი ქონების ტიპი</option>
              <option value="1">სახლი</option>
              <option value="2">ბინა</option>
              <option value="3">კომერციული ფართი</option>
              <option value="4">აგარაკი</option>
              <option value="5">მიწის ნაკვეთი</option>
            </select>
          </div>

          <div class="damateba_variantebi">
            <select name="agreement_type">
              <option value="all" class="underline blue">გარიგების ტიპი</option>
              <option value="1">იყიდება</option>
              <option value="2">ქირავდება</option>
              <option value="3">გირავდება</option>
              <option value="4">ქირავდება დღიურად</option>
            </select>
          </div>

          <div class="damateba_variantebi">
            <select name="location_city">
              <option value="all" class="underline blue">ქალაქი</option>
              <option value="1">თბილისი</option>
              <option value="2">ქუთაისი</option>
              <option value="3">ბათუმი</option>
              <option value="4">რუსთავი</option>
              <option value="5">სხვა</option>
            </select>
          </div>

          <div class="damateba_variantebi">
            <select name="location_district">
              <option value="all" class="underline blue">რაიონი</option>
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

          <br>
          <hr>

          <div class="damateba_variantebi">
            <p>ოთახების რაოდენობა</p>
            <input type="number" class="damateba_money" name="damateba_room" min="1">
          </div>

          <br>
          <hr>

          <div class="damateba_variantebi">
            <p>ფასი</p>
            <input type="number" class="damateba_money" name="damateba_price" min="1">
            <div class="damateba_money_type" style="font-size: 20px; align:center">
                ₾
              </div>
          </div>

          <br>
          <hr>


          <div class="damateba_variantebi">
            <p>ფართი</p>
            <input type="number" class="damateba_money" name="damateba_area" min="1">
            <div class="damateba_money_type" style="font-size: 20px; align:center">
              მ²
            </div>
          </div>

          <br>
          <hr>

          <div class="check">
            <div class="checkleft"> 
              <input type="checkbox" name="balcon" value="Yes">აივანი
              <br>
              <input type="checkbox" name="loggy" value="Yes">ლოჯი
              <br>
              <input type="checkbox" name="verandah" value="Yes">ვერანდა
              <br>
              <input type="checkbox" name="gatboba" value="Yes">გათბობის სისტემა
              <br>
              <input type="checkbox" name="gazi" value="Yes">ბუნებრივი აირი
            </div>

            <div class="checkmiddle">
              <input type="checkbox" name="aveji" value="Yes">ავეჯი
              <br>
              <input type="checkbox" name="internet" value="Yes">ინტერნეტი
              <br>
              <input type="checkbox" name="telefoni" value="Yes">ტელეფონი
              <br>
              <input type="checkbox" name="tv" value="Yes">ტელევიზია
              <br>
              <input type="checkbox" name="kondicioneri" value="Yes">კონდიციონერი
            </div>

            <div class="checkright">
                <input type="checkbox" name="lifti" value="Yes">ლიფტი
                <br>
                <input type="checkbox" name="buxari" value="Yes">ბუხარი
                <br>
                <input type="checkbox" name="parkingi" value="Yes">პარკინგი
            </div>
          </div>

          <br>
          <hr>

          მოკლე აღწერა:
          <br>
          <br>
          <textarea name="description" id="description" value="" cols="125" rows="10"></textarea>

          <br>
          <br>
          <hr>

          <p>Photo:</p>
          <input type="file" name="Filename"> 

          <br><br>
          <hr>


          <input type="submit" name="submit" value="submit">

          </form>
              


        </div>

        <div id="gancxadebebi">
          <h3>ჩემი განცხადებები</h3>
          <table border='1px'>
            <tr>  
              <th>Id</th>
              <th>property_type</th>
              <th>agreement_type</th>
              <th>location_city</th>
              <th>location_district</th>
              <th>room</th>
              <th>price</th>
              <th>area</th>
              <th>upload_date</th>
            </tr>

            <tr>
              <?php
              gancxadebebi()
              ?>
            </tr>


          </table>
        </div>

        <div id="rcheulebi">
          <h3>რჩეულები</h3>
          <table border='1px'>
            <tr>  
              <th>Id</th>
              <th>property_type</th>
              <th>agreement_type</th>
              <th>location_city</th>
              <th>location_district</th>
              <th>room</th>
              <th>price</th>
              <th>area</th>
              <th>upload_date</th>
            </tr>

            <tr>
              <?php
              rcheulebi()
              ?>
            </tr>


          </table>
        </div>

        <div  id="redaqtireba">

        </div>

        <div class="change_password"  id="change_password">
          <h3>პაროლის შეცვლა</h3>
          <form action="../../php/changePassword.php" method="post">
            <input type="password" id="password" name="password_1" placeholder="პაროლი">
            <div class="">
              <p id="wrong_password" style = "display:none" class="wrong">შეიყვანეთ პაროლი სწორად!</p>
            </div>

            <input type="password" id="repeat_password" name="password_2" placeholder="გაიმეორეთ პაროლი">

            <div>
              <input type="submit" name="changePassword" value="პაროლის შეცვლა" onclick="check()" class="buttshesvla">
            </div>
          </form>
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

  </body>
</html>
