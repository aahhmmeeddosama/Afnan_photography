<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Wedding 4 </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    /* background: #000;  */
    height: 100vh
}

.container {
    width: 1500px;
    display: flex;
    justify-content: space-between;
}

.container img {
    max-width: 300px;
    transform-origin: center;
    transform: perspective(800px) rotateY(30deg);
    transition: .10s;
    -webkit-box-reflect: below 2px linear-gradient(transparent, transparent, #0006)
}

.container:hover img {
    opacity: .1
}

.container img:hover {
    transform: perspective(800px) rotateY(0deg);
    opacity: 1
}
</style>

<body>
    <div class="container">
        <img onmouseover="preview.src=img1.src" name="img1" src="imagesGallery/11w4.jpg" alt="" />
        <img onmouseover="preview.src=img2.src" name="img2" src="imagesGallery/22w4.jpg" alt="" />
        <img onmouseover="preview.src=img3.src" name="img3" src="imagesGallery/33w4.jpg" alt="" />
        <img onmouseover="preview.src=img4.src" name="img4" src="imagesGallery/44w4.jpg" alt="" />
        <img onmouseover="preview.src=img5.src" name="img5" src="imagesGallery/55w4.jpg" alt="" />
        <img onmouseover="preview.src=img6.src" name="img6" src="imagesGallery/66w4.jpg" alt="" />
        <img onmouseover="preview.src=img7.src" name="img7" src="imagesGallery/77w4.jpg" alt="" />
    </div>
</body>

</html>