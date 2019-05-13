function show(n) {
  var tables = ["add_statement","gancxadebebi","rcheulebi","redaqtireba","change_password"];

  
  for (i = 0; i < 5; i++) {
    if(n != tables[i]){
      document.getElementById(tables[i]).style.display = "none";
    }
    else{
      document.getElementById(tables[i]).style.display = "block";
    }
  }
}