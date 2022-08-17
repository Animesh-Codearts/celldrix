<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage celldrix
 */

?>
<div class="contact_us_area">
<div class="footer_logo_section">
  <div class="container">
    <div class="logo_footer">
      <img src="<?php echo get_option('footer_logo'); ?>" alt="">
    </div>
    <div class="logo_text">
      <p><?php echo get_option('contact'); ?></p>
    </div>
    <span class="ftr_logo_btn">
      <a href="http://localhost/celldrix/about-us/"><span>FIND OUR MORE</span></a>
    </span>
  </div>
</div>

<div class="footer_details" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/footer_bg.jpg);">
  <div class="container">
    <div class="ftr_details_portion">
      <div class="subs_form">
        <?php dynamic_sidebar('Footer-widget'); ?>
      </div>    
      <div class="subs_text">
        <p><?php echo get_option('details'); ?></p>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="details_box">
            <h4>INFORMATION</h4>
            <ul class="footer_nav">
              <?php dynamic_sidebar('Footer-menu'); ?>
            </ul>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="details_box">
            <h4>OUR GALLERY</h4>
            <ul class="footer_gallery clearfix">
              <li><a href="#"><img src="images/ftg_1.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftg_2.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftg_3.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_4.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_5.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_6.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_7.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_8.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_9.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_10.jpg" alt=""></a></li>
              <li><a href="#"><img src="images/ftr_11.jpg" alt=""></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="details_box">
            <h4>CONTACT US</h4>
            <ul class="ftr_contact_details">
              <li><a href="<?php echo get_option('address'); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/ftr_map.png" alt=""><?php echo get_option('address'); ?></a></li>
              <li><a href="mailto:<?php echo get_option('email'); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer_mail.png" alt=""><?php echo get_option('email'); ?></a></li>
              <li><a href="tel:<?php echo get_option('consult_number'); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer_phone.png" alt=""><?php echo get_option('consult_number'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer_social">
  <div class="container">
    <ul class="social_link">
      <li><a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i><span class="icon_text">Follow on Facebook</span></a></li>
      <li><a href="<?php echo get_option('twitter_url'); ?>" target="_blank"><i class="fa-brands fa-twitter"></i><span class="icon_text">Follow on Twitter</span></a></li>
      <li><a href="<?php echo get_option('google_url'); ?>" target="_blank"><i class="fa-brands fa-pinterest-p"></i><span class="icon_text">Follow on Pinterest</span></a></li>
      <li><a href="<?php echo get_option('pinterest_url'); ?>" target="_blank"><i class="fa-brands fa-google-plus-g"></i><span class="icon_text">Follow on Google+</span></a></li>
      <li><a href="<?php echo get_option('dribbble_url'); ?>" target="_blank"><i class="fa-brands fa-dribbble"></i><span class="icon_text">Follow on Dribbble</span></a></li>
      <li><a href="<?php echo get_option('rss_url'); ?>" target="_blank"><i class="fa-solid fa-rss"></i><span class="icon_text">Follow on RSS</span></a></li>
      <li><a href="<?php echo get_option('vimeo_url'); ?>" target="_blank"><i class="fa-brands fa-vimeo-v"></i><span class="icon_text">Follow on Vimeo</span></a></li>
    </ul>
  </div>
</div>

<div class="copy_right_section">
  <p><?php echo get_option('copyright'); ?></p>
</div>
</div>
<!--CONTACT US ENDS-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<!--OwlCarousel_js_starts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 


    
<?php wp_footer(); ?>  
</body>
</html>
