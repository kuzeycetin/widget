<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<script defer src=https://use.fontawesome.com/releases/v5.0.6/js/all.js></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Services web design">
		<meta cname="keywords" content="armut, web design, Services, professional web design">
		<meta name="author" content="Kuzey Cetin">
		<title>Widget | Welcome</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<!-- <i class="fas fa-search"></i> arama motoru ikonu -->
	</head>
	<body>
		<header>
			<div class="container">
				<div id="branding">
					<nav class="navbar">
	<span class="open-slide">
		<a href="#" onclick="openSlideMenu()">
			<svg width="25" height="12">
				<path d="M0,1 25,1" stroke="#e8491d"
				stroke-width="2"/>	
				<path d="M0,6 25,6" stroke="#e8491d"
				stroke-width="2"/>
				<path d="M0,11 25,11" stroke="#e8491d"
				stroke-width="2"/>
			</svg>	
		</a>
	</span>

	</nav>
	<div id="side-menu" class="side-nav">
		<a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
		<a href="indexlog.php">Home</a>
		<a href="renderservices.php">Services</a>
		<a href="myaccount.php">My Account</a>
	</div>
				</div>
				<nav>
					<ul>
						<?php  if (isset($_SESSION['username'])) : ?>
						<!--
						<li class="current" id="hidden"><a href="index.php">Home</a></li>
						<li id="hidden"><a href="renderservices.php">Render Services</a></li> -->
						<li><a href="indexlog.php?logout='1'" style="color: red;">logout</a></li>
			            <?php else : ?>
						<li><a href="myaccount.php">My account</a></li>
					</ul>
				</nav>
			</div>
			<?php endif ?>
		</header>

		<section id="showcase">
			<div class="container">
				<img src="./img/logo.png"> <!-- logomuz buraya gelicek -->
			</div>
		</section>

		<section>
			<div class="headersb">
				<form action="http://localhost/project/Website Project/action.php" method="post">
					
					<div class="form-box"></div>
					<input class="search-field" name="search" type="text" placeholder="Home to Home Shipping..."/>

					<button	class="search-btn1" type="submit" name="submit">Search</button>

				</form>
			</div>
		</section>


		<section id="boxes">
			<div class="container">
				<div class="box">
					<img src="./img/hizmet.png">
					<h3>Get High Quality Service</h3>
					<p>According to the real customer opinion that the service providers you received in their previous works, you make the decision.</p>
				</div>
				<div class="boxk">
					<img src="./img/kurir.png">
					<h3 id="h3kurir">Fast Delivery</h3>
					<p>Don't try to shop around for the service you are looking for or search for references from their acquaintances. The bids will come to your pocket and stay with you, your loved ones of the time.</p>
				</div>
				<div class="box">
					<img src="./img/main logo task.png">
					<h3>Render Service</h3>
					<p>Reach more customers, earn more.</p>
				</div>
			</div>	
		</section>

		<!-- <section id="newsletter">
			<div class="search-box">
				<input class="search-txt" type="text" name="" placeholder="Evden Eve Nakliyat..">
				<a class="search-btn" href="#">
					<i class="fas fa-search"></i>	
				</a>
			</div>
		</section> --> 

		<footer>
			<div class="footer-container">
				<div class="left-col">
					<img src="./img/logo.png" alt="" class="logo">
					<div class="social-media">
						<a href="https://en-gb.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
						<a href="https://twitter.com/login/"><i class="fab fa-twitter"></i></a>
						<a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
						<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
						<a href="https://www.linkedin.com/uas/login"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<p class="rights-text">Services website, Copyright &copy; 2020</p>
				</div>
				<div class="mid-col">
					<ul class="ulf">
						<li>About Us</li>
						<li>Priority Rules</li>
						<li>Privacy Notice</li>
						<li>Conditions Of Use</li>
						<li>FAQ</li>
						<li>Contact</li>
					</ul>
				</div>
				<div class="rigth-col">
					<h2>Our News & Updates</h2>
					<div class="borderf"></div>
					<p>Enter Your Email to get our news and updates.</p>
					<form action="" class="newsletter-form">
						<input type="text" name="" class="txtb" placeholder="Enter Yout Email">
						<input type="submit" class="btnf" name="" value="submit">
					</form>
				</div>
			</div>
		</footer>


		<script>
			function openSlideMenu(){
				document.getElementById('side-menu').style.width = '250px' ;
			}

			function closeSlideMenu(){
				document.getElementById('side-menu').style.width = '0' ;
			}
		</script>

	</body>
</html>


