<?php
include 'conn.php';
include "Admin.php"; 

          session_start();
    

$Test['id']=2;
  
$sql = "SELECT * FROM Admin WHERE ID =1";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_row($result)){
      
      $Username=$row[1];     
      $FirstName=$row[2];
      $LastName=$row[3];
      $Email=$row[4];
      $Password=$row[5];
      $PhoneNumber=$row[6];
      $Profilepicture=$row[7];
      }    
    ?>



<html>
 <head>
  <title>Profile</title>
  <link rel = "stylesheet" href = "View Profile.css">          
 </head>
  <body>
    
      <h1 style = 'color:red'>View Profle123</h1>
      
        <div class="profile" style = 'height: 620px;margin-right:250px; margin-top: 20px;'>
    
          <form action="View Profile.php" method="post" enctype="multipart/form-data">

    <?php print "<img src = 'Adminsphotos/$Profilepicture' style = ' width: 200px; height: 200px; margin-right: 485px; padding-top: 0px;  margin-buttom:200px;'>"?>;
    <input type = "file" name = "upload"   >
     
              
       
           <label>
               <p>First Name</p><input type="text" name = "Fname" placeholder = "First Name" value = '<?php print "$FirstName"; ?> '>
           
               <p>Last Name</p><input type="text" name = "Lname" placeholder = "Last Name" value = '<?php print "$LastName"; ?> '>
           </label>
           
           
              <p>Email</p> <input type="text" name = "Eml" placeholder = "Email" value = '<?php print "$Email"; ?> '> 
           
              <p>Phone Number</p><input type="text" name = "Pumber" placeholder = "Phone Number" value = '<?php print "$PhoneNumber"; ?> '>
           
              <p>Password</p><input type="Password" name = "Pass" placeholder = "Password" value = '<?php print "$Password"; ?> '>
   
           <input type = "submit" value = "Edit" name = "Edit">

       </form>
        <center>
      <?php
      
                  if(isset($_POST['Edit']))
      {
              
      $FirstName1=$_POST['Fname'];
      $LastName1=$_POST['Lname'];
      $Email1=$_POST['Eml'];
      $Password1=$_POST['Pass'];
      $PhoneNumber1=$_POST['Pumber'];
                      

           if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$^", $FirstName1) == 0){
        $_SESSION['errmsg'] = "First Name should be characters only!"; 
     
      }
      if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$^", $LastName1) == 0){
        $_SESSION['errmsg'] = "Last Name should be characters only!"; 
     
      }
      $e = filter_var($_POST['Eml'],FILTER_SANITIZE_EMAIL);
        if(!filter_var($e,FILTER_VALIDATE_EMAIL))
        {
           $_SESSION['errmsg'] = "Not a valid email address!"; 
        }
            
          if(!isset($_SESSION['errmsg'])){
          
                 
                $editQuery = "UPDATE `admin` SET `First_Name` = '$FirstName1', `Last_Name` = '$LastName1', `Email` = '$Email1',`Password`='$Password1' WHERE `ID` = 1";
          mysqli_query($conn,$editQuery);      
                $_SESSION['msg'] = "Edited successful. You may login now!"; 
        }       
              if(!isset($_SESSION['errmsg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
                header('location: View Profile.php');
  
              }
                else if(isset($_SESSION['errmsg'])){
                    echo $_SESSION['errmsg'];
          unset($_SESSION['errmsg']);
                }
                  }
      ?>
      </center>
  </div>
  </body>
</html>

