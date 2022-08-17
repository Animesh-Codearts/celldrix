<?php
/**

 * Template Name: Contact Us

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage celldrix

 */
get_header(); ?>    
    <!--conatct_page_starts-->

    <div class="conatct_page">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="contact_box">
                      <div class="img_icon">
                          <img src="<?php echo get_field('conatct_icon_1'); ?>" alt="">
                      </div>
                      <h3><?php echo get_field('contact_title_1'); ?></h3>
                      <h6><a href="tel:<?php echo get_option('consult_number'); ?>"><?php echo get_option('consult_number'); ?></a></h6>
                  </div>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="contact_box">
                      <div class="img_icon">
                          <img src="<?php echo get_field('conatct_icon_2'); ?>" alt="">
                      </div>
                      <h3><?php echo get_field('contact_title_2'); ?></h3>
                      <h6><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></h6>
                  </div>
              </div>
              <div class="col-sm-12 col-md-4 col-lg-4">
                  <div class="contact_box">
                      <div class="img_icon">
                          <img src="<?php echo get_field('conatct_icon_3'); ?>" alt="">
                      </div>
                      <h3><?php echo get_field('conatct_title_3'); ?></h3>
                      <h6><?php echo get_option('address'); ?></h6>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--conatct_page_ends-->
  
  <!--contact_form_starts-->
  <div class="contact_form_img">
      <img src="images/banner.jpg" alt="">
  </div>
  <div class="contact_form">
      <div class="container">
        <div class="text_head">
          <h2><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/white_before.png" alt="">Do you have a need? <span class="br_text">contact us</span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/white_after.png" alt=""></span></h2>
        </div>  
          <div class="form_box">
          	<?php 
             $hero_form= get_field('contact_form');
             echo do_shortcode($hero_form);
            ?>
          </div>
      </div>
  </div>
  <!--contact_form_ends-->
  
  <!--map_section_starts-->
  <div class="map_section">
    <?php echo $map = get_field('map_link'); ?>
  </div>
  <!--map_section_ends-->


<?php
get_footer();