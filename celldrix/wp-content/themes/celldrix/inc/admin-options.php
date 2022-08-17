<?php

/**

 * Sample implementation of the Custom admin options.

 *

 * https://www.sitepoint.com/create-a-wordpress-theme-settings-page-with-the-settings-api/

 */



function add_theme_menu_item()

{

    add_menu_page("Site Information", "Site Information", "manage_options", "site-information", "theme_settings_page", null, 99);

}



add_action("admin_menu", "add_theme_menu_item");



function theme_settings_page()

{

    ?>

        <div class="wrap">

            <h1>Site Information</h1>

            <?php settings_errors(); ?>

            <form method="post" action="options.php" enctype="multipart/form-data">

                <?php

                    settings_fields("section");

                    do_settings_sections("site-information");      

                    submit_button(); 

                ?>          

            </form>

        </div>

    <?php

}

/* Site Title */

function display_title()

{

    ?>

        <input type="title" name="title" id="title" class="regular-text" value="<?php echo get_option('title'); ?>" />

        <p class="description">Website Title</p>

    <?php

}


/* Main Logo */

function logo_display()

{

    ?>

        <input type="file" name="logo" /><br />

        <input type="hidden" value="<?php echo get_option('logo'); ?>" height="96">

        <img src="<?php echo get_option('logo'); ?>" height="96" />

   <?php

}



function handle_logo_upload()

{   

    if(!empty($_FILES["logo"]["tmp_name"]))

    {

        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));

        $temp = $urls["url"];

        return $temp;   

    }

    else

    {

        return get_option('logo');

    }

}

/* Facebook URL */

function display_Facebook_element()

{

    ?>

        <input type="text" name="facebook_url" id="facebook_url" class="regular-text" value="<?php echo get_option('facebook_url'); ?>" />

        <p class="description">Enter your <a href="https://facebook.com">Facebook</a> URL e.g. https://www.facebook.com/104560124403688998123/</p>

    <?php

}

/* Twitter URL */

function display_Twitter_element()

{

    ?>

        <input type="text" name="twitter_url" id="twitter_url" class="regular-text" value="<?php echo get_option('twitter_url'); ?>" />

        <p class="description">Enter your <a href="https://twitter.com">Twitter</a> URL e.g. https://www.twitter.com/104560124403688998123/</p>

    <?php

}

/* Google+ URL */

function display_Google_element()

{

    ?>

        <input type="text" name="google_url" id="google_url" class="regular-text" value="<?php echo get_option('google_url'); ?>" />

        <p class="description">Enter your <a href="https://google.com">Google</a> URL e.g. https://www.google.com/104560124403688998123/</p>

    <?php

}



/* Pinterest URL */

function display_Pinterest_element()

{

    ?>

        <input type="text" name="pinterest_url" id="pinterest_url" class="regular-text" value="<?php echo get_option('pinterest_url'); ?>" />

        <p class="description">Enter your <a href="https://pinterest.com">Pinterest</a> URL e.g. https://www.pinterest.com/104560124403688998123/</p>

    <?php

}



/* Tumblr URL */

function display_tumblr_element()

{

    ?>

        <input type="text" name="tumblr_url" id="tumblr_url" class="regular-text" value="<?php echo get_option('tumblr_url'); ?>" />

        <p class="description">Enter your <a href="https://tumblr.com">tumblr</a> URL e.g. https://www.tumblr.com/104560124403688998123/</p>

    <?php

}

/* Dribbble URL */

function display_dribbble_element()

{

    ?>

        <input type="text" name="dribbble_url" id="dribbble_url" class="regular-text" value="<?php echo get_option('dribbble_url'); ?>" />

        <p class="description">Enter your <a href="https://dribbble.com">Dribbble</a> URL e.g. https://www.dribbble.com/104560124403688998123/</p>

    <?php

}

/* RSS URL */

function display_rss_element()

{

    ?>

        <input type="text" name="rss_url" id="rss_url" class="regular-text" value="<?php echo get_option('rss_url'); ?>" />

        <p class="description">Enter your <a href="https://rss.com">RSS</a> URL e.g. https://www.rss.com/104560124403688998123/</p>

    <?php

}

/* Vimeo URL */

function display_vimeo_element()

{

    ?>

        <input type="text" name="vimeo_url" id="vimeo_url" class="regular-text" value="<?php echo get_option('vimeo_url'); ?>" />

        <p class="description">Enter your <a href="https://vimeo.com">Vimeo</a> URL e.g. https://www.vimeo.com/104560124403688998123/</p>

    <?php

}

/* Footer Logo */

