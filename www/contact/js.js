function myMap() {
var mapProp= {
    center:new google.maps.LatLng(41.716188, 44.771863),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}



function writeLetter(){
  document.getElementById("letterform").style.display = "block";
  document.getElementById("button").style.display = "none";
}

function checkemail(){
  email = document.getElementById("email").value;
  nomeri = document.getElementById("nomeri").value;
  list = ["0",'1','2','3','4','5','6', '7','8','9'];

  mtvleli = 0;
  for (var i = 0; i < email.length; i++) {
    if (email[i] == "@") {
      mtvleli += 1
    }
  }

  if (mtvleli != 1) {
    document.getElementById("wrong_email").style.display = "inline";
    document.getElementById("email").style.border = "1px solid #ff1421";
  }
  else {
    document.getElementById("wrong_email").style.display = "none";
    document.getElementById("email").style.border = "1px solid #4a4278";
  }

  mtvlelinomeri = 0;
  if (nomeri.length == 13) {
    for (var i = 1; i < password.length; i++) {
      for (var j = 0; j < list.length; j++) {
        if (nomeri[i] != list[j]) {
          mtvlelinomeri += 1;
        }
      }
    }
  }
  else {
    mtvlelinomeri += 1;
  }


  if (mtvlelinomeri > 0) {
    document.getElementById("wrong_nomeri").style.display = "block"
    document.getElementById("nomeri").style.border = "1px solid #ff1421";
  }
  else {
    document.getElementById("wrong_nomeri").style.display = "none"
    document.getElementById("nomeri").style.border = "1px solid #4a4278";
  }
}
