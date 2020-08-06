var prevPos = window.pageYOffset;
window.onscroll = function () {
    var currPos = window.pageYOffset;
    if(currPos==prevPos){
        document.getElementById("navbar").style.backgroundColor ="transparent";
    }
    if(currPos>prevPos) {
        document.getElementById("navbar").style.height = "150px";
        document.getElementById("navbar").style.backgroundColor =
            "rgba(0,0,0,00.85)";
    }
};
