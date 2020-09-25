<?php include('server.php') ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="Services web design">
		<meta cname="keywords" content="armut, web design, Services, professional web design">
		<meta name="author" content="Kuzey Cetin">
		<title>Widget | My Account</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/project/Website%20Project/css/style.css">
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
		<section>
			  <form method="post" action="myaccount.php">
			  	<?php include('errors.php'); ?>
			  	<div class="loginput">
			  		<label>Username</label>
			  		<input type="text" name="username" >
			  	</div>
			  	<div class="loginput">
			  		<label>Password</label>
			  		<input type="password" name="password">
			  	</div>
			  	<div class="loginput">
			  		<button type="submit" class="loginbtn" name="login_user">Login</button>
			  	</div>
			  	<p>
			  		Not yet a member? <a href="register.php">Sign up</a>
			  	</p>
			  </form>
		</section>

		<section id="mainsubs">
			<div class="col">
			<ul class="price-box">
				<li class="headercol">Simple</li>
				<li class="emph"><strong>$5.99</strong> / Month</li>
				<li><strong>5</strong> Clients</li>
				<li><strong>24/7</strong> support</li>
				<li><strong>8.0%</strong> Additional fees</li>
				<li><strong>-</strong></li>
				<li><strong>-</strong></li>
				<li class="emph"><a href="register1.php" class="sign-button">Sign Up</a></li>
			</ul>
		</div>

		<div class="col">
			<ul class="price-box best">
				<li class="headercol-green">Standard</li>
				<li class="emph"><strong>$15.99</strong> / Month</li>
				<li><strong>20</strong> Clients</li>
				<li><strong>24/7</strong> support</li>
				<li><strong>5.0%</strong> Additional fees</li>
				<li><strong>Professional</strong> reports</li>
				<li><strong>-</strong></li>
				<li class="emph"><a href="register1.php" class="sign-button">Sign Up</a></li>
			</ul>
		</div>

		<div class="col">
			<ul class="price-box">
				<li class="headercol">Super</li>
				<li class="emph"><strong>$35.99</strong> / Month</li>
				<li><strong>Unlimited</strong> Clients</li>
				<li><strong>24/7</strong> support</li>
				<li><strong>2.0%</strong> Additional fees</li>
				<li><strong>Professional</strong> reports</li>
				<li><strong>Personalized</strong> content recommendations</li>
				<li class="emph"><a href="register1.php" class="sign-button">Sign Up</a></li>
			</ul>
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