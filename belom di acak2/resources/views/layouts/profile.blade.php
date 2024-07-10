<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/organitation/sttnf_logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>LearnEd</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets1/style.css">
	<link rel="stylesheet" type="text/css" href="asset_landingpage/stylepro.css">
	<script type="text/javascript" src="asset_landingpage/script.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="images/organitation/sttnf_logo.png" alt="logo"></div>
			<ul>
				<li><a href="/" href="">Home</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#services_section">Services</a></li>
				<li>
					<a href="#profil">Profil</a>
					<ul class="sub-menu">
						<li><a href="/profileTI">Profil Dosen Teknik Informatika</a></li>
						<li><a href="/profileSI">Profil Dosen Sistem Informasi</a></li>
						<li><a href="/profileBD">Profil Dosen Bisnis Digital</a></li>
					</ul>
				</li>
				<li>
					<a href="#program studi">Program Studi</a>
					<ul class="sub-menu">
						<li><a href="/programTI">Teknik Informatika</a></li>
						<li><a href="/programSI">Sistem Informasi</a></li>
						<li><a href="/programBD">Bisnis Digital</a></li>
					</ul>
				</li>

			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="images/icon/search.png" alt="search" onclick=slide()></div>
			<a class="get-started" href="/login">Get Started</a>
			<img src="images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">

			<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="images/icon/close.png" alt=""></div>
			<div class="user">
				<img src="images/creator/roshan.jpeg" alt="Username">
				<p>Kelompok 2</p>
			</div>
			<ul>
				<li><a href="/" href="">Home</a></li>
				<li><a href="#portfolio_section">Portfolio</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="/profilTI">Profil</a></li>
				<li><a href="/programTI">Program Studi</a></li>
			</ul>
		</div>
		</nav>
   @yield('content')
   <footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="images/organitation/logo-sttnf-putih.png"style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2024 Created By Kelompok 2 All Rights Reserved.</p>
				<br><p><img src="images/icon/location.png"> Sekolah Tinggi Terpadu Nurul Fikri<br>Kampus A : Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat.</p><br>
				<p><img src="images/icon/phone.png">Hotline: 021-786.3191<br><img src="images/icon/phone.png">Whatsapp: 0857.1624.3174<br><img src="images/icon/mail.png">&nbsp; info@nurulfikri.ac.id</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
	<script>
		// Optional: Toggle sub-menu on click (instead of hover)
		document.addEventListener('DOMContentLoaded', function() {
			var profilLink = document.querySelector('nav ul li a[href="#profil"]');
			var subMenu = profilLink.nextElementSibling;
			
			profilLink.addEventListener('click', function(event) {
				event.preventDefault(); // Prevent default link behavior
				subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
			});

			// Hide sub-menu when clicking outside of it
			document.addEventListener('click', function(event) {
				if (!profilLink.contains(event.target) && !subMenu.contains(event.target)) {
					subMenu.style.display = 'none';
				}
			});
		});
	</script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="assets1/profile.js"></script>
