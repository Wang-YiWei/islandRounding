var main_page = document.getElementsByClassName("main-page")[0];
var hero_container = document.getElementsByClassName("hero-container")[0];
var menu = document.getElementsByClassName("topnav")[0];
var menu_margin_bottom = 20;
hero_container.style.height = main_page.clientHeight - menu.clientHeight - menu_margin_bottom - 5 + "px";