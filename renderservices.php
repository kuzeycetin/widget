<?php
session_start();


if (isset($_SESSION['success']) && $_SESSION['success'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Services web design">
		<meta cname="keywords" content="armut, web design, Services, professional web design">
		<meta name="author" content="Kuzey Cetin">
		<title>Widget | Render Sevices</title>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
		<a href="index.php">Home</a>
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
			            <li>
			            	<a href="index.php?logout='1'" style="color: red;">logout</a></li>
			            <?php else : ?>
						<li><a href="myaccount.php">My account</a></li>
					</ul>
				</nav>
			</div>
			<?php endif ?>
		</header>


		<section id="main">
			<div class="container">
				<article id="main-col">
					<h1 class="page-title">Render Services</h1>
					<ul id="services">
						<li>
							<h3>Personal Trainer</h3>
							<p>A personal trainer is an individual certified to have a varying degree of knowledge of general fitness involved in exercise prescription and instruction. They motivate clients by setting goals and providing feedback and accountability to clients. Trainers also measure their client's strengths and weaknesses with fitness assessments. These fitness assessments may also be performed before and after an exercise program to measure their client's improvements in physical fitness. They should also educate their clients in many other aspects of wellness besides exercise, including general health and nutrition guidelines. It is very important that a trainer takes their time to evaluate a client's personal life outside of the gym.</p>
							<p>Pricing: $300 - $550 per month</p>
						</li>
						<li>
							<h3>Website Designer</h3>
							<p>A designer is a person who makes designs for objects. A fashion designer designs clothing, a web designer designs web pages and an automobile designer designs automobiles. In each case, the designer works with the help of a technician or engineer who understands deeper level concepts of manufacturing and engineering and the designer is also largely confined to work at a surface level.</p>
							<p>Pricing: $1,000 - $3,000</p>
						</li>
						<li>
							<h3>Architect</h3>
							<p>An architect is a person who plans, designs and oversees the construction of buildings. To practice architecture means to provide services in connection with the design of buildings and the space within the site surrounding the buildings that have human occupancy or use as their principal purpose.</p>
							<p>Pricing: $100 - $1,000</p>
						</li>
					</ul>
				</article>
				<aside id="sidebar">
					<div class="dark">
						<h3>Get A Quote</h3>
						<form class="quote">
							<div>
								<label>Name</label><br>
								<input type="text" placeholder="Name">
							</div>
							<div>
								<label>Name</label><br>
								<input type="email" placeholder="Email Address">
							</div>
							<div>
								<label>Name</label><br>
								<textarea placeholder="Message"></textarea>
							</div>
							<button class="button_1" type="submit">Send</button>
						</form>
					</div>
				</aside>
			</div>	
		</section>

		<script>
			function openSlideMenu(){
				document.getElementById('side-menu').style.width = '250px' ;
			}

			function closeSlideMenu(){
				document.getElementById('side-menu').style.width = '0' ;
			}
		</script>
		
		<script>
			function logout(){
				<?php session_start();
			    unset($_SESSION['username']);
			    unset($_SESSION['success']);
			    header('Location:server.php');
			    ?>
			}
		</script>

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
	</body>
</html>