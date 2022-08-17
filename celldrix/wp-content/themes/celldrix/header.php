<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage celldrix
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?><?php celldrix_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="<?php bloginfo( 'html_type' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_option('title'); ?></title>
    <link rel="icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/fav.png"/>

    <!--bootstrap_starts-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--OwlCarousel_starts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <!--font_awesome_starts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--google_fonts_starts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=NTR&family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

  <div class="menu_ovarlay" id="menu_ovarlay" onclick="mobile_menu_close()" ></div>

    <!--HEADER STARTS-->
    <div class="top_header_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="form_sec_head">
              <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search_form">
                  <input type="text" class ="field" name="s" id="searchInput" onkeyup="fetchResults()" placeholder="<?php esc_attr_e( 'Search' ); ?>" />
                  <input type="hidden" name="search-type" value="posts" />
                  <?php if('any' != $post_type) { ?>
                     <input type="hidden" name="post_type" value="<?php echo esc_attr($post_type); ?>">

                  <?php } ?>
                  <div id="datafetch"></div>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="logo_header">
              <a href="<?php echo site_url();?>"><img src="<?php echo get_option('logo'); ?>" alt=""></a>
            </div>

          </div>
          <div class="col-lg-3">
            <ul class="social_header">
              <li><a href="<?php echo get_option('facebook_url'); ?>" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="<?php echo get_option('twitter_url'); ?>" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
              <li><a href="<?php echo get_option('google_url'); ?>" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
              <li><a href="<?php echo get_option('pinterest_url'); ?>" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a></li>
              <li><a href="<?php echo get_option('tumblr_url'); ?>" target="_blank"><i class="fa-brands fa-tumblr"></i></a></li>
            </ul>
          </div>
        </div>  
      </div>
    </div>

    <div class="header_navs">
      <div class="container">
        <div class="nav_full">
          <nav class="navbar navbar-expand-lg navbar-light bg-light mobile-menu">  
                <?php 

                wp_nav_menu( array(
                         'menu'              => "Main_menu",
                         'menu_class'        => "navbar-nav me-auto mb-2 mb-lg-0",
                         'container_class'   => '',
                        ) );
                ?>            

              <span class="btn_nav">
                <a class="nav_contact" href="http://localhost/celldrix/contact-us/">CONTACT US NOW</a>   
              </span>
          </nav>
        </div>
      </div>
    </div>

  <?php 
  if( 'post' == get_post_type() || 'cpt_product' == get_post_type() )
    { ?>
      <div class="inner_banner" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/inner_banner.jpg);">
        <div class="container">
          <div class="inner_banner_text">
              <?php
                  if('post' == get_post_type())
                    {
                      echo "<h1>Our Blogs</h1>";
                    }
                    else if('cpt_product' == get_post_type())
                    {
                      echo "<h1>Our shop</h1>";
                    }
                  ?>
            <ul class="iner_brd">
              <li><a href="<?php echo site_url(); ?>">home</a></li>
              <li><?php
                        if('post' == get_post_type())
                        {
                          echo "Blogs";
                        }
                        else if('cpt_product' == get_post_type())
                        {
                          echo "Shop";
                        }
                  ?>
              </li>
                <?php if(is_single()) { ?>
                  <li><?php echo get_the_title(); ?></li>
                <?php } ?>
            </ul>
          </div>
        </div>
      </div>
   <!--  -->
<?php } else if(!is_front_page()) { ?>
  <?php if(get_the_post_thumbnail_url()!='') {?>

<div class="inner_banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">

  <?php } else { ?>
    <div class="inner_banner" style="background-image: url(<?php echo get_theme_file_uri(); ?>/assets/images/inner_banner.jpg);">
      <?php } ?>
        <div class="container">
    <div class="inner_banner_text">
      <h1><?php echo get_the_title(); ?></h1>
      <ul class="iner_brd">
        <li><a href="<?php echo site_url(); ?>">home</a></li>
        <li><?php echo get_the_title(); ?></li>
      </ul>
    </div>
  </div>
</div>

 <?php } ?>





