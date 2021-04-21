// Simple toggle script
var toggle = true;
var hamburgerMenu = document.getElementsByClassName("hamburger-menu");

function toggleMenu() {
  if(toggle) {
    hamburgerMenu[0].classList.add("open");
    toggle = false;
  } else {
    hamburgerMenu[0].classList.remove("open");
    toggle = true;
  }
}

// Thumbnail settings
if(CodePen.isThumbnail) {
  root.style.setProperty('--width', '150px');
  setInterval(toggleMenu, 1250);
}
//search
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}