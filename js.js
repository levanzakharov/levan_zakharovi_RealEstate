var slideNumber = 1;
showDivs(slideNumber);

function plusDivs(n) {
  showDivs(slideNumber += n);
}

// setTimeout(plusDivs(1) , 1000);



function showDivs(n) {
  var x = document.getElementsByClassName("slidebi");
  if (n > x.length) {slideNumber = 1}
  if (n < 1) {slideNumber = x.length}
  for (var i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideNumber-1].style.display = "block";
}



function reklama() {
  reklama1 = document.getElementById("reklama1");
  reklama2 = document.getElementById("reklama2");
  list = [0,1];

  for (var i = 0; i < 2; i++) {
    ricxvi = Math.floor(Math.random()*4 + 1);
    list[i] = ricxvi;
  }
  reklama1.src= 'photo/reklama/'+list[0]+'.jpg';
  reklama2.src= 'photo/reklama/'+list[1]+'.jpg';

}
reklama()

var timerId = setInterval(reklama, 2000);



















function agentCover() {
  document.getElementById("agent_uncover").style.display = "none";
  document.getElementById("agent_cover").style.display = "block";
}

function agentUnCover() {
  document.getElementById("agent_cover").style.display = "none";
  document.getElementById("agent_uncover").style.display = "block";
}
