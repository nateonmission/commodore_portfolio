// JavaScript
//$('.marquee').hide().fadeIn(4000);
$('.banner').hide().fadeIn(2000);


function popUpBox(idName) {
    var popup = document.getElementById(idName);
    popup.classList.toggle("show");
}

function expandUL(idName) {
    var thisUL = document.getElementById(idName);
    thisUL.classList.toggle("showUL");
}




