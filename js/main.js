// JavaScript

// Heading Fade In
$('.banner').hide().fadeIn(2000);

// Commodor64 PopUp Boxes
function popUpBox(idName) {
    var popup = document.getElementById(idName);
    popup.classList.toggle("show");
}

// Expands Unordered List when C64 screen is not visible
function expandUL(idName) {
    var thisUL = document.getElementById(idName);
    thisUL.classList.toggle("showUL");
}
