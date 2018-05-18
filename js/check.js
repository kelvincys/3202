$(document).ready(function(){  
   $('#username_input').keyup(function(){

     var user_name = $(this).val();

     $.ajax({
      url:'check.php',
      method:"POST",
      data:{username:user_name},
      success:function(data)
      {
       if(data != '0')
       {
        $('#status').html('<span class="text-danger">Your username has been used</span>');
       }
       else
       {
        $('#status').html('<span class="text-success">Username Available</span>');
       }
      }
     })

  });
 });  