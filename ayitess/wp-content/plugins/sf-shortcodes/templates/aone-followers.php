<?php
/*****************************************************************************
*
*	copyright(c) - aonetheme.com - Service Finder Team
*	More Info: http://aonetheme.com/
*	Coder: Service Finder Team
*	Email: contact@aonetheme.com
*
******************************************************************************/
$service_finder_options = get_option('service_finder_options');
$wpdb = service_finder_shortcode_global_vars('wpdb');
?>
<?php 
$title = (!empty($service_finder_options['shortcode-followers-title'])) ? esc_html($service_finder_options['shortcode-followers-title']) : '';
$content = (!empty($service_finder_options['shortcode-followers-content'])) ? wp_kses_post($service_finder_options['shortcode-followers-content']) : '';
$titlecolor = (!empty($service_finder_options['shortcode-followers-title-color'])) ? esc_html($service_finder_options['shortcode-followers-title-color']) : '';
$taglinecolor = (!empty($service_finder_options['shortcode-followers-tagline-color'])) ? esc_html($service_finder_options['shortcode-followers-tagline-color']) : '';
$dividercolor = (!empty($service_finder_options['shortcode-followers-divider-color'])) ? esc_html($service_finder_options['shortcode-followers-divider-color']) : '';

$imagevideo = (!empty($service_finder_options['shortcode-followers-image-video'])) ? esc_html($service_finder_options['shortcode-followers-image-video']) : '';
$followimageurl = (!empty($service_finder_options['shortcode-followers-image-url']['url'])) ? esc_html($service_finder_options['shortcode-followers-image-url']['url']) : '';
$videourl = (!empty($service_finder_options['shortcode-followers-youtube-url'])) ? esc_html($service_finder_options['shortcode-followers-youtube-url']) : '';
$buttontext = (!empty($service_finder_options['shortcode-followers-button-text'])) ? esc_html($service_finder_options['shortcode-followers-button-text']) : '';
$buttonlink = (!empty($service_finder_options['shortcode-followers-button-link'])) ? esc_html($service_finder_options['shortcode-followers-button-link']) : '';

$followerstextcolor = (!empty($service_finder_options['shortcode-followers-text-color'])) ? $service_finder_options['shortcode-followers-text-color'] : '';

$imgurl = (!empty($service_finder_options['follow-us-bg-image']['url'])) ? $service_finder_options['follow-us-bg-image']['url'] : '';
$bgattachment = (isset($service_finder_options['follow-us-background-attachment'])) ? esc_html($service_finder_options['follow-us-background-attachment']) : '';
$bgcolor = (!empty($service_finder_options['follow-us-bg-color'])) ? $service_finder_options['follow-us-bg-color'] : '';
$bgopacity = (!empty($service_finder_options['follow-us-bg-opacity'])) ? $service_finder_options['follow-us-bg-opacity'] : '';
$bgopacity = ($bgopacity > 0) ? $bgopacity : ''; 

$curveleftcolor = (!empty($service_finder_options['follow-us-left-curve-color'])) ? $service_finder_options['follow-us-left-curve-color'] : '';
$curverightcolor = (!empty($service_finder_options['follow-us-right-curve-color'])) ? $service_finder_options['follow-us-right-curve-color'] : '';
?>
<!--  Providers Follow us -->
<?php
if(function_exists('service_finder_totalProviders'))
{
	$total = service_finder_totalProviders();
}else{
	$total = 0;
}

