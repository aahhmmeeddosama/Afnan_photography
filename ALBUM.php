<?php include 'Main_Nav.php';?>
<html>
<title> PORTOFLIO </title>

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
    <h1 class="tit"> Albums </h1>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Weddings.php">
                <img src="imagesGallery/wed.jpg" width="400" height="300">
            </a>
            <div class="desc"> Weddings </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Engagments.php">
                <img src="imagesGallery/eng.jpg" width="400" height="300">
            </a>
            <div class="desc"> Engagements </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="birth.php">
                <img src="imagesGallery/bbirth.jpg" width="400" height="300">
            </a>
            <div class="desc"> Birthdays </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="grad.php">
                <img src="imagesGallery/grad.jpg" width="400" height="300">
            </a>
            <div class="desc"> Graduations </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Casual.php">
                <img src="imagesGallery/CCasual.jpg" width="400" height="300">
            </a>
            <div class="desc"> Casual </div>
        </div>
    </div>

    <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="Other.php">
                <img src="imagesGallery/other.jpg" width="400" height="300">
            </a>
            <div class="desc"> Other </div>
        </div>
    </div>
</body>
</html>