function footer_logo_display()

{

    ?>

        <input type="file" name="footer_logo" /><br />

        <input type="hidden" value="<?php echo get_option('footer_logo'); ?>" height="96">

        <img src="<?php echo get_option('footer_logo'); ?>" height="96" />

   <?php

}



function handle_footer_logo_upload()

{   

    if(!empty($_FILES["footer_logo"]["tmp_name"]))

    {

        $urls = wp_handle_upload($_FILES["footer_logo"], array('test_form' => FALSE));

        $temp_footer = $urls["url"];

        return $temp_footer;   

    }

    else

    {

        return get_option('footer_logo');

    }

}
// Celldrix Contact Massage
function display_contact_elements()

{

    ?>

        <textarea name="contact" id="contact" rows="3" cols="48"><?php echo get_option('contact'); ?></textarea>

        <p class="description">Celldrix Contact</p>

    <?php

}

// Celldrix Details
function display_details_elements()

{

    ?>

        <textarea name="details" id="details" rows="3" cols="48"><?php echo get_option('details'); ?></textarea>

        <p class="description">Celldrix Details</p>

    <?php

}

// Celldrix Address
function display_address_elements()

{

    ?>

        <textarea name="address" id="address" rows="3" cols="48"><?php echo get_option('address'); ?></textarea>

        <p class="description">Celldrix Address</p>

    <?php

}


/* Email Id */

function display_email()

{

    ?>

        <input type="email" name="email" id="email" class="regular-text" value="<?php echo get_option('email'); ?>" />

        <p class="description">Enter your Email</p>

    <?php

}

// Consult number

function display_consult_number()

{

    ?>

        <input type="text" name="consult_number" id="consult_number" class="regular-text" value="<?php echo get_option('consult_number'); ?>" />

        <p class="description">Enter Consult Number</p>

    <?php

}

//copyright

// Consult number

function display_copyright_number()

{

    ?>

        <input type="text" name="copyright" id="copyright" class="regular-text" value="<?php echo get_option('copyright'); ?>" />

        <p class="description">Enter Copyright Details</p>

    <?php

}






























function display_theme_panel_fields()

{

    add_settings_section("section", "Social / Contact Settings", null, "site-information");

    add_settings_field("title", "Website Title", "display_title", "site-information", "section");

    add_settings_field("logo", "Logo", "logo_display", "site-information", "section");

    add_settings_field("facebook_url", "Our Facebook", "display_Facebook_element", "site-information", "section");

    add_settings_field("twitter_url", "Our Twitter", "display_Twitter_element", "site-information", "section");

    add_settings_field("google_url", "Our Google", "display_Google_element", "site-information", "section");    

    add_settings_field("pinterest_url", "Our Pinterest", "display_Pinterest_element", "site-information", "section");

    add_settings_field("tumblr_url", "Our tumblr", "display_tumblr_element", "site-information", "section");

    add_settings_field("dribbble_url", "Our Dribbble", "display_dribbble_element", "site-information", "section");

    add_settings_field("rss_url", "Our RSS", "display_rss_element", "site-information", "section");

    add_settings_field("vimeo_url", "Our vimeo", "display_vimeo_element", "site-information", "section");

    add_settings_field("footer_logo", "Footer Logo", "footer_logo_display", "site-information", "section");

    add_settings_field("contact", "Contact Details", "display_contact_elements", "site-information", "section");

    add_settings_field("details", "Our Details", "display_details_elements", "site-information", "section");

    add_settings_field("address", "Our Address", "display_address_elements", "site-information", "section");

    add_settings_field("email", "Email Id", "display_email", "site-information", "section");

    add_settings_field("consult_number", "Consult Number", "display_consult_number", "site-information", "section");

    add_settings_field("copyright", "Copyright Details", "display_copyright_number", "site-information", "section");


    





    

    
    


    

    


    





    



    

    register_setting("section", "title");

    register_setting("section", "logo", "handle_logo_upload");

    register_setting("section", "facebook_url");

    register_setting("section", "twitter_url");

    register_setting("section", "google_url");

    register_setting("section", "pinterest_url");

    register_setting("section", "tumblr_url");

    register_setting("section", "dribbble_url");

    register_setting("section", "rss_url");

    register_setting("section", "vimeo_url");

    register_setting("section", "footer_logo", "handle_footer_logo_upload");

    register_setting("section", "contact");

    register_setting("section", "details");

    register_setting("section", "address");

    register_setting("section", "email");

    register_setting("section", "consult_number");

    register_setting("section", "copyright");





   

}



add_action("admin_init", "display_theme_panel_fields");