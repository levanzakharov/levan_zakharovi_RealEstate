function change(n){
  console.log(n);
  if (n == 1) {
    document.getElementById("list").style.backgroundColor = "#f2f2f2";
    document.getElementById("table").style.backgroundColor = "white";
  }
  else {
    document.getElementById("table").style.backgroundColor = "#f2f2f2";
    document.getElementById("list").style.backgroundColor = "white";
  }
}


var mtvleli = 0
function changeRise(n) {
  console.log(mtvleli);
  mtvleli += n;
  if (mtvleli %2 == 1) {
    document.getElementById("rise").style.backgroundImage = "url('../../photo/rise.png')";
  }
  else{
    document.getElementById("rise").style.backgroundImage = "url('../../photo/decrease.png')";
  }
}
