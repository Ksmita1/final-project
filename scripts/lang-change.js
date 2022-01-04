$(document).ready(function(){
  // Mygtukų (language) keitimas
  var x, i, j, l, ll, selElmnt, a, b, c;
  /* ieško pavadinimų susijusių su klase "custom-select":*/
  x = document.getElementsByClassName("lang-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* kiekvienam elementui, sukuria naują DIV kuris veiks kaip pasirinktas elementas */
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* kiekvienam elementui, sukuria naują DIV kuris talpins pasirinkimus */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < 4; j++) {
      /* kiekvienam pasirinkimui, sukuria naują DIV kuris veiks kaip options pasirinkimas*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /* kai elementas pasirinktas, atnaujina pasirinkimus ir pasirinktą elementą */
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /* kai paspaudžiame pasirinkti, uždarome kitas "dėžutes", ir atidarome / uždarome pasirinktą "dėžutę":*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
  }
  function closeAllSelect(elmnt) {
    /* uždaro / paslepia visus kitus pasirinkimus, kai pasirinktas konkretus elementas */
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  /* kai paspaudžiame bet kur už "dėžutės" ribų, uždarome visus galimus pasirinkimus */
  document.addEventListener("click", closeAllSelect);
});