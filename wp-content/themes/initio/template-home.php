<?php
/**
 * Template Name: Home Page
 *
 * Template to display the home page.
 *
 * @package Initio
 */
$initio_theme_options = initio_get_options( 'initio_theme_options' );
get_header(); ?>
	<div id="main" class="<?php echo esc_attr($initio_theme_options['layout_settings']); ?>">
	<?php 
		
			if ($initio_theme_options['image_slider_on'] == '1') {
					
				if ($initio_theme_options['default_image_slider'] == 'ideal') {
					initio_ideal_slider();
					
				} else { 
				
					initio_unslider_slider(); 
				}
				
			}
			
			if ($initio_theme_options['features_section_on'] == '1') {
			
				get_template_part( 'features', 'section' );
				
			}
			
			if ($initio_theme_options['about_section_on'] == '1') {
			
				get_template_part( 'about', 'section' );
				
			}
			
			if ($initio_theme_options['services_section_on'] == '1') {
			
				if ($initio_theme_options['services_img_display'] == '1') {
					
					get_template_part( 'services', 'section' );
				
				} else {
					
					get_template_part( 'services', 'section-noimage' );
				
				}
				
			}
			
			
			if ($initio_theme_options['getin_home_on'] == '1') {
			
				get_template_part( 'getintouch', 'section' );
				
			}
			
			if ($initio_theme_options['blog_section_on'] == '1') {
			
				get_template_part( 'fromblog', 'section' );
				
			} ?>		
	</div><!--main-->
	<?php if ($initio_theme_options['social_section_on'] == '1') {
			get_template_part( 'social', 'section' );	
		}
get_footer(); ?>