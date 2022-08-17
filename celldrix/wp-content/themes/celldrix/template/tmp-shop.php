<?php
/**

 * Template Name: Shop

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post

 *

 * @package WordPress

 * @subpackage celldrix

 */
get_header(); ?>



<!--SERVICE INNER STARTS-->
<div class="service_inner">
  <div class="container">
    <div class="product_contain">
      <div class="text_head">
        <h2><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/before_three_line.png" alt=""><?php echo get_field('shop_title'); ?><img src="<?php echo get_theme_file_uri(); ?>/assets/images/after_three_line.png" alt=""></span></h2>
      </div>
      <div class="slide_section">
        <div class="row">
          <?php
                    $args = array(
                     'numberposts' => -1,
                     'offset' => 0,
                     'orderby' => 'post_date',
                     'order' => 'ASC',
                     'post_type' => 'cpt_product',
                     'post_status' => 'publish',
                     'suppress_filters' => true
                    );
                    $banners = wp_get_recent_posts( $args, ARRAY_A );
                    foreach ( $banners as $banner ) {



                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $banner[ 'ID' ] ), 'single-post-thumbnail' );
                       // print_r($banner);

            ?>

            <div class="col-lg-4 col-sm-6">
              <div class="product_box">
                <h3><a href="<?php echo get_the_permalink($banner['ID']); ?>"><?php echo $banner[ 'post_title' ] ; ?></a></h3>
                <div class="img_box">
                  <img src="<?php echo $image[0]; ?>" alt=""/>
                </div>
                <dv class="para">
                  <p><?php
                      $post = get_post($banner); 
                      $content = apply_filters('the_content', $post->post_content);
                      echo $text= wp_trim_words($content, $num_words = 20 );
                    ?></p>
                </dv>
                <span class="btn_inr_serice">
                  <a href="<?php echo get_the_permalink($banner['ID']); ?>"><span>Read More</span></a>
                </span>
              </div>     
            </div>

            <?php
                 }
            ?>
          </div>
      </div>
    </div>
  </div>
</div>
<!--SERVICE INNER ENDS-->


<!--why_shoose_us_section_inner_starts-->
<!-- <?php $hero_chooseus = get_field('choose_us'); ?>
<div class="why_shoose_us_section">
  <div class="container">
    <div class="text_head">
      <h2><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/before_three_line.png" alt=""><?php echo $hero_chooseus['choose_us_title']; ?><img src="<?php echo get_theme_file_uri(); ?>/assets/images/after_three_line.png" alt=""></span></h2>
    </div>
      <div class="rai_box_section">
          <div class="carousel-wrap">
              <div class="owl-carousel owl-theme whyussection">
                 <?php for($i=1; $i<=4; $i++) { ?>
                  <div class="item">
                      <div class="rai_box_slide">
                          <div class="icon_box">
                              <img src="<?php echo $hero_chooseus['image_'.$i]; ?>" alt="">
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
                          <h3><?php echo $hero_chooseus['title_'.$i]; ?></h3>
                          <p><?php echo $hero_chooseus['detail_'.$i]; ?></p>
                      </div>    
                  </div>
                 <?php } ?>
          </div>
      </div>
  </div>
</div> -->
<!--why_shoose_us_section_inner_ends-->


<?php
get_footer();