function registerForm() {
  var x = document.forms["myForm"]["namn"].value.trim();
  var y = document.forms["myForm"]["mail"].value.trim();
  var z = document.forms["myForm"]["inlagg"].value.trim();
  var at = y.indexOf("@");
  var dot = y.indexOf(".");

    if (x == "") {
        alert("Namnet är inte skrivet"); 
    }
    else if (z == "") {
        alert("Inlägget är inte skrivet");
    }
    else if (y == ""){
        alert("Mejladressen är inte skriven");
    }
  

if (at == -1 || dot == -1 || !(/\S+@\S+\.\S+/)){
    alert("fel mejlformat");
  }
else{
  return true;
}

}

