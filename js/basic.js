(function($) {          
	var x = document.getElementsByClassName("navbar");
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                (x[0].style.backgroundColor = "rgb(0,0,0,0.7)");
            } else {
                (x[0].style.backgroundColor = "rgb(0,0,0,0)");
            }
        });
    });
})(jQuery);
