<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration | Widget</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Services web design">
    <meta cname="keywords" content="armut, web design, Services, professional web design">
    <meta name="author" content="Kuzey Cetin">
    <link rel="stylesheet" type="text/css" href="http://localhost/project/Website%20Project/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/project/registration/registration.css">
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
                  <li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
                  <?php else : ?>
                  <li><a href="myaccount.php">My account</a></li>
          </ul>
        </nav>
      </div>
      <?php endif ?>
    </header>

  <div class="headereg">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="loginput">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="loginput">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="loginput">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>

    <div class="loginput">
      <label>Payment Plan</label>
      <br/>
      <input type = "radio"  name = "payment"  value = "Simple" />
     Simple <br />

      <input type = "radio"  name = "payment"  value = "Standart" />
     Standart <br />

      <input type = "radio"  name = "payment"  value = "Super" />
     Super <br />
    </div>

  	<div class="loginput">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="myaccount.php">Sign in</a>
  	</p>
  </form>
  <div><br></div>
  <script>
      function openSlideMenu(){
        document.getElementById('side-menu').style.width = '250px' ;
      }

      function closeSlideMenu(){
        document.getElementById('side-menu').style.width = '0' ;
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