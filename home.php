<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>

	<!-- Font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

	<!-- Custom CSS File link -->
	<link rel="stylesheet" href="css/style.css">

  	<!-- Link Swiper's CSS -->
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>

<!-- header section starts -->
<section class="header">
	<a href="home.php" class="logo">Eventful Moments</a>

	<nav class="navbar">
		<a href="home.php">home</a>
		<a href="home.php">create events</a>
		<a href="login.php">log in</a>
		<a href="register.php">sign up</a>	
		<a href="about.php">about us</a>

	</nav>
	<div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->

<!-- home section starts -->
<section class="home">
	<div class="swiper home-slider">
		<div class="swiper-wrapper">
			
			<div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
				<div class="content">
					<span>Plan. Execute. Celebrate.</span>
					<h3>Make Every Event Extraordinary</h3>
					<a href="about.php" class="btn">discover more</a>
				</div>
			</div>
			<div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
				<div class="content">
					<span>Plan. Execute. Celebrate.</span>
					<h3>Your Vision, Our Mission</h3>
					<a href="about.php" class="btn">discover more</a>
				</div>
			</div>
			<div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
				<div class="content">
					<span>Plan. Execute. Celebrate.</span>
					<h3>Events That Wow</h3>
					<a href="about.php" class="btn">discover more</a>
				</div>
			</div>

		</div>
		 <div class="swiper-button-next"></div>
  		 <div class="swiper-button-prev"></div>
	</div>
</section>
<!-- home section ends -->


<!-- footer section starts -->
<section class="footer">

	<div class="box-container">
		<div class="box">
			<h3>quick links</h3>
			<a href="home.php"><i class="fas fa-angle-right"></i>home</a>
			<a href="home.php"><i class="fas fa-angle-right"></i>create events</a>
			<a href="login.php"><i class="fas fa-angle-right"></i>log in</a>
			<a href="register.php"><i class="fas fa-angle-right"></i>sign up</a>	
			<a href="about.php"><i class="fas fa-angle-right"></i>about us</a>
		</div>
		<div class="box">
			<h3>extra links</h3>
			<a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
			<a href="#"><i class="fas fa-angle-right"></i>about us</a>
			<a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
			<a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
		</div>
		<div class="box">
			<h3>contact info</h3>
			<a href="#"><i class="fas fa-phone"></i>+424-244-4569</a>
			<a href="#"><i class="fas fa-phone"></i>+424-244-4579</a>
			<a href="#"><i class="fas fa-envelope"></i>eventmanager@gmail.com</a>
			<a href="#"><i class="fas fa-map"></i>Waterloo, ON, Canada - N2l0GL</a>
		</div>
		<div class="box">
			<h3>follow us</h3>
			<a href="#"><i class="fab fa-facebook"></i>facebook</a>
			<a href="#"><i class="fab fa-twitter"></i>twitter</a>
			<a href="#"><i class="fab fa-instagram"></i>eventfulMoments</a>
			<a href="#"><i class="fab fa-linkedin"></i>linekdin</a>
		</div>
	</div>
	<div class="credit">created by <span>Group 6</span> | all rights reserved </div>	
	
</section>
<!-- footer section ends -->

<!-- Swiper JS link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script type="text/javascript">
	var swiper = new Swiper(".home-slider", {
  	loop: true,
  	navigation: {
	    nextEl: ".swiper-button-next",
	    prevEl: ".swiper-button-prev",
  	},
	});

</script>

<!-- Custome JS File link -->
<script src="js/script.js"></script>
</body>
</html>