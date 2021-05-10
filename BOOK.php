<?php
include "conn.php";
if(isset($_POST['ahmed']))
 {
    $x=$_POST['date'];
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $loc=$_POST['location'];
    $phone=$_POST['mobile'];
    $Comment=$_POST['Comment'];
    $time=$_POST['time'];
    $check=false;
    
    if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z])$^", $fn) == 0){
        print ($fn. " is not characters!"); 
   }
    
    else if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z])$^", $ln) == 0){
        print ($ln. " is not characters!"); 
   }
     else if(preg_match('@[0-9]@', $phone) == 0){
         print ($phone." is not numbers!!");
     }
     else if(preg_match("^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z])$^", $loc) == 0){
         print ($loc." is not characters!");
     }
     else{

         $reserve="INSERT INTO `booking`(`FirstName`, `LastName`, `City` , `Date`,`time`, `Comment`) VALUES('$fn','$ln', 'Ismailia' , '$x','$time','$Comment')";
         $putresult=mysqli_query($conn,$reserve);
         if($putresult)
         {
           print "data inserted"; 
         }  
         else
         {
           print "data not inserted";
         }   
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Book Now </title>
    <link rel="stylesheet" href="BOOK.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
  <div class="container">
    <div class="title">Book a session</div>
    <div class="content">
      <form action="BOOK.php" method="post" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" name="fn">

          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your last name" name="ln">
          </div>
          <div class="input-box">
            <span class="details">phone</span>
            <input type="text" placeholder="Enter your phone number" name="mobile">
          </div>
          <div class="input-box">
            <span class="details">Location</span>
            <input type="text" placeholder="Enter session location" name="location">

          </div>
          <div class="input-box">
            <span class="details">Session Date</span>
            <input type="date" placeholder="YYYY--MM--DD" name="date" required>

          </div>
          <div class="input-box">
            <span class="details">session time</span>
            <input type="Time" placeholder="select session time" name="time" required >
          </div>
          <div class="input-box">
            <span class="details">Description & comments</span>
            <input type="text" placeholder="Description & comments" name="Comment">
          </div>
        </div>
        <div class="button">
          <input type="submit" name= "ahmed"  value="Book">
        </div>


      </form>
    </div>
  </div>

</body>


</html>
<?php include "Main_Nav.php";error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
