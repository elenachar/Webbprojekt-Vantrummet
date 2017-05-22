function validateForm() {
  var x = document.forms["myForm"]["namn"].value.trim();
  var y = document.forms["myForm"]["mail"].value.trim();
  var z = document.forms["myForm"]["inlagg"].value.trim();
  var at = y.indexOf("@");
  var dot = y.indexOf(".");

    if (x == "") {
        alert("Name must be filled out"); 
    }
    else if (z == "") {
        alert("no comment written");
    }
    else if (y == ""){
        alert("Email address must be filled out");
    }
  

if (at == -1 || dot == -1 || !(/\S+@\S+\.\S+/)){
    alert("wrong email format");
  }
else{
  return true;
}

}

