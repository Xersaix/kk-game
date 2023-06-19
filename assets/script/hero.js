
var my_hero = document.getElementById("my-hero");



function verifyMobile(){

    if (navigator.userAgent.match(/Android/i)
         || navigator.userAgent.match(/webOS/i)
         || navigator.userAgent.match(/iPhone/i)
         || navigator.userAgent.match(/iPad/i)
         || navigator.userAgent.match(/iPod/i)
         || navigator.userAgent.match(/BlackBerry/i)
         || navigator.userAgent.match(/Windows Phone/i)) {
            a = true ;
            console.log(true)
    

            my_hero.style.height = "40vh"
            my_hero.style.backgroundSize = "130% 130%"
            my_hero.style.backgroundPositionX = "50%"
            my_hero.style.marginTop = "20px" 
            my_hero.style.backgroundAttachment = "scroll"
         } else {
            a = false ;
            console.log(false)

            my_hero.style.height = "60vh"
            my_hero.style.backgroundSize = "100% 100%"
            my_hero.style.backgroundPositionX = "0%"
            my_hero.style.marginTop = "0px" 
            my_hero.style.backgroundAttachment = "fixed"
         }

}

window.onresize = function(){

    verifyMobile();

};


window.onload = function(){  
    
    verifyMobile();

}




