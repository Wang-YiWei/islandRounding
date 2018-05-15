function show_title() {
    var title = document.getElementById('title');
    var down_icon = document.getElementsByClassName('slide-down')[0];

    title.style.opacity = 1;
    // title.style.transform = "rotate(360deg)";
    var hero_text = document.getElementsByClassName('hero-text');
    var delay = 0;
    var i = 0;

    down_icon.style.transitionDelay = hero_text.length + "s";
    setTimeout(function () {
        for (i = 0; i < hero_text.length; ++i, delay += 1) {
            hero_text[i].style.opacity = 1;
            hero_text[i].style.transitionDelay = delay + "s";

            if (i == hero_text.length - 1)
                down_icon.style.opacity = 1;
        }
    }, 1000);

}

show_title();