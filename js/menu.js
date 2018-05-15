function responsive_nav() {
    var x = document.getElementById("myTopnav");
    var down_icon = document.getElementsByClassName('slide-down')[0];
    if (x.className === "topnav") {
        x.className += " responsive";
        down_icon.style.display = "none";
    } else {
        x.className = "topnav";
        down_icon.style.display = "block";
    }
}