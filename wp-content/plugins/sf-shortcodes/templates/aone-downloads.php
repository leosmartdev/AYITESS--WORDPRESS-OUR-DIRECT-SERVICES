<?php
/*****************************************************************************
*
*	copyright(c) - aonetheme.com - Service Finder Team
*	More Info: http://aonetheme.com/
*	Coder: Service Finder Team
*	Email: contact@aonetheme.com
*
******************************************************************************/

?>
<!-- Testimonials Inner Template-->
<?php
// var_dump(wp_get_attachment_image_src()); exit;
$title = "Download our app";
$tagline = "This is what clients have been saying after using the great service we do for clients.";
$html = '<div class="container">
            <div class = "row">
                <div class = "col-md-5 mobile-img">
                    
                </div>
                <div class = "col-md-4">
                    <div class="section-head" style="text-align: left; padding-top: 25%;">
                      <h2 style=" margin-bottom: 16px; color: #323232">'.esc_html($title).'</h2>
                      <div style="margin-bottom: 16px; width: 147px; height: 4px; background-color: #163056; border-radius: 4px;">
                      </div>
                        <p style="width: 100%; max-width: 420px; margin-left:0px; color:'.$a['tagline-color'].'; font-size: 16px; font-family: Open Sans">'.esc_html($tagline).'</p>
                    </div>
                    <div style = "padding-top: 5vh;">
                        <a class= "google-img" href="https://apps.apple.com" style="display:inline-block" target="_blank" rel="noopener noreferrer">
                        </a>
                        <a class= "apple-img" href="https://apps.apple.com" style="display:inline-block" target="_blank" rel="noopener noreferrer">
                        </a>
                    </div>
                </div>
            </div>
        </div>';
?>
<!-- Testimonials Inner Template-->
