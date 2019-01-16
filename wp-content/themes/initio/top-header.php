<?php
/**
 * @package Initio
 */
$initio_theme_options = initio_get_options( 'initio_theme_options' );
?>
<div id="header-top">
	<div class="pagetop-inner clearfix">
		<div class="top-left left">
			<p class="no-margin"><i class="fa fa-home"></i><?php echo esc_html($initio_theme_options['header_address']); ?></p>
		</div>
		<div class="top-right right">
			<span class="top-phone"><i class="fa fa-phone"></i><?php echo esc_html($initio_theme_options['header_phone']); ?></span>
			<span class="top-email"><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_html($initio_theme_options['header_email']); ?>"><?php echo esc_html($initio_theme_options['header_email']); ?></a></span>
		</div>
	</div>
</div>