<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage celldrix
 */
get_header(); ?>


<!--BANNER STARTS-->

<?php
    $hero_inner = get_field('section_enabled');
    if($hero_inner){
?>
<div class="banner_slide">
  <div class="carousel-wrap">
    <div class="owl-carousel owl-theme bannersection">
      <?php $inner_boxes= get_field('all_banners'); ?>
      <?php foreach ($inner_boxes as $eachinner) { ?>
      <div class="item">
        <div class="banner_image" style="background-image: url(<?php echo get_the_post_thumbnail_url($eachinner); ?>);">
          <div class="container">
            <div class="banner_text">
              <h1><?php echo get_field('banner_title_1', $eachinner ); ?></h1>
              <h6><?php echo get_field('banner_title_2', $eachinner ); ?></h6>
              <p><?php echo get_the_excerpt($eachinner); ?></p>
              <span class="slider_btn">
                <a href="<?php echo get_field('banner_button', $eachinner ); ?>"><span>FIND OUR MORE</span></a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <?php
           }
      ?>
    </div>
  </div>
</div>
<?php } ?>
<!--BANNER ENDS-->

<!--CELLEXIR PROMISE STARTS-->
<?php
    $hero_inner = get_field('promise_section');

    if($hero_inner['section_enabled']){
?>

<div class="cellexir_promise_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="cellexir_img_section">
          <img src="<?php echo $hero_inner['promise_image_1']; ?>" alt="" class="img_one"/>
          <img src="<?php echo $hero_inner['promise_image_2']; ?>" alt="" class="img_two"/>
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <div class="cellexir_text_section">
          <h2><span><?php echo $hero_inner['promise_title']; ?></span></h2>
          <p><?php echo $hero_inner['promise_details']; ?></p>
          <ul class="cellexir_list">
            <?php echo $hero_inner['promise_list']; ?>
          </ul>
          <span class="cellexir_btn">
            <a href="<?php echo $hero_inner['promise_button']; ?>"><span>LEARN MORE</span></a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!--CELLEXIR PROMISE ENDS-->

<!--PRODUCTS STARTS-->
<?php
    $hero_feature = get_field('featured_product');

    if($hero_feature['section_enabled']){
?>

<div class="Product_Categories_section">
    <div class="container">
      <div class="product_contain">
        <div class="text_head">
          <h2><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/before_three_line.png" alt=""><?php echo  $hero_feature['featured_product_title']; ?><img src="<?php echo get_theme_file_uri(); ?>/assets/images/after_three_line.png" alt=""></span></h2>
        </div>
        <div class="slide_section">
          <div class="carousel-wrap">
              <div class="owl-carousel owl-theme productslide">
                <?php $inner_products = $hero_feature['products']; ?>
                <?php foreach ($inner_products as $eachiproducts) { ?>

                  <div class="item">
                    <div class="product_box">
                      <h3><a href="<?php echo get_the_permalink($eachiproducts); ?>"><?php echo get_the_title($eachiproducts); ?></a></h3>
                      <div class="img_box">
                        <img src="<?php echo get_the_post_thumbnail_url($eachiproducts); ?>" alt=""/>
                      </div>
                      <dv class="para">
                        <p>
                    <?php
                      $post1 = get_post($eachiproducts); 
                      $content1 = apply_filters('the_content', $post1->post_content);
                      echo $text1= wp_trim_words($content1, $num_words = 15 );
                    ?>
                      
                    </p>
                      </dv>
                    </div>     
                  </div>
                <?php } ?>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>
<?php } ?>
<!--PRODUCTS ENDS-->

<!--TRAINING PLANS START-->
<?php
    $hero_training = get_field('training_section');
    if($hero_training['section_enabled']){
?>
<div class="training_section">
  <div class="training_curve_section">
    <div class="container">
      <div class="training_text_box">
        <h2><span><?php echo $hero_training['training_title']; ?></span></h2>
        <p><?php echo $hero_training['training_details']; ?></p>
        <span class="training_btn">
          <a href="<?php echo $hero_training['training_button']; ?>"><span>LEARN MORE</span></a>
        </span>
      </div>
    </div>
  </div>  
</div>

<?php } ?>
<!--TRAINING PLANS ENDS-->

<!--TESTIMONIAL STARTS-->
<?php
    $hero_testimonials = get_field('testimonial_section');
    if($hero_testimonials['section_enabled']){
?>
<div class="testimonial_section" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/testimonial_bg.jpg)">
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
<?php } ?>
<!--TESTIMONIAL ENDS-->

<!--BLOG SECTION STARTS-->
<?php
    $hero_blogs = get_field('blog_section');
    if($hero_blogs['section_enabled']){
?>
<div class="home_blog_section">
  <div class="container">
    <div class="blog_contain">
      <div class="text_head">
        <h2><span><img src="<?php echo get_theme_file_uri(); ?>/assets/images/before_three_line.png" alt=""><?php echo $hero_blogs['blog_title']; ?><img src="<?php echo get_theme_file_uri(); ?>/assets/images/after_three_line.png" alt=""></span></h2>
      </div>

      <div class="blog_slide_box">
        <div class="carousel-wrap">
          <div class="owl-carousel owl-theme blogslide">
      <?php $inner_blogs = $hero_blogs['blogs']; ?>
      <?php foreach ($inner_blogs as $eachblogs) { ?>

              <div class="item">
                <div class="blog_box">
                  <div class="blog_img">
                    <img src="<?php echo get_the_post_thumbnail_url($eachblogs); ?>" alt="">
                  </div>
                  <div class="blog_text">
                    <h3><a href="<?php echo get_the_permalink($eachblogs); ?>"><?php echo get_the_title($eachblogs); ?></a>
                    </h3>
                    <div class="para">
                    <?php
                      $post = get_post($eachblogs); 
                      $content = apply_filters('the_content', $post->post_content);
                    ?>
                      <p> <?php echo $text= wp_trim_words($content, $num_words = 20 ); ?></p>
                    </div>
                  </div>
                  <div class="blg_btn">
                    <a href="<?php echo get_the_permalink($eachblogs); ?>">READ MORE</a>
                  </div>
                </div>    
              </div>

      <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!--BLOG SECTION ENDS-->

<!--CONTACT US STARTS-->




<?php
get_footer();