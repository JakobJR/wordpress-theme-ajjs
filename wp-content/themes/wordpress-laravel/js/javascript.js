var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
    if(window.pageYOffset > 200) {
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-140px";
        }
        prevScrollpos = currentScrollPos;
        console.log(window.pageYOffset);
    }
}
