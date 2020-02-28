<?php
/**
 * Displays the archive section of the theme.
 *
 */
?>
catagories.php
<style>
#postsquare{
float: left;
height: 235px;
    width: 48%;
	padding-top: 3px;
  padding-right: 3px;
  padding-bottom: 3px;
  padding-left: 3px;
  padding: 10px 10px 20px 10px;
    border: 1px solid #BFBFBF;
    background-color: white;
    box-shadow: 10px 10px 5px #aaaaaa;
}
@media only screen and (max-width: 600px) {
#postsquare{
	width:96%;
}
}
@media only screen and (min-width: 600px) {
#postsquare{
	width:46%;
}
}
@media only screen and (min-width: 900px) {
#postsquare{
	width:28%;
}
}

</style>
<?php get_header(); ?>
<?php
	/**
	 * travelify_before_main_container hook
	 */
	do_action( 'travelify_before_main_container' );
?>

<div id="container">

 <?php
$category = single_term_title("", false);
$catid = get_cat_ID( $category );

    $args = array( 'category' => $catid, 'post_type' =>  'post' ); 
    $postslist = get_posts( $args );    
    foreach ($postslist as $post) :  setup_postdata($post); 
	?>
	<div id="postsquare">
	<?php
	the_post_thumbnail( 'medium' );
    ?>  
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
	</div>
    <?php endforeach; ?> 
</div><!-- #container -->

<?php
	/**
	 * travelify_after_main_container hook
	 */
	do_action( 'travelify_after_main_container' );
?>

<?php get_footer(); ?>