if(service_finder_themestyle_for_plugin() == 'style-3'){
ob_start();

if(!empty($videourl))
{
$videoid = service_finder_get_youtubeid_from_url($videourl);
$videothumb = 'https://img.youtube.com/vi/'.$videoid.'/maxresdefault.jpg';
}else{
$videothumb = '';
}
?>
<section class="section-full sf-providers-follow-wrap" style="background:url(<?php echo esc_url($imgurl) ?>) center <?php echo esc_attr($bgattachment) ?> no-repeat;">
    <div class="container">
        <div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="sf-providers-follow-left <?php echo (($imagevideo == 'image' && $followimageurl == '') || ($imagevideo == 'video' && $videourl == '')) ? 'followers-placeholder' : ''; ?>">
                                <div class="sf-providers-follow-title"><h2 style="color:<?php echo esc_attr($followerstextcolor); ?>"><?php echo str_replace("%TOTAL-PROVIDERS%",'<span>'.$total.'</span>',$title); ?></h2></div>
                                <div class="sf-providers-follow-text">
                                <?php $content = str_replace("%TOTAL-PROVIDERS%",'<span>'.$total.'</span>',$content); ?>
								<?php echo apply_filters('the_content', $content); ?>
                                </div>
                                <?php
                                if($buttonlink != '' && $buttontext != '')
								{
								?>
                                <div class="sf-providers-follow-btn"><a href="<?php echo esc_html($buttonlink); ?>" class="btn btn-primary"><?php echo esc_html($buttontext); ?></a></div>
                                <?php
                                }
								?>
                             </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="sf-about-video-right">
                                <div class="overlay-wraper sf-video-pay-pic">
                                    <div class="overlay-main bg-black opacity-01 "></div>
                                    <?php
									if($imagevideo == 'image')
									{
									if($followimageurl != '')
									{
									echo '<img src="'.$followimageurl.'" alt="">';
									}
									}elseif($imagevideo == 'video')
									{
									if(!empty($videourl))
									{
									?>
									<img src="<?php echo esc_url($videothumb); ?>" alt="">
									<a href="<?php echo esc_url($videourl); ?>" class="popup-youtube play-now">
										<i class="icon fa fa-play"></i>
										<span class="ripple"></span>
									</a>
									<?php 
									}
									}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="sf-curve-topWrap"><div class="sf-curveTop sf-proFolos-curveTop" style="background-color:<?php echo esc_attr($curveleftcolor); ?>"></div></div>
    <div class="sf-curve-botWrap"><div class="sf-curveBot sf-proFolos-curveBot" style="background-color:<?php echo esc_attr($curverightcolor); ?>"></div></div>            
    <div class="sf-overlay-main" style="opacity:<?php echo esc_attr($bgopacity); ?>; background-color:<?php echo esc_attr($bgcolor); ?> "> 
</section>
<?php
$html = ob_get_clean();
}else{
$bgcolor = "#153056";
$bgopacity = 1;
$content_first = "GET YOUR PLACE CLEANED. IT’S SIMPLE";
$button_color = "#EF3C55";
$content = "We make the cleaning experience easier for you our goal is to make cleaning enjoyable again, and to give you your free time back so that you can concentrate on what’s important.";
$html = '<div class="section-full sf-overlay-wrapper text-center providers-follow" style="padding-top: 39.54px; padding-bottom: 41.43px; background-color: '. $bgcolor . ';">
  <div class="container" style="display: flex; font-family: Open Sans;">
    <div id = "follow_img" class= "sf-providers-follow-img">
        <div class = "sf-providers-follow-radius-rectangle"></div>
    </div>
    <div class="w-t-element" style="padding-left: 81px; padding-top: 104.67px; display: flex; flex-direction: column; float: right;">
        <div style="text-align: left; float:right;font-size:16px; ">' . $content_first . '</div>
        <div style="float:right; width: 432.81px;"> <strong class="sf-title" style="font-size: 40px; text-align:left; color:'.esc_attr($followerstextcolor).'">'.str_replace("%TOTAL-PROVIDERS%",'<span>'.$total.'</span>',$title).'</strong>
        </div>
        <div class="sf-follow-text" style="padding:0; font-size: 16px; text-align:left; float: right; width: 486px; color:'.esc_attr($followerstextcolor).'">'.$content.'</div>
        <div style="text-align: left; padding-top: 123px;">
            <input type="button" value="Learn More ->" style="border: none; background-color:'.$button_color.'; width: 170px; height: 56px; border-radius: 4px;">
        </div>
    </div>
  </div>
  <div class="sf-overlay-main" style="opacity:'.$bgopacity.'; background-color:'.$bgcolor.'">
  </div>
</div>
';
}
?>
<!--  Providers Follow us -->
