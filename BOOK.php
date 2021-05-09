
<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
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
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your first name" required>

          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your last name" required>
          </div>
          <div class="input-box">
            <span class="details">phone</span>
            <input type="text" placeholder="Enter your phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Location</span>
            <input type="text" placeholder="Enter session location" required>

          </div>
          <div class="input-box">
            <span class="details">Session Date</span>
            <input type="date" placeholder="mm-dd-yyyy" required>

          </div>
          <div class="input-box">
            <span class="details">session time</span>
            <input type="Time" placeholder="select session time" required>
          </div>
          <div class="input-boxx">
            <span class="details">Description & comments</span>
            <input type="text" placeholder="Description & comments" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Book">
        </div>


      </form>
    </div>
  </div>

</body>

</html>
<?php 
include 'Main_Nav.php';
?>