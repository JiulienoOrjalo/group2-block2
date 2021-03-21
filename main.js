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
