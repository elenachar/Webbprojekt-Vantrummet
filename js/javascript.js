<<<<<<< HEAD
function validateForm() {
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

$_SESSION[''] = 

=======
function moveNumbers(tagg) {
    var txt = document.getElementById("sökbar").value;
    txt += tagg + " ";
    document.getElementById("sökbar").value = txt;
}

[].forEach.call(document.getElementsByClassName('sökfält'), function (element) {
    var doldInput = document.createElement('input');
    var huvudinput = document.createElement('input');
    var taggar = [];
    
    doldInput.setAttribute('type', 'hidden');
    doldInput.setAttribute('name', element.getAttribute('data-name'));
    
    huvudinput.setAttribute('type', 'text');
    huvudinput.setAttribute('id', 'sökbar');
    huvudinput.classList.add('textinput');
    huvudinput.addEventListener('input', function () {
        
        var skrivenTagg = huvudinput.value.split(' ');
        
        if (skrivenTagg.length > 1) {
            
            skrivenTagg.forEach(function (t) {
                
                var filtreradTagg = filtreraTagg(t);
                
                if (filtreradTagg.length > 0) {
                    skapaTagg(filtreradTagg);
                }
            });
            huvudinput.value = '';
        }
    }, false);
    
    huvudinput.addEventListener('keydown', function (tangent) {
        var tangentkod = tangent.which || tangent.keyCode;
        if (tangentkod === 8 && huvudinput.value.length === 0 && taggar.length > 0) {
            taBortTagg(taggar.length - 1);
        }
    })
    
    element.appendChild(huvudinput);
    element.appendChild(doldInput);
    
    function skapaTagg(text) {
        
        var tagg = {text: text, element: document.createElement('span')};
        
        tagg.element.classList.add('tagg');
        tagg.element.textContent = tagg.text;
        
        taggar.push(tagg);
        
        var raderaKnapp = document.createElement('span');
        raderaKnapp.classList.add('stäng');
        raderaKnapp.addEventListener('click', function () {
            taBortTagg(taggar.indexOf(tagg));
        });
        tagg.element.appendChild(raderaKnapp);
        element.insertBefore(tagg.element, huvudinput);
        uppdateraTaggar();
    }
    
    function taBortTagg(index) {
        var tagg = taggar[index];
        taggar.splice(index, 1);
        element.removeChild(tagg.element);
        uppdateraTaggar();
    }
    
    function uppdateraTaggar() {
        var tagglista = [];
        taggar.forEach(function (tagg) {
            tagglista.push(tagg.text);
        });
        doldInput.value = tagglista.join(' ');
    }
    
    function filtreraTagg(tagg) {
        return tagg.replace(/[^\w]/g, '').trim();
    }    
});
>>>>>>> b9f01ead8b85c3a0cf7046be11618e940fc1729f
