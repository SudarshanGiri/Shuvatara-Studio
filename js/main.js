
//onscroll change the background of nav
/*window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var nav=document.querySelector("nav");
    if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) {
    nav.style.background="#000";
    nav.style.borderBottom="1px solid #646464";
    } 
    else{
        nav.style.background="transparent";
        nav.style.borderBottom="none";




    }
}

*/

//end navbar

$(document).ready(function() {

    $(document).on("scroll", function(){
 
        if ($(document).scrollTop() > 80){
            $(".primary-nav").addClass("shrink");
            $(".navbar-brand img").addClass("shrink")
        } else {
            $(".primary-nav").removeClass("shrink");
            $(".navbar-brand img").removeClass("shrink");
        }
    
    });
    
  });


