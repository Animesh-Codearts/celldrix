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

?>
<div class="mision_vision">
  <div class="mision_curve_section">
    <div class="container">
      <div class="mision_text_box">
      	 <?php if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
						if(get_the_content() != '')
						{
							the_content();
						}
						else
						{
							echo "<h2><span>Content Coming Soon ...</span></h2>
							<p>See You!!</p>";
						}
					endwhile; ?>
				<?php endif; ?>
      </div>
    </div>
  </div>
  
</div>


<?php  


get_footer();
