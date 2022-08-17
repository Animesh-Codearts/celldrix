<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage celldrix

 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

?>

<div class="service_details">
  <div class="container">
    <div class="ser_detail_box">
      <div class="img_box_ser_details"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></div>
      <div class="cellexir_text_section">
        <h2><span><?php echo get_the_title(); ?></span></h2>
       <?php echo get_the_content(); ?>
      </div>
    </div>  
  </div>
</div>


<?php
endwhile; // End of the loop.

get_footer();
