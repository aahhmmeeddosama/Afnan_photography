
<?php include "Main_Nav.php";error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="pack.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Noto+Sans">
    <link rel="shortcut icon"  href="Images/LB_Editedb.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
   .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
text-align: right;
  color: #aaaaaa;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}   
  </style>
</head>
<body>
  <?php
   $price = "";
   $city="";
   $desc="";
   $ID="";
   include "conn.php";
if(isset($_POST['insert']))
 {  

    $city=$_POST['CName'];
    $Event=$_POST['type'];
    $sql="SELECT ID FROM `package type` where Package_Name='".$Event."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
         { 
            while($row = mysqli_fetch_assoc($result))
            {
               $ID = $row['ID'];
            }
         }
     
    $getcourse="SELECT * FROM `packages` WHERE City='".$city."' AND ID_Package_Type ='".$ID."' ";
    $getresult=mysqli_query($conn,$getcourse);
       if(mysqli_num_rows($getresult) > 0)
         { 
            while($row = mysqli_fetch_assoc($getresult))
            {
               $price = $row['Price'];
               $desc=$row['Description'];
            }

         }
     }

  ?>  
<form action ="" method="POST">
<?php
 echo "<p style=margin-left:250px;margin-top:150px;font-size:24px;> Select the City of event </p>";
  $conn = mysqli_connect("localhost", "root", "", "afnan");
  $sqlNat = "SELECT DISTINCT CityName FROM `city`";
  $resultNat = mysqli_query($conn, $sqlNat);
  echo "<div class='type1';>'<select name='CName'><br>'";

  while ($row = $resultNat->fetch_assoc()){
    echo '<option value="'.$row["CityName"].'">'.$row["CityName"].'</option>';
    echo $row['CityName']."<br>";
}
echo "</div>'</select>'";

echo "<div class='move';><p>Event Type</p><br>'</div>'";
  $conn = mysqli_connect("localhost", "root", "", "afnan");
  $sqlNat="SELECT Package_Name FROM `package type`";
  $resultNat = mysqli_query($conn, $sqlNat);
  echo "<div class='type';><select name='type'>";
  while ($row = $resultNat->fetch_assoc()){
    echo '<option value="'.$row["Package_Name"].'">'.$row["Package_Name"].'</option>';
    echo $row['Package_Name']."<br>";
}
echo "</select>"
?>
<input type="submit" name="insert" id="myBtn" value="check" onclick="view()" placeholder ="Add" style="margin-left: 100px;">
</form>
<div id="myModal" class="modal">
       <div class="modal-content">
        <span class="close">&times;</span>
         <table class = "table table-hover">
      <tr> 
          <th> Price </th>
          <th> Description </th>
          <th> Type </th>
         
      </tr>
    <?php
      
          print "<tr>";
          print "<td>".$price."</td>";
          print "<td>".$desc."</td>";
          print "<td>".$ID."</td>";
          print "</tr>";
    ?>
    </table>
        </div>
</div>
    <div class="pack">
    <div class="col">
        <div class="title"><h2>Weeding</h2></div>
    <img src="packphotos/3.jpeg">
    <div class="content">
        <ul>
            <li>
                <div class="dropdown">
                    <span>Cairo</span>
                    <p></p>
                    <p></p>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>

        
    </div>
    </div>

<div class="col">
    <div class="title"><h2>Engagment</h2></div>
    <img src="packphotos/1.jpeg">
    <div class="content">
        
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Cairo</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
            <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
    </div>
</div>
    <div class="col">
    <div class="title"><h2>Casual</h2></div>
    <img src="packphotos/2.jpeg">
    <div class="content">
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
    </div>
</div>
    <div class="col">
    <div class="title"><h2 id="other">Other</h2></div>
    <img src="packphotos/4.jpeg">
    <div class="content">
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Cairo</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div> 
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
        
    </div>
    </div>
    </div>
    <script>
        var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
</body>
</html>