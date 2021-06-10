<?php
/**
 * 
 */
require_once('database_Connect.php');

class UserValidation extends dbConnect
{
    public $date;
    public $fn;
    public $ln;
    public $loc;
    public $phone;
    public $Comment;
    public $time;
    public $check=false;

  function check_validation($fn,$ln,$phone,$loc,$date,$time,$comment)
  {
    $this->fn=$fn;
    $this->ln=$ln;
    $this->phone=$phone;
    $this->loc=$loc;
    $this->date=$date;
    $this->time=$time;
    $this->comment=$Comment;
    if(!preg_match("/^[a-zA-Z'-]+$/",$fn)){

     echo '<script type="text/JavaScript">swal("Sorry!", "invalid first name","error");</script>';
        die ();
   } 

    
    if(!preg_match("/^[a-zA-Z'-]+$/",$ln)){
     echo '<script type="text/JavaScript"> 
     swal("Sorry!", "invalid last name", "error");
     </script>';
        die ();
   } 
     else if(!preg_match('/^[0-9]{11}+$/', $phone)){
              echo '<script type="text/JavaScript"> 
     swal("Sorry!", "invalid phone number", "error");
     </script>';
        die ();
     }
     else if(preg_match("/^[a-zA-Z]$/", $loc) != 0){
         print ($loc." is not characters!");
     }
    else{
        $sql="INSERT INTO `booking`(`FirstName`, `LastName`, `City` , `Date`,`time`,`Phone`, `Comment`) VALUES('$fn','$ln', 'Ismailia' , '$date','$time','$phone','$Comment')";

            $s=$this->connect()->prepare($sql);
            //To avoid The sql injection
            $s->execute([$fn]);
                   echo '<script type="text/JavaScript"> 
     swal("Good job!", "Reservation received", "success");
     </script>';

    }

  }
  function getdate($d)
  {
    $n=new dbConnect();
    $sql = "SELECT `Date` FROM booking WHERE `Date` = '".$d."'";
    $stmt=$n->connect()->query($sql);
    
    if($stmt->rowCount())
    {
       echo '<script type="text/JavaScript"> 
     swal("Sorry!", "this date already received", "error");
     </script>';
      exit();

  
    }
  
 


/*
  $select = $this->connect()->prepare("SELECT `Date` FROM `booking`");
  $select->bindValue(':id', $id, PDO::PARAM_INT);
  $select->execute();
  $result = $select->fetchAll(PDO::FETCH_ASSOC);
  return $result;
  */
}

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Book Now </title>
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
    type="text/css" />
    <link rel="stylesheet" href="BOOK.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script language="javascript">
        $(document).ready(function () {
            $("#txtdate").datepicker({minDate: 7

            });
        
        $n=new dbConnect();});
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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
            <input type="text" placeholder="Enter your first name" name="fn" value="<?php if (isset($_POST["fn"])){ echo $_POST["fn"];}?>" required>

          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your last name" name="ln" value="<?php if (isset($_POST["ln"])){ echo $_POST["ln"];}?>" required>
          </div>
          <div class="input-box">
            <span class="details">phone</span>
            <input type="text" placeholder="Enter your phone number" name="phone" value="<?php if (isset($_POST["phone"])){ echo $_POST["phone"];}?>" required >
          </div>
          <div class="input-box">
            <span class="details">Location</span>
            <input type="text" placeholder="Enter session location" name="location"  value="<?php if (isset($_POST["location"])){ echo $_POST["location"];}?>" required>
 
          </div>

          <div class="input-box">
            <span class="details">Session Date</span>
            <input autocomplete="off" type="text" id="txtdate" placeholder="MM--DD--YYYY" name="date" value="<?php if (isset($_POST["date"])){ echo $_POST["date"];}?>"  required>

          </div>
          <div class="input-box">
            <span class="details">session time</span>
            <input  type="Time" placeholder="select session time" name="time"   value='<?php if (isset($_POST["time"])) { echo $_POST["time"];}?>' required>
          </div>
          <div class="input-box">
            <span class="details">Description & comments</span>
            <input type="text" placeholder="Description & comments" name="Comment" value="<?php if (isset($_POST["Comment"])){ echo $_POST["Comment"];}?>" required>
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
if (isset($_POST['ahmed'])) {
  $test->getdate($_POST['date']);
  $test->check_validation($_POST['fn'],$_POST['ln'],$_POST['phone'],$_POST['loc'],$_POST['date'],$_POST['time'],$_POST['Comment']);
}

?>
