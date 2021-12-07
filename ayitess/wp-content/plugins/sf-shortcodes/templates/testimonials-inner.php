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
if(service_finder_themestyle_for_plugin() == 'style-2'){

$html = '<div class="sf-testimonial-2 item" data-hash="zero">
                                <div class="testimonial-thum">
								<a class="item-thum" href="javascript:;"><img src="'.esc_url($a['avatar']).'" alt=""></a>
								</div>
								<div class="sf-testimonial-text quote-right quote-left">
                                    <p>'.$content.'</p>
                                </div>
                                <div class="sf-testimonial-detail">
                                    <strong class="testimonial-name">'.esc_html($a['name']).'</strong>
                                    <span class="testimonial-position">'.esc_html($a['designation']).'</span>
                                </div>
                                
                            </div>';

}elseif(service_finder_themestyle_for_plugin() == 'style-3'){
ob_start();
?>
<div class="item">
    <div class="testimonial-2">
        <div class="testimonial-text">
            <div class="testimonial-reviews"><?php echo esc_html($a['title']); ?></div>
            <?php echo apply_filters('the_content', $content); ?>
        </div>
        <div class="testimonial-detail clearfix">
            <div class="testimonial-thum radius"><img src="<?php echo esc_url($a['avatar']); ?>" width="100" height="100" alt=""></div>
            <strong class="testimonial-name"><?php echo esc_html($a['name']); ?></strong>
            <span><?php echo esc_html($a['designation']); ?></span>
        </div>
    </div>
</div>
<?php
$html = ob_get_clean();
}else{
$html = '<div class="testimonial-bx item">
  <div class="testimonial-pic"><img src="'.esc_url($a['avatar']).'" width="100" height="100" alt=""></div>
  <div class="testimonial-text">
    <p>'.$content.'</p>
    <div class="testimonial-detail"><strong>'.esc_html($a['name']).'</strong><span>'.esc_html($a['designation']).'</span></div>
  </div>
</div>';
}
?>
<!-- Testimonials Inner Template-->
