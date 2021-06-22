<?php

$curpass= $newpass =$repass="";
$curpassErr= $newpassErr =$repassErr="";
$currentpass ="@1234AAA";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["curpass"])) {
    $curpass ="Current password is required";




  }
  else{
    $curpass= test_input ($_POST["curpass"]);

    $newpass= test_input ($_POST["newpass"]);

    $repass= test_input ($_POST["repass"]);

    if($curpass!= $currentpass)
    {
        $curpassErr= "Current password DO NOT match!";
    }
    else{
      if(empty($_POST["newpass"]))
      {
        $newpassErr="<label class='text-danger'>Enter a password</label><br>";
      }
      else if($newpass != $curpass)
      {
        $newpass="<label class='text-danger'>Enter a password</label><br>";
      }
      else if(empty($_POST["repass"]))
      {
        $repassErr="retype new password again";
      }
    }
  }
  
}
 
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
 ?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  


           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                      if(isset($nameErr))  
                     {  
                          echo $nameErr;  
                     }
                     
                     ?>  
                     <br />  
                     <label>Current Password</label>
                     <input type="Password" name = "curpass"   class="form-control" /><br />
                    
                     <label>New Password</label>
                     <input type="Password" name = "newpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" /><br />
                     <label>Re-Type New Password</label>
                     <input type="Password" name = "repass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  class="form-control" /><br />
                    

                  
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  