<?php
/**
 * Displays the index section of the theme.
 *
 */
?>
index.php
<?php get_header(); ?>
<?php 
	/**
	 * travelify_before_main_container hook
	 */
	do_action( 'travelify_before_main_container' );
?>
	<div id="primary" class="content-area">
	   <main id="main" class="site-main" role="main">
	<div id="navbar" class="navbar">
		<div id="featureditem" class="featured-item">
		<a href="#">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/featured.jpg" alt="types" height="250px" width="100%">
		</a>
	</div>
		<div id="navitem" class="navitem">
		<a href="#locations">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/locations.jpg" alt="types" height="150px" width="100%">
		</a>
		</div>
		<div id="navitem" class="navitem">
		<a href="#types">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/types.jpg" alt="types" height="150px" width="100%">
		</a>
		</div>
		<div id="navitem" class="navitem">
		<a href="#info">
		<img src="<?php echo get_stylesheet_directory_uri();?>/images/info.jpg" alt="types" height="150px" width="100%">
		</a>
		</div>

	</div>
	<span class="index-catagory" id="locations">
	<h2>Locations</h2>
	<a href="?cat=3">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/vic.jpg" class="indextile" alt="victoria">
	</a>
	<a href="?cat=4">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/nsw.jpg" class="indextile" alt="new south wales">
	</a>
	<a href="category/queensland/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/qld.jpg" class="indextile" alt="queensland">
	</a>
	<a href="category/tasmania/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/tas.jpg" class="indextile" alt="tasmania">
	<div class= "clearfix">
	</a>
	</div>
	<hr>
	<span class="index-catagory" id="types">
	<h2>types</h2>
	<a href="tag/nature/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/nature.jpg" alt="nature" class="indextile">
	</a>
	<a href="tag/city/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/city.jpg" alt="city" class="indextile">
	</a>
	<a href="tag/food/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/food.jpg" alt="food" class="indextile">
	</a>
	<a href="tag/history/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/history.jpg" alt="History" class="indextile">
	</a>
	<a href="tag/aqua/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/aqua.jpg" alt="Water recreation" class="indextile">
	</a>
	<hr>
	<span class="index-catagory" id="info">
	<h2>info</h2>
	<a href="tag/food/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/accom.jpg" alt="hotel" class="indextile">
	</a>
	<a href="tag/history/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/tour.png" alt="tour" class="indextile">
	</a>
	<a href="tag/aqua/">
	<img src="<?php echo get_stylesheet_directory_uri();?>/images/transport.jpg" alt="transport" class="indextile">
	</a>

<div id="container">
	<?php
		/**
		 * travelify_main_container hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * travelify_content 10
		 */
		do_action( 'travelify_main_container' );
	?>
</div><!-- #container -->

<?php
	/**
	 * travelify_after_main_container hook
	 */
	do_action( 'travelify_after_main_container' );
?>

<?php get_footer(); ?>
