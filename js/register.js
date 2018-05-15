function check_info() {
        if (document.mynewForm.lname.value.length == 0)
        {
          alert("Please fill in your last name");
          return false;
        } 
        if (document.mynewForm.lname.value.length > 50)
        {
          alert("Your last name cannot be longer than 50units");
          return false;
        }
        if (document.mynewForm.username.value.length == 0)
        {
          alert("Please fill in your username");
          return false;
        }
        if (document.mynewForm.username.value.length > 50)
        {
          alert("Username cannot be more than 50units");
          return false;
        }
        if (document.mynewForm.password.value.length == 0)
        {
          alert("Please fill in your password");
          return false;
        }
        if (document.mynewForm.password.value.length > 10)
        {
          alert("Password cannot be more than 10units");
          return false;
        }
        if (document.mynewForm.re_password.value.length == 0)
        {
          alert("Please confirm your password again");
          return false;
        }
        if (document.mynewForm.password.value != document.mynewForm.re_password.value)
        {
          alert("Confirm password must be the same with password");
          return false;
        }
        if (document.mynewForm.fname.value.length == 0)
        {
          alert("Please fill in your first name");
          return false;
        } 
        if (document.mynewForm.fname.value.length > 50)
        {
          alert("Your first name cannot be longer than 50units");
          return false;
        }
        mynewForm.submit();          
      };

