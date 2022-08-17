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

<?php /* Start the Loop */
while ( have_posts() ) :
  the_post(); ?>



<!--SERVICE DETAILS INNER STARTS-->
<div class="service_details">
  <div class="container">
    <div class="ser_detail_box">
      <div class="img_box_ser_details"><img src="<?php echo get_field('service_second_image'); ?>" alt=""></div>
      <div class="cellexir_text_section">
        <h2><span><?php echo get_the_title(); ?></span></h2>
        <?php echo get_the_content(); ?>
      </div>
    </div>  
  </div>
</div>
<?php $hero_support = get_field('support_box'); ?>
<div class="support_box" style="background: url(<?php echo get_theme_file_uri(); ?>/assets/images/banner.jpg);">
  <div class="container">
    <div class="portion_support">
      <div class="row">
      <div class="col-lg-4">
        <div class="box">
          <div class="icon_box">
            <i class="fa-solid fa-medal"></i>
          </div>
          <div class="icon_text">
            <h5><?php echo $hero_support['a_title_1']; ?></h5>
            <p><?php echo $hero_support['a_description_1']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="box">
          <div class="icon_box">
            <i class="fa-solid fa-headset"></i>
          </div>
          <div class="icon_text">
            <h5><?php echo $hero_support['a_title_2']; ?></h5>
            <p><?php echo $hero_support['a_description_2']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="box">
          <div class="icon_box">
            <i class="fa-solid fa-medal"></i>
          </div>
          <div class="icon_text">
            <h5><?php echo $hero_support['a_title_3']; ?></h5>
            <p><?php echo $hero_support['a_description_3']; ?></p>
          </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>
<?php $hero_work = get_field('work_section'); ?>
<div class="best_work_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="work_img">
          <img src="<?php echo $hero_work['work_image']; ?>" alt="">
        </div>  
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="work_text">
          <h4><span><?php echo $hero_work['work_title']; ?></span></h4>
          <?php echo $hero_work['work_details']; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!--SERVICE DETAILS INNER ENDS-->

<?php
endwhile; // End of the loop.
get_footer();