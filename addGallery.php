<?php 
    include 'Admin.php'; 
       include 'conn.php';
$ID="";
if(isset($_POST['submit']))
 {
   
          $image=$_FILES['image']['name'];
          $tmp=$_FILES['image']['tmp_name'];    
          $name=$_POST['name'];
         
    $i=$_POST['AName'];
    $sql="SELECT ID FROM `album` where AlbumName='".$i."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
         { 
            while($row = mysqli_fetch_assoc($result))
            {
               $ID = $row['ID'];
 
            }
         }
    
    $Instertdata="INSERT INTO `gallery`(`ImageGallery`, `NameGallery`, `IDAlbum`) VALUES('$image','$name','$ID')";
       if(mysqli_query($conn,$Instertdata))
             {
           
        print "<script>alert ('Insetred') </script>";

       }
    
    else
        
           {
                       print "<script>alert (' not Insetred') </script>";

           }
    
    
    print "<script>alert ('ID'.$ID.) </script>";
}


?>
<html lang="en">

<head>

    <title> add Gallery </title>
    <link rel="stylesheet" href="addGallery.css">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <title>Drag & Drop or Browse: File Upload | Coding Zakir </title> -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
<form method="post" action="AddGallery.php" enctype="multipart/form-data">
    
    <div class="drag-area">
        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
        <header>Drag & Drop to Upload File</header>

        <button> Upload file </button>
        <input type="file" name="image" hidden>
    </div>

    <?php
  $sqlNat = "SELECT DISTINCT AlbumName FROM `album`";
  $resultNat = mysqli_query($conn, $sqlNat);
    // echo "<div class='type';><select name='type'>";
  echo "<div class='custom-select' style=width:300px;><select name='AName'><br>";

  while ($row = $resultNat->fetch_assoc()){
    echo '<option value="'.$row["AlbumName"].'">'.$row["AlbumName"].'</option>';
    echo $row['AlbumName']."<br>";
}
echo "</select>";
        //<div class="custom-select" style="width:300px;">

    ?>
   
<div class="type">
        <label for="name"> Enter Image name: </label> <br><br>
        <input class="label" type="text" id="name" name="name">

    </div>
    
    <h1 class="add "> Add Gallerys </h1>
        <br> <br> <br> <br>

        <input type="submit" name="submit" value="submit"  class="next">
    
    </form>

    
    
        
    
    

    <form>
    </form>

    <script>
    //selecting all required elements
    const dropArea = document.querySelector(".drag-area"),
        dragText = dropArea.querySelector("header"),
        button = dropArea.querySelector("button"),
        input = dropArea.querySelector("input");
    let file; //this is a global variable and we'll use it inside multiple functions

    button.onclick = () => {
        input.click(); //if user click on the button then the input also clicked
    }

    input.addEventListener("change", function() {
        //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        file = this.files[0];
        dropArea.classList.add("active");
        showFile(); //calling function
    });


    //If user Drag File Over DropArea
    dropArea.addEventListener("dragover", (event) => {
        event.preventDefault(); //preventing from default behaviour
        dropArea.classList.add("active");
        dragText.textContent = "Release to Upload File";
    });

    //If user leave dragged File from DropArea
    dropArea.addEventListener("dragleave", () => {
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
    });

    //If user drop File on DropArea
    dropArea.addEventListener("drop", (event) => {
        event.preventDefault(); //preventing from default behaviour
        //getting user select file and [0] this means if user select multiple files then we'll select only the first one
        file = event.dataTransfer.files[0];
        showFile(); //calling function
    });

    function showFile() {
        let fileType = file.type; //getting selected file type
        let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
        if (validExtensions.includes(fileType)) { //if user selected file is an image file
            let fileReader = new FileReader(); //creating new FileReader object
            fileReader.onload = () => {
                let fileURL = fileReader.result; //passing user file source in fileURL variable
                let imgTag =
                    `<img src="${fileURL}" alt="">`; //creating an img tag and passing user selected file source inside src attribute
                dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
            }
            fileReader.readAsDataURL(file);
        } else {
            alert("This is not an Image File!");
            dropArea.classList.remove("active");
            dragText.textContent = "Drag & Drop to Upload File";
        }
    }
    </script>


    <script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (i = 0; i < sl; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                arrNo.push(i)
            } else {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) {
            if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
    </script>

</body>

</html>