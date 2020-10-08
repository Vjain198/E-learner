// Ajax call for Admin login verification 


function checkAdminLogin(){
    var adminLogemail= $("#adminLogemail").val();
    var adminLogpass= $("#adminLogpass").val();
    $.ajax({
      url:'Admin/admin.php',
      method:'POST',
      data:{
          checkLogemail:"checkLogemail",
          adminLogemail:adminLogemail,
          adminLogpass:adminLogpass,
      },
      success:function(data){
        
         if(data == 0){
            
           $("#statusAdminLogmsg").html('<small class="alert alert-danger">Login Failed</small>');
         }
         else if(data == 1){
          $("#statusAdminLogmsg").html('<small class="alert alert-success">Login Successfull</small>');
          setTimeout(()=>{
            window.location.href= "Admin/Dashboard.php";
          }, 1000);
         }
      },
  
    });
  }
  