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
<<<<<<< HEAD
        $('#register').attr("disabled", true);
=======
>>>>>>> 9ac34b33b6595bd3804a21d063780a01c61472a3
       }
       else
       {
        $('#status').html('<span class="text-success">Username Available</span>');
<<<<<<< HEAD
        $('#register').attr("disabled", false);
       }
      }
     })

  });
 });  

$(document).ready(function(){  
   $('#email_input').keyup(function(){

     var user_email = $(this).val();

     $.ajax({
      url:'check.php',
      method:"POST",
      data:{email:user_email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#estatus').html('<span class="text-danger">Your username has been registered</span>');
        $('#register').attr("disabled", true);
       }
       else
       {
        $('#estatus').html('<span class="text-success">Email available</span>');
        $('#register').attr("disabled", false);
=======
>>>>>>> 9ac34b33b6595bd3804a21d063780a01c61472a3
       }
      }
     })

  });
 });  