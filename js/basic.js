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

    // If user clicks anywhere outside of the modal, Modal will close

    var modal = document.getElementById("poplog");
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    });
})(jQuery);

function check_data()
          {
            if (document.myForm.account.value.length == 0)
              alert("Please fill in the username");
            else if (document.myForm.password.value.length == 0)
              alert("Please fill in the password");
            else 
              myForm.submit();
    };