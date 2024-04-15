function showsign() {
  if ((document.getElementById("popuplog").style.display = "block")) {
    document.getElementById("popuplog").style.display = "none";
  }
  document.getElementById("popup").style.display = "block";
}

function closeSignup() {
  document.getElementById("popup").style.display = "none";
}

function showLogin() {
  if ((document.getElementById("popup").style.display = "block")) {
    document.getElementById("popup").style.display = "none";
  }
  document.getElementById("popuplog").style.display = "block";
}

function closeLogin() {
  document.getElementById("popuplog").style.display = "none";
}
