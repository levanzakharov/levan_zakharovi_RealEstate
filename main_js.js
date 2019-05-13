
function reklama() {
  reklama1 = document.getElementById("reklama1");
  reklama2 = document.getElementById("reklama2");
  list = [0,1];

  for (var i = 0; i < 2; i++) {
    ricxvi = Math.floor(Math.random()*4 + 1);
    list[i] = ricxvi;
  }
  reklama1.src= '../../photo/reklama/'+list[0]+'.jpg';
  reklama2.src= '../../photo/reklama/'+list[1]+'.jpg';

}
reklama()

var timerId = setInterval(reklama, 2000);
