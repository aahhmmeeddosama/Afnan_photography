<html>
<head>
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon"  href="Images/LB_Editedb.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<header>
	<img src="Images/LL.png" alt="Afnan Logo" id="icon2">
	<nav>	
		<li><a href='The_Main.php'><i class="fas fa-home"></i>Home</a></li>
		<li><a href='About Us.php'><i class="fas fa-info-circle"></i>About us</a></li>
		<li><a href='ALBUM.php'><i class="fas fa-images"></i>Albums</a></li>
		<li><a href='Pack.php'><i class="fas fa-table"></i>Book Now</a></li>
		<img src="Images/moon.png" alt="moon" id="icon">
	</nav>
</header>
	
	
	<div class="social-links">
		<a href="https://www.facebook.com/afnang.gharib.photography/?ti=as" target="_blank" id="facebook"><i class="fab fa-facebook"></i>Facebook</a>
		<a href="https://instagram.com/afnan.gharib.photography?igshid=agmkz7yj2w78" target="_blank" id="instgram"><i class="fab fa-instagram"></i>Instgram  </a>
		<a href="https://vm.tiktok.com/ZMeuNFDKS/" id="tiktok" target="_blank"><i class="fab fa-tiktok"></i>Tiktok</a>	
	</div>
	<script>
	var icon=document.getElementById("icon");
	icon.onclick = function(){
		document.body.classList.toggle("dark-theme");
		if(document.body.classList.contains("dark-theme")){
			icon.src="Images/sun.png";	
		}
		else{
			icon.src="Images/moon.png";	
		}
	}
</script>
</body>
</html>