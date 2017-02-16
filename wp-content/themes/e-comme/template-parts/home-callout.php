<?php
/**
* @Theme Name	:	E-Comme
* @file         :	home-client.php
* @package      :	e-comme
* @author       :	Theme Farmer
* @license      :	readme.txt
* @filesource   :	wp-content/themes/e-comme/templates/home-client.php
*/

$theme_data = e_comme_get_theme_var();
?>
<!-- Call out Start -->
<div class="call-back">
	<div class="container-fluid ec-callout ec-space">
		<div class="container">
			<div class="row call-section">
				<h2><?php echo esc_html($theme_data['home_cta_title']); ?></h2>
				<p><?php echo esc_html($theme_data['home_cta_desc']); ?></p>
				<a class="btn call-link" href="<?php echo esc_url($theme_data['home_cta_one_url']); ?>"><?php echo esc_html($theme_data['home_cta_one_text']); ?></a>
				<a class="btn call-link" href="<?php echo esc_url($theme_data['home_cta_two_url']); ?>"><?php echo esc_html($theme_data['home_cta_two_text']); ?></a>
			</div>
		</div>
	</div>
</div>
<!-- Call out End -->