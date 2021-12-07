<?php if ( ! is_tax( 'job_listing_type' ) && empty( $job_types ) ) : ?>
	<div class="sf-job-type-filter">
    <h4 class="sf-job-title"><?php esc_html_e('Filter By Job Type', 'service-finder') ?></h4>
    <ul class="job_types">
		<?php foreach ( get_job_listing_types() as $type ) : ?>
			<li><input type="checkbox" name="filter_job_type[]" value="<?php echo esc_attr($type->slug); ?>" <?php checked( in_array( $type->slug, $selected_job_types ), true ); ?> id="job_type_<?php echo esc_attr($type->slug); ?>" /> <label for="job_type_<?php echo esc_attr($type->slug); ?>" class="<?php echo sanitize_title( $type->name ); ?>"><?php echo esc_html($type->name); ?></label></li>
		<?php endforeach; ?>
	</ul>
    </div>
	<input type="hidden" name="filter_job_type[]" value="" />
<?php elseif ( $job_types ) : ?>
	<?php foreach ( $job_types as $job_type ) : ?>
		<input type="hidden" name="filter_job_type[]" value="<?php echo sanitize_title( $job_type ); ?>" />
	<?php endforeach; ?>
<?php endif; ?>