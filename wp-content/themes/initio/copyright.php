<?php
/**
 * @package Initio
 */  
$initio_theme_options = initio_get_options( 'initio_theme_options' );
?>
<div id="copyright">
	<div class="copyright-wrap">
		<span class="left"><i class="fa fa-copyright"></i><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="<?php esc_attr_e('home','initio')?>"><?php bloginfo( 'name' ); ?></a></span>
		<span class="right"><?php printf(__( '%1$s powered by %2$s', 'initio' ),'<a href="'.esc_url( __( 'http://vmthemes.com/initio/', 'initio')).'">Initio Theme</a>','<a href="' . esc_url( __( 'https://wordpress.org/', 'initio' ) ) . '">WordPress</a>'
); ?></span>
	</div>
</div><!--copyright-->