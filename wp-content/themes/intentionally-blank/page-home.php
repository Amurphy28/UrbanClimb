<?php 

include 'header.php';

?>
<body>
<div class='bgImage'style=" background-image: url(<?php echo $url;?>images/Urban-Climb.jpg);" >
	<nav>
		<div class='hamburgerMenu'>
			<div class='hamDiv H1'></div>
			<div class='hamDiv H2'></div>
			<div class='hamDiv H3'></div>
		</div>
	</nav>
	
	<a href='' class='linkLeft'><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></a>
	<div class='mainHeading'>
		<h1>Urban Climb</h1>
		<div class='mainPageLinks'>
			<a href='join-urban-climb'>Join UC</a>
			<a href=''>UC Story</a>
			<a href=''>New to UC</a>
		</div>
	</div>
	<a href='<?php echo$pageLinks;?>join-urban-climb' class='linkRight'><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
	<footer>
		<div class='altNavLink'>
			<a href='home' class='homeLink'>Home</a>
			<a href='contact' class='contactLink'>Contact</a>
		</div>
		<div class='socialContain'>
			<div class='socialIcon'>
				<a href=''><img src='<?php echo$url;?>images/Instagram.png' alt='instagram' class='img'></a>
			</div>
			<div class='socialIcon'>
				<a href=''><img src='<?php echo$url;?>images/Twitter.png' alt='twitter' class='img alignmentPadding'></a>
			</div>
			<div class='socialIcon'>
				<a href=''><img src='<?php echo$url;?>images/Facebook.png' alt='facebook' class='img'></a>
			</div>
		</div>
	</footer>
</div>
 
</body>

<script>
	var screenHeight = $(window).height();

	var middlePos = (screenHeight/2) - 40;

	var arrows = (middlePos - 30);

	var screenWidth = $(window).width();

	var widthMiddle = screenWidth - 120;
	
	$('.bgImage').css('height',screenHeight);
	
	$('.mainHeading').css('padding-top',middlePos);

	$('.linkLeft').css('padding-top',arrows);

	$('.linkRight').css('padding-top',arrows);

	$('.mainHeading').css('width',widthMiddle);


	$( window ).resize(function() {
		var screenHeight = $(window).height();

		var middlePos = (screenHeight/2) - 40;

		var arrows = (middlePos - 30);

		var screenWidth = $(window).width();

		var widthMiddle = screenWidth - 120;
		
		$('.bgImage').css('height',screenHeight);
		
		$('.mainHeading').css('padding-top',middlePos);

		$('.linkLeft').css('padding-top',arrows);

		$('.linkRight').css('padding-top',arrows);

		$('.mainHeading').css('width',widthMiddle);

	});

</script>