/* Pour mettre ce JavaScript sur une page, ajouter
<script src="./main.js"></script>
dans le body d'un fichier, de préférence à la fin. */

function cache() { // Cache une division si le checkbox est tické
    // Pour vous en servir, assignez l'ID "stuff" a un element HTML et l'ID "cache" a une checkbox.
    // Get the checkbox
    var checkBox = document.getElementById("cache");
    // Get the output
    var text = document.getElementById("text");
  
    // If the checkbox is checked, display the output
    if (checkBox.checked == false){
      stuff.style.display = "contents";
    } else {
      stuff.style.display = "none";
    }
  }

function disable() { // Désactive les textboxes si le checkbox est tické
      // Get the checkbox
      var checkBox = document.getElementById("disable");
      // Get the output
      var text = document.getElementsByClassName("form-control");

      if (checkBox.checked == false){
        for (var i = 0; i < text.length; i++) {
          text[i].readOnly = false;
          text[i].style.background = "#fff";
        }
      } else {
        for (var i = 0; i < text.length; i++) {
          text[i].readOnly = true;
          text[i].style.background = "#e9ecef";
        } 
      }
}
/*test carousel en js pure*/
let liEls = document.querySelectorAll('ul li');
let index = 0;
window.show = function(increase) {
  index = index + increase;
  index = Math.min(
    Math.max(index,0),
    liEls.length-1
  );
  liEls[index].scrollIntoView({behavior: 'smooth'});
}