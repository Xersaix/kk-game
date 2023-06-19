var navbar_top_container = document.getElementById("navbar-top-container");
var header_container = document.getElementById("header-container");
var mobile_nav = document.getElementById("mobile-nav");





window.onscroll = function() {
    if(window.scrollY != 0)
    {

        header_container.style.backgroundColor = "#000000";
        mobile_nav.style.display = "none";



    }else{
        mobile_nav.style.display = "flex";
        // header_container.style.backgroundColor = "#fbfbfb";

    }



};