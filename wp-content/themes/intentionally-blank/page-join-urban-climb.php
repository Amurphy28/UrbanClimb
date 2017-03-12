<?php 

include 'header.php';

?>
<body>
<div class='bgImage'style=" background-image: url(<?php echo $url;?>images/Join-Urban-Climb.jpg);" >
	<nav>
		<div class='hamburgerMenu'>
			<div class='hamDiv redHam H3'></div>
			<div class='hamDiv redHam H2'></div>
			<div class='hamDiv redHam H1'></div>
		</div>
	</nav>
	<a href='home' class='linkLeft red'><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span></a>
	<div class='leftNavLinks'>
		<a href='join-urban-climb' class='redActive'>Join UC</a><br><br>
		<a href=''>UC Story</a><br><br>
		<a href=''>New to UC</a>
	</div>
	<div class='leftHeading'>
		<h1>Join Urban Climb</h1>
		<p class='extraLineHeight'>Join the team and make the climb to new heights</p>
	</div>
	<a href='' class='linkRight red'><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
	<div class='clearFloat'></div>
	

		<footer>
		<div class='altNavLink redLink'>
			<a href='home' class='homeLink'>Home</a>
			<a href='contact' class='contactLink'>Contact</a>
		</div>
		<div class='readMore' data-toggle="modal" data-target="#myModal">
			<p>Read More</p><br>
			<span class="glyphicon glyphicon-chevron-down red" aria-hidden="true"></span>
		</div>
		<div class='socialContain'>
			<div class='socialIcon'>
				<a href=''><img src='<?php echo$url;?>images/redInstagram.png' alt='instagram' class='img'></a>
			</div>
			<div class='socialIcon'>
				<a href=''><img src='<?php echo$url;?>images/redTwitter.png' alt='twitter' class='img alignmentPadding'></a>
			</div>
			<div class='socialIcon'>
				<a href=''><img src='<?php echo$url;?>images/redFacebook.png' alt='facebook' class='img'></a>
			</div>
		</div>
	</footer>
</div>
 <!-- modules -->
 <?php 
	the_post();
	query_posts( array ( 'category_name' => 'joinUrbanClimbModual' ) ); 
	while (have_posts()) : the_post();
?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   		<div class="modal-dialog modal-lg" role="document">
    		<div class="modal-content">
      			<!--<div class="modal-header">
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel"><?php the_title();?></h4>
        			<span class='date'><?php the_date('M-Y', '<p>', '</p>'); ?></span>
      			</div>-->
      			<div class="modal-body">
      				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <!--<div class='imageholder'>
                            <?php 
                                //if(has_post_thumbnail()) { 
	                               // $i = 0;
	                               // $counter ++;
	                                //$//image_src = wp_get_attachment_image_src( get_post_thumbnail_id() ); 
	                                //echo '<img src="' . $image_src[$i] . '" width="100%" />';
                            	//} 
                            ?>
                        </div>-->
                        <div class='textholder'><?php the_content();?></div>
      			</div>
      			<!--<div class="modal-footer"></div>-->
      			<?php endwhile;?>
    		</div>
  		</div>
	</div>
</body>

<script>
	var screenHeight = $(window).height();
	var middlePos = (screenHeight/2) - 100;

	var arrows = (middlePos - 30);

	var leftNav = (middlePos + 50);

	$('.bgImage').css('height',screenHeight);
	
	$('.mainHeading').css('padding-top',middlePos);

	$('.leftHeading').css('padding-top',middlePos);

	$('.leftNavLinks').css('padding-top',leftNav);

	$('.linkLeft').css('padding-top',arrows);

	$('.linkRight').css('padding-top',arrows);

	$('.hamburgerMenu').on('click touch',function(){
		$('.H2').css('width','30px');
		$('.H3').css('width','20px');
	});
</script>