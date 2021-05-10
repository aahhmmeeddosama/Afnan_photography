<?php include 'Main_Nav.php';?>
<html>
<title> Weddings' gallery </title>

    <head>
        <link rel="stylesheet" type="text/css" href="navbar.css">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="shortcut icon" href="C:\Users\Seif\Desktop\LB_Editedb.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>

    <style>
   :root{
    --primary-color:white;
    --secander:#00539C;
}
.dark-theme{
    --primary-color:black;
    --secander:white;
}

body {
    border: 100px solid var(--primary-color);
}

.tit {
    text-align: center;
    color: var(--secander);
}

    
    div.gallery {
        border: 2px solid #ccc;
    }

    div.gallery:hover {
        border: 2px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    .gallery {
        background-color: white;
        justify-content: left;
    }

    .responsive {
        align-items: left;
        justify-content: left;
        padding: 3 6px;
        float: left;
        width: 24.99999%;
    }

    div.desc {
        padding: 2px;
        background: #cac1c1;
        text-align: center;
        margin-top: 1px;
    }

    * {
        box-sizing: border-box;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }
    </style>

<body>
    <h1 class="tit"> Weddings </h1>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Wed1.php">
                <img src="imagesGallery/w6.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="wed2.php">
                <img src="imagesGallery/w5.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="wed3.php">
                <img src="imagesGallery/w3.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Wed4.php">
                <img src="imagesGallery/w4.jpg" width="400" height="300">
            </a>
            <div class="desc"> Album, press to open </div>
        </div>
    </div>

    


</body>

</html>