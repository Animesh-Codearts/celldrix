<?php
/**

 * Template Name: About Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage celldrix

 */
get_header(); ?>



<!--CELLEXIR PROMISE STARTS-->
<?php $hero_promise = get_field('cellexir_promise'); ?>

<div class="cellexir_promise_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="cellexir_img_section">
          <img src="<?php echo $hero_promise['promise_image_1']; ?>" alt="" class="img_one"/>
          <img src="<?php echo $hero_promise['promise_image_2']; ?>" alt="" class="img_two"/>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="cellexir_text_section">
          <h2><span><?php echo $hero_promise['promise_title']; ?></span></h2>
          <?php echo $hero_promise['promise_details_1']; ?>
        </div>
      </div>

      <div class="col-12">
        <div class="about_inner_text">
          <?php echo $hero_promise['promise_details_2']; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!--CELLEXIR PROMISE ENDS-->

<!--TRAINING PLANS START-->
<?php $hero_mission = get_field('mission_vision'); ?>
<div class="mision_vision">
  <div class="mision_curve_section">
    <div class="container">
      <div class="mision_text_box">
        <h2><span><?php echo $hero_mission['mission_vision_title']; ?></span></h2>
        <p><?php echo $hero_mission['mission_vision_detail']; ?></p>
      </div>
    </div>
  </div>
  
</div>
<!--TRAINING PLANS ENDS-->

<!--why_shoose_us_section_inner_starts-->
<?php $hero_welcome = get_field('why_choose_us'); ?>
<div class="why_shoose_us_section">
  <div class="container">
    <div class="text_head">
      <h2><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/before_three_line.png" alt=""><?php echo $hero_welcome['choose_us_title']; ?><img src="<?php echo get_theme_file_uri(); ?>/assets/images/after_three_line.png" alt=""></span></h2>
    </div>
      <div class="rai_box_section">
          <div class="carousel-wrap">
              <div class="owl-carousel owl-theme whyussection">
              	 <?php for($i=1; $i<=4; $i++) { ?>
                  <div class="item">
                      <div class="rai_box_slide">
                          <div class="icon_box">
                              <img src="<?php echo $hero_welcome['a_image_'.$i]; ?>" alt="">
                              <div class="numbr_box">
                                  <span>
                                      <?php
                    									$num = $i;
                    									$num_padded = sprintf("%02d", $num);
                    									echo $num_padded; // returns 04
                    									?>
                                  </span>
                              </div>
                          </div>
                          <h3><?php echo $hero_welcome['a_title_'.$i]; ?></h3>
                          <p><?php echo $hero_welcome['a_description_'.$i]; ?></p>
                      </div>    
                  </div>
                 <?php } ?>
          </div>
      </div>
  </div>
</div>
<!--why_shoose_us_section_inner_ends-->

<!--TESTIMONIAL STARTS-->
<?php $hero_testimonials = get_field('testimonial_section'); ?>
<div class="testimonial_section" style="background-image: url(images/testimonial_bg.jpg)">
  <div class="container d-flex justify-content-end">
    <div class="heading_area">
      <h3><?php echo $hero_testimonials['testimonial_title_1']; ?></h3>
      <h2><?php echo $hero_testimonials['testimonial_title_2']; ?></h2>
    </div>
    <div class="main_testimonial_section d-flex justify-content-end">
      <div class="main_slide_area">
        <i></i>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
      <?php $inner_testimonials = $hero_testimonials['testimonial'];
      $j=1; 
      ?>
      <?php foreach ($inner_testimonials as $eachtestimonials) { ?>
            
            <div class="carousel-item <?php if($j == 1){ echo 'active';}?> d-flex justify-content-end">        
              <div class="slide_area">          
                <div class="item_area">
                  <img src="<?php echo get_the_post_thumbnail_url($eachtestimonials); ?>" alt="">
                  <p><?php echo get_the_excerpt($eachtestimonials); ?></p>
                  <h4><?php echo get_the_title($eachtestimonials); ?></h4>
                  <span><?php echo get_field('designation', $eachtestimonials); ?></span>
                </div>
              </div>
            </div>
            <?php 
            $j++;
            }
      ?>
         </div>
          <div class="slide_buttons_area">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev"></button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next"></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--TESTIMONIAL ENDS-->

<?php
get_footer();