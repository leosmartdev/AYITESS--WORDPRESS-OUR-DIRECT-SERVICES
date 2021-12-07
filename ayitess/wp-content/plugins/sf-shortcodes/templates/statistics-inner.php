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
<?php
$service_finder_options = service_finder_shortcode_global_vars('service_finder_options');

$providerreplacestring = (!empty($service_finder_options['provider-replace-string'])) ? $service_finder_options['provider-replace-string'] : esc_html__('Provider', 'service-finder');
$customerreplacestring = (!empty($service_finder_options['customer-replace-string'])) ? $service_finder_options['customer-replace-string'] : esc_html__('Customer', 'service-finder');

$type = (!empty($a['type'])) ? $a['type'] : '';
switch($type){
case 'providers': 
	$number = (!empty($a['number'])) ? esc_html($a['number']) : 0;
	if($number == 0 || $number == ''){
	if(function_exists('service_finder_totalProviders'))
	{
		$total = service_finder_totalProviders();
	}else{
		$total = 0;
	}
	$number = $total;
	}
	$text = (!empty($a['text'])) ? $a['text'] : $providerreplacestring;
	break;
case 'customers': 
	$number = (!empty($a['number'])) ? esc_html($a['number']) : 0;
	if($number == 0 || $number == ''){
	if(function_exists('service_finder_totalCustomers'))
	{
		$total = service_finder_totalCustomers();
	}else{
		$total = 0;
	}
	$number = $total;
	}
	$text = (!empty($a['text'])) ? $a['text'] : $customerreplacestring;
	break;
case 'jobs': 
	$number = (!empty($a['number'])) ? esc_html($a['number']) : 0;
	if($number == 0 || $number == ''){
	$total = wp_count_posts('job_listing');
	$number = $total->publish;
	}
	$text = (!empty($a['text'])) ? $a['text'] : esc_html__('Jobs', 'service-finder');
	break;
case 'categories': 
	$number = (!empty($a['number'])) ? esc_html($a['number']) : 0;
	if($number == 0 || $number == ''){
	$total = wp_count_terms('providers-category');
	$number = $total;
	}
	$text = (!empty($a['text'])) ? $a['text'] : esc_html__('Categories', 'service-finder');
	break;
default:
	$number = (!empty($a['number'])) ? $a['number'] : 0;
	$text = (!empty($a['text'])) ? $a['text'] : '';
	break;
}
if(service_finder_themestyle_for_plugin() == 'style-3')
{
ob_start();
?>
<div class="col-md-3 col-sm-6">
  <div class="sf-company-satus2 text-center">
        <div class="sf-company-count counter"><?php echo esc_html($number); ?></div>
        <div class="sf-company-satus-name"><?php echo esc_html($text); ?></div>
        <div class="sf-company-satus-line" style="background-color:<?php echo esc_attr($a['color-code']); ?>"></div>
  </div>
</div>
<?php
$html = ob_get_clean();
}else{
$html = '<div class="col-md-3 col-sm-6 equal-col sf-counter-wrap">
                      <div class="sf-company-satus text-center">
                            <div class="sf-icon-md margin-b-10"><i class="fa '.esc_attr($a['fa-icon']).'"></i></div>
                            <div class="sf-company-count counter">'.esc_html($number).'</div>
                            <div class="sf-company-satus-name">'.esc_html($text).'</div>
                      </div>
                    </div>';
}
?>

