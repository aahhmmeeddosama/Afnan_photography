<?php
    
    include 'Admin.php'; 
    include 'conn.php';

    if(isset($_POST['Add']))
        {    
         

         $FirstName=$_POST['FirstName'];
         $LastName=$_POST['LastName'];
         $PhoneNumber=$_POST['PhoneNumber'];
         $Email=$_POST['Email'];
         $Password=$_POST['Password'];
         $Repassword=$_POST['Repassword'];
          $image=$_FILES['image']['name'];
          $tmp=$_FILES['image']['tmp_name'];
                  $User =  (explode("@",$Email));

        if(empty($image))
        {
              $_SESSION['msg'] = "Please,put a profile picture"; 
   
        }
          if (!preg_match("/^[a-zA-Z0-9_]*$/",$FirstName)) {
      $_SESSION['msg'] = "First Name should not contain space and special characters!"; 
    }
        
        if (!preg_match("/^[a-zA-Z0-9_]*$/",$LastName)) {
      $_SESSION['msg'] = "First Name should not contain space and special characters!"; 
    }
        
        $e = filter_var($Email,FILTER_SANITIZE_EMAIL);
        if(!filter_var($e,FILTER_VALIDATE_EMAIL))
        {
           $_SESSION['errmsg'] = "Not a valid email address!"; 
        }
        
        if($Password != $Repassword)
        {
            $_SESSION['errmsg'] = "Password is not match!"; 
        }
    
        $searchQuery = "SELECT `Email` FROM admin WHERE Email = '".$Email."'";
     $searchResult = mysqli_query($conn, $searchQuery);
     if(mysqli_num_rows($searchResult) >= 1){
       $_SESSION['sign_msg'] = "Email is already exist!"; 
     }
          if(!isset($_SESSION['errmsg']))
          {


              $Instertdata="INSERT INTO `admin`( `Username`, `First_Name`, `Last_Name`, `Email`, `Password`, `Phonenumber`, `Image`) VALUES ('$User[0]','$FirstName','$LastName','$Email','$Password','$PhoneNumber','$image')";
              
              if(mysqli_query($conn,$Instertdata))
              {

                  $_SESSION['msg'] = "Admin Added successfully!"; 
                  move_uploaded_file($tmp,"Adminsphotos/$image");
          
                  
              }
    
           }
         else
              { 

              echo $_SESSION['errmsg'];
          unset($_SESSION['msg']);
        
            
                }
    
        }
    ?>
    
 
<html>
    
    
    <head>
          <link rel="stylesheet" type="text/css" href="AddAdmin.css">

        
    </head>
    
  
 
    
    <body>
        <h1>Add Admin</h1>
        <div class="form" >

        <form action="AddAdmin.php" method="post" enctype="multipart/form-data" id="Get data"  >
           
         
           <label> 
           <input type=file name="image" id="image" class="inputfile" required >
               <label for="image">Upload profile picture</label>
            </label>
               <br>
           <label>
           <input type = "text" name = "FirstName" placeholder="Firt Name" required> 
           
           <input type = "text" name = "LastName" placeholder="Last Name" required>  
            </label>
            <br>
            <br>
           
           <label>
           <input type = "number" name = "PhoneNumber" placeholder="Phone number " required>  
           
           
           <input type = "email" name = "Email" placeholder="Email" required> 
            </label>
            <br>
            <br>
           <label>
           <input type = "password" name = "Password" placeholder="Password" required>  <br>
           
           
           <input type = "password" name = "Repassword" placeholder="Re-password" required>  <br>
            </label>
           <br>
            <br>
            
           <input type = "submit" name = "Add" value = "Add" style="width:120px ">
            
            
           

        </form>
        </div>
                  </body>
        
    
 