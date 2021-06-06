<?php
/**
 * 
 */
require_once('database_Connect.php');

class UserValidation extends dbConnect
{
    public $x;
    public $fn;
    public $ln;
    public $loc;
    public $phone;
    public $Comment;
    public $time;
    public $check=false;

  function check_validation($fn,$ln,$phone,$loc)
  {
    $this->fn=$fn;
    $this->ln=$ln;
    $this->phone=$phone;
    $this->loc=$loc;
    if(preg_match("/^[a-zA-Z]$/", $fn) != 0){
        print ($fn. "is not characters!"); 
   }

    
    else if(preg_match("/^[a-zA-Z]$/", $ln) != 0){
        print ($ln. " is not characters!"); 
   }
     else if(preg_match("/^[1-9][0-9]{0,10}$/", $phone) != 0){
         print ($phone." is not numbers!!");
     }
     else if(preg_match("/^[a-zA-Z]$/", $loc) != 0){
         print ($loc." is not characters!");
     }
    else{
        $sql="INSERT INTO `booking`(`FirstName`, `LastName`, `City` , `Date`,`time`, `Comment`) VALUES('$fn','$ln', 'Ismailia' , '$x','$time','$Comment')";

            $s=$this->connect()->prepare($sql);
            //To avoid The sql injection
            $s->execute([$fn]);
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
<?php
$test= new UserValidation();
$test->check_validation($_POST['fn'],$_POST['ln'],$_POST['phone'],$_POST['loc']);
?>
