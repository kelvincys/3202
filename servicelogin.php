<?php
    session_start();
    if(!isset($_SESSION['logined'])){
    
?>
    Please login in order to purchase our service <input type="hidden" name="hosted_button_id" id="paypalid">
	
<?php
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
    } else {
?>
     <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" id="paypalid">
                            <input type="image" src="https://www.sandbox.paypal.com/en_AU/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                        </form>
<?php
   } 
?>