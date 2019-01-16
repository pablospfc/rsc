<?php
/**
 * Initio functions and definitions
 *
 * @package Initio
*/

function initio_customize_register($wp_customize){
	
	class Initio_WP_Customize_Info_Control extends WP_Customize_Control {
		public $type = 'info';
	
		public function render_content() {
			?>
				<strong> <?php esc_html_e('If you like our work. Buy us a coffee.','initio'); ?></strong>
                <div class="donate">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="T5VCDMLPPLBBS">
						<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
				<p class="btn">
					<a class="button button-primary" target="_blank" href="http://vmthemes.com/support/"><?php esc_html_e('Theme Support','initio') ?></a><br><br>
					<a class="button button-primary" target="_blank" href="http://vmthemes.com/preview/Initio/"><?php esc_html_e('View Theme Demo','initio') ?></a><br><br>
					<a class="button button-primary" target="_blank" href="http://vmthemes.com/initio/#theme-pricing"><?php  esc_html_e('Upgrade to Pro','initio') ?></a>
				</p>
        	<?php	
		}
	}
    
	// Google Fonts
	$google_fonts = array(
		__('Raleway','initio')	=> __('Raleway','initio'),
	);
						
	// Opacity
	$opacity = array(
		'1' => '1',
		'0.9'	=> '0.9',
		'0.8'	=> '0.8',
		'0.7'	=> '0.7',
		'0.6'	=> '0.6',
		'0.5'	=> '0.5',
		'0.4'	=> '0.4',
		'0.3'	=> '0.3',
		'0.2'	=> '0.2',
		'0.1'	=> '0.1',
		'0'	=> '0',
	);
	
	//Image Sliders
	$image_sliders = array('ideal' => __('Ideal Image Slider','initio'), 'unslider' => __('Unslider','initio'));
	
	// Slider Effects
	$options_effects = array('slide' => __('Slide', 'initio'), 'fade' => __('Fade', 'initio'));
	
	// Sidebar Position
	$theme_layout = array('col1' => __('No Sidebars','initio'), 'col2-l' => __('Right Sidebar','initio'), 'col2-r' => __('Left Sidebar','initio'));
	
	// Blog Content
	$blog_content = array('excerpt' => __('Excerpt','initio'),'full' => __('Full Content','initio'));
	
	// Post Navigation Links Location
	$post_nav_array = array(
		'disable' => __('Disable', 'initio'),
		'sidebar' => __('Main Sidebar', 'initio'),
		'below' => __('Below Content', 'initio'),

	);
	
	// Post Info Location
	$post_info_array = array(
		'disable' => __('Disable', 'initio'),
		'above' => __('Above Content', 'initio'),

	);
	
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	//  =============================
    //  = Theme Options Panel       =
    //  =============================
	$wp_customize->add_panel( 'theme_options', array(
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Initio Theme Options', 'initio' ),
	));
	
	//  =============================
    //  = Theme Info Section        =
    //  =============================					
	$wp_customize->add_section( 'initio_theme_settings', array(
    	'title'          => __( 'Theme Information', 'initio' ),
    	'priority'       => 999, 
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[theme_info]', array(
    	'default'        => '',
		'sanitize_callback' => 'initio_no_sanitize',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new Initio_WP_Customize_Info_Control($wp_customize, 'theme_info', array(
        'label'    => __(' ', 'initio'),
        'section'  => 'initio_theme_settings',
        'settings' => 'initio_theme_options[theme_info]',
    )));

	//  =============================
    //  = General Section           =
    //  =============================					
	$wp_customize->add_section( 'initio_general_settings', array(
    	'title'          => __( 'General Settings', 'initio' ),
    	'priority'       => 1000,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[theme_color]', array(
    	'default'        => '#10b4d1',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'theme_color', array(
        'label'    => __('Theme Color', 'initio'),
        'section'  => 'initio_general_settings',
        'settings' => 'initio_theme_options[theme_color]',
    )));
	//===============================    
	$wp_customize->add_setting('initio_theme_options[breadcrumbs]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('breadcrumbs', array(
        'settings' => 'initio_theme_options[breadcrumbs]',
        'label'    => __('Display Breadcrumbs', 'initio'),
        'section'  => 'initio_general_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[animation]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('animation', array(
        'settings' => 'initio_theme_options[animation]',
        'label'    => __('Enable Animation', 'initio'),
        'section'  => 'initio_general_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[responsive_design]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('responsive_design', array(
        'settings' => 'initio_theme_options[responsive_design]',
        'label'    => __('Enable Responsive Design', 'initio'),
        'section'  => 'initio_general_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[scrollup]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('scrollup', array(
        'settings' => 'initio_theme_options[scrollup]',
        'label'    => __('Enable Scrollup', 'initio'),
        'section'  => 'initio_general_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[scrollup_color]', array(
    	'default'        => '#888888',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'scrollup_color', array(
        'label'    => __('ScrollUp Color', 'initio'),
        'section'  => 'initio_general_settings',
        'settings' => 'initio_theme_options[scrollup_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[scrollup_hover_color]', array(
    	'default'        => '#10b4d1',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'scrollup_hover_color', array(
        'label'    => __('ScrollUp Hover Color', 'initio'),
        'section'  => 'initio_general_settings',
        'settings' => 'initio_theme_options[scrollup_hover_color]',
    )));
	//===============================
	$wp_customize->add_setting('initio_theme_options[social_section_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('social_section_on', array(
        'settings' => 'initio_theme_options[social_section_on]',
        'label'    => __('Display Social Links', 'initio'),
        'section'  => 'initio_general_settings',
        'type'     => 'checkbox',
    ));

	//  =============================
    //  = Logo Section              =
    //  =============================

	$wp_customize->add_section( 'initio_logo_settings', array(
    	'title'          => __( 'Logo Settings', 'initio' ),
    	'priority'       => 1001,
		'panel' => 'theme_options',
		'description' => __('To upload custom logo image - go to Appearance > Customize > Site Identity', 'initio'),
	) );
	//===============================    
    $wp_customize->add_setting( 'initio_theme_options[logo_width]', array(
        'default'        => '300',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_width', array(
        'label'      => __('Logo Width (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_width]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[logo_height]', array(
        'default'        => '30',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_height', array(
        'label'      => __('Logo Height (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_height]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[logo_top_margin]', array(
        'default'        => '8',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_top_margin', array(
        'label'      => __('Logo Top Margin (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_top_margin]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[logo_left_margin]', array(
        'default'        => '0',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_left_margin', array(
        'label'      => __('Logo Left Margin (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_left_margin]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[logo_bottom_margin]', array(
        'default'        => '0',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_bottom_margin', array(
        'label'      => __('Logo Bottom Margin (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_bottom_margin]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[logo_right_margin]', array(
        'default'        => '25',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_right_margin', array(
        'label'      => __('Logo Right Margin (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_right_margin]',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[logo_uppercase]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('logo_uppercase', array(
        'settings' => 'initio_theme_options[logo_uppercase]',
        'label'    => __('Logo Uppercase', 'initio'),
        'section'  => 'initio_logo_settings',
        'type'     => 'checkbox',
    ));
	//===============================
     $wp_customize->add_setting('initio_theme_options[google_font_logo]', array(
		'sanitize_callback' => 'initio_sanitize_font_style',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
		'default'        => 'Raleway',
 
    ));

    $wp_customize->add_control( 'google_font_logo', array(
        'settings' => 'initio_theme_options[google_font_logo]',
        'label'   => __('Select logo font family','initio'),
        'section' => 'initio_logo_settings',
        'type'    => 'select',
        'choices'    => $google_fonts,
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[logo_font_size]', array(
        'default'        => '24',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_font_size', array(
        'label'      => __('Logo Font Size (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_font_size]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[logo_font_weight]', array(
        'default'        => '700',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('logo_font_weight', array(
        'label'      => __('Logo Font Weight', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[logo_font_weight]',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[text_logo_color]', array(
    	'default'        => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'text_logo_color', array(
        'label'    => __('Logo Color', 'initio'),
        'section'  => 'initio_logo_settings',
        'settings' => 'initio_theme_options[text_logo_color]',
    )));
	//===============================
	$wp_customize->add_setting('initio_theme_options[enable_logo_tagline]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('enable_logo_tagline', array(
        'settings' => 'initio_theme_options[enable_logo_tagline]',
        'label'    => __('Display Tagline Underneath Logo', 'initio'),
        'section'  => 'initio_logo_settings',
        'type'     => 'checkbox',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[tagline_font_size]', array(
        'default'        => '16',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('tagline_font_size', array(
        'label'      => __('Tagline Font Size (px)', 'initio'),
        'section'    => 'initio_logo_settings',
        'settings'   => 'initio_theme_options[tagline_font_size]',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[tagline_color]', array(
    	'default'        => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'tagline_color', array(
        'label'    => __('Tagline Color', 'initio'),
        'section'  => 'initio_logo_settings',
        'settings' => 'initio_theme_options[tagline_color]',
    )));
	//===============================
	$wp_customize->add_setting('initio_theme_options[tagline_uppercase]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('tagline_uppercase', array(
        'settings' => 'initio_theme_options[tagline_uppercase]',
        'label'    => __('Tagline Uppercase', 'initio'),
        'section'  => 'initio_logo_settings',
        'type'     => 'checkbox',
    ));
	//  =============================
    //  = Navigation Section        =
    //  =============================

	$wp_customize->add_section( 'initio_navigation_settings', array(
    	'title'          => __( 'Navigation Settings', 'initio' ),
    	'priority'       => 1002,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting('initio_theme_options[menu_sticky]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('menu_sticky', array(
        'settings' => 'initio_theme_options[menu_sticky]',
        'label'    => __('Sticky Menu', 'initio'),
        'section'  => 'initio_navigation_settings',
        'type'     => 'checkbox',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[menu_top_margin]', array(
        'default'        => '0',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('menu_top_margin', array(
        'label'      => __('Menu Top Margin (px)', 'initio'),
        'section'    => 'initio_navigation_settings',
        'settings'   => 'initio_theme_options[menu_top_margin]',
    ));
	//===============================
     $wp_customize->add_setting('initio_theme_options[google_font_menu]', array(
		'sanitize_callback' => 'initio_sanitize_font_style',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
		'default'        => 'Raleway',
 
    ));

    $wp_customize->add_control( 'google_font_menu', array(
        'settings' => 'initio_theme_options[google_font_menu]',
        'label'   => __('Select Menu Font Family','initio'),
        'section' => 'initio_navigation_settings',
        'type'    => 'select',
        'choices'    => $google_fonts,
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[nav_font_size]', array(
        'default'        => '13',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('nav_font_size', array(
        'label'      => __('Menu Font Size (px)', 'initio'),
        'section'    => 'initio_navigation_settings',
        'settings'   => 'initio_theme_options[nav_font_size]',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[menu_uppercase]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('menu_uppercase', array(
        'settings' => 'initio_theme_options[menu_uppercase]',
        'label'    => __('Menu Uppercase', 'initio'),
        'section'  => 'initio_navigation_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[nav_font_color]', array(
    	'default'        => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_font_color', array(
        'label'    => __('Navigation Menu Font Color', 'initio'),
        'section'  => 'initio_navigation_settings',
        'settings' => 'initio_theme_options[nav_font_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[nav_border_color]', array(
    	'default'        => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_border_color', array(
        'label'    => __('Navigation Menu Border Color', 'initio'),
        'section'  => 'initio_navigation_settings',
        'settings' => 'initio_theme_options[nav_border_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[nav_bg_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_bg_color', array(
        'label'    => __('Navigation Menu Background Color', 'initio'),
        'section'  => 'initio_navigation_settings',
        'settings' => 'initio_theme_options[nav_bg_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[nav_bg_sub_color]', array(
    	'default'        => '#10b4d1',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_bg_sub_color', array(
        'label'    => __('SubMenu Background Color', 'initio'),
        'section'  => 'initio_navigation_settings',
        'settings' => 'initio_theme_options[nav_bg_sub_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[nav_hover_font_color]', array(
    	'default'        => '#10b4d1',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_hover_font_color', array(
        'label'    => __('Menu Hover Font Color', 'initio'),
        'section'  => 'initio_navigation_settings',
        'settings' => 'initio_theme_options[nav_hover_font_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[nav_bg_hover_color]', array(
    	'default'        => '#f2f2f2',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_bg_hover_color', array(
        'label'    => __('Menu Background Hover Color', 'initio'),
        'section'  => 'initio_navigation_settings',
        'settings' => 'initio_theme_options[nav_bg_hover_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[nav_cur_item_color]', array(
    	'default'        => '#dd3333',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'nav_cur_item_color', array(
        'label'    => __('Selected Menu Color', 'initio'),
        'section'  => 'initio_navigation_settings',
        'settings' => 'initio_theme_options[nav_cur_item_color]',
    )));
	//  =============================
    //  = Typography Section        =
    //  =============================
	$wp_customize->add_section( 'initio_typography_settings', array(
    	'title'          => __( 'Typography Settings', 'initio' ),
    	'priority'       => 1003,
		'panel' => 'theme_options',
	) );
	//===============================
     $wp_customize->add_setting('initio_theme_options[google_font_body]', array(
		'sanitize_callback' => 'initio_sanitize_font_style',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
		'default'        => 'Raleway',
 
    ));

    $wp_customize->add_control( 'google_font_body', array(
        'settings' => 'initio_theme_options[google_font_body]',
        'label'   => __('Select Body Font Family','initio'),
        'section' => 'initio_typography_settings',
        'type'    => 'select',
        'choices'    => $google_fonts,
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[body_font_size]', array(
        'default'        => '14',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('body_font_size', array(
        'label'      => __('Body Font Size (px)', 'initio'),
        'section'    => 'initio_typography_settings',
        'settings'   => 'initio_theme_options[body_font_size]',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[body_font_color]', array(
    	'default'        => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'body_font_color', array(
        'label'    => __('Body Font Color', 'initio'),
        'section'  => 'initio_typography_settings',
        'settings' => 'initio_theme_options[body_font_color]',
    )));
	//  =============================
    //  = Header Section            =
    //  =============================
	$wp_customize->add_section( 'initio_header_settings', array(
    	'title'          => __( 'Header Settings', 'initio' ),
    	'priority'       => 1004,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[header_bg_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'header_bg_color', array(
        'label'    => __('Header Background Color', 'initio'),
        'section'  => 'initio_header_settings',
        'settings' => 'initio_theme_options[header_bg_color]',
    )));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[header_opacity]', array(
        'default'        => '1',
		'sanitize_callback' => 'initio_sanitize_opacity',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('header_opacity', array(
        'label'      => __('Header Background Color Opacity', 'initio'),
        'section'    => 'initio_header_settings',
        'settings'   => 'initio_theme_options[header_opacity]',
        'type'    => 'select',
        'choices'    => $opacity,
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[header_top_enable]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('header_top_enable', array(
        'settings' => 'initio_theme_options[header_top_enable]',
        'label'    => __('Display Top Header Section', 'initio'),
        'section'  => 'initio_header_settings',
        'type'     => 'checkbox',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[header_address]', array(
        'default'        => '1234 Street Name, City Name, United States',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('header_address', array(
        'label'      => __('Address', 'initio'),
        'section'    => 'initio_header_settings',
        'settings'   => 'initio_theme_options[header_address]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[header_phone]', array(
        'default'        => '(123) 456-7890',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('header_phone', array(
        'label'      => __('Phone Number', 'initio'),
        'section'    => 'initio_header_settings',
        'settings'   => 'initio_theme_options[header_phone]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[header_email]', array(
        'default'        => 'info@yourdomain.com',
		'sanitize_callback' => 'initio_sanitize_email',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('header_email', array(
        'label'      => __('Email', 'initio'),
        'section'    => 'initio_header_settings',
        'settings'   => 'initio_theme_options[header_email]',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[address_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'address_color', array(
        'label'    => __('Top Section Font Color', 'initio'),
        'section'  => 'initio_header_settings',
        'settings' => 'initio_theme_options[address_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[top_head_color]', array(
    	'default'        => '#10b4d1',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'top_head_color', array(
        'label'    => __('Top Section Color', 'initio'),
        'section'  => 'initio_header_settings',
        'settings' => 'initio_theme_options[top_head_color]',
    )));
	//  =============================
    //  = Home Page Section         =
    //  =============================
	$wp_customize->add_section( 'initio_home_settings', array(
    	'title'          => __( 'Static Home Page Settings', 'initio' ),
    	'priority'       => 1005,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting('initio_theme_options[image_slider_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('image_slider_on', array(
        'settings' => 'initio_theme_options[image_slider_on]',
        'label'    => __('Enable Image Slider', 'initio'),
        'section'  => 'initio_home_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[features_section_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('features_section_on', array(
        'settings' => 'initio_theme_options[features_section_on]',
        'label'    => __('Display Features Section', 'initio'),
        'section'  => 'initio_home_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[about_section_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => true,
    ));
 
    $wp_customize->add_control('about_section_on', array(
        'settings' => 'initio_theme_options[about_section_on]',
        'label'    => __('Display About Section', 'initio'),
        'section'  => 'initio_home_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[services_section_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('services_section_on', array(
        'settings' => 'initio_theme_options[services_section_on]',
        'label'    => __('Display Services Section', 'initio'),
        'section'  => 'initio_home_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[getin_home_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('getin_home_on', array(
        'settings' => 'initio_theme_options[getin_home_on]',
        'label'    => __('Display Get In Touch Section', 'initio'),
        'section'  => 'initio_home_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[blog_section_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => true,
    ));
 
    $wp_customize->add_control('blog_section_on', array(
        'settings' => 'initio_theme_options[blog_section_on]',
        'label'    => __('Display Latest News Section', 'initio'),
        'section'  => 'initio_home_settings',
        'type'     => 'checkbox',
    ));

	//  =============================
    //  = Image Slider Section      =
    //  =============================
	$wp_customize->add_section( 'initio_slider_settings', array(
    	'title'          => __( 'Image Slider Settings', 'initio' ),
    	'priority'       => 1006,
		'panel' => 'theme_options',
	) );
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[default_image_slider]', array(
        'default'        => 'ideal',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('default_image_slider', array(
        'label'      => __('Default Image Slider', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[default_image_slider]',
        'type'    => 'select',
        'choices'    => $image_sliders,
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[slider_height]', array(
        'default'        => '500',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('slider_height', array(
        'label'      => __('Image Slider Height (px)', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[slider_height]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[image_slider_cat]', array(
        'default'        => '',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('image_slider_cat', array(
        'label'      => __('Image Slider Category', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[image_slider_cat]',
        'type'    => 'select',
        'choices'    => $options_categories,
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[slideshow_speed]', array(
        'default'        => '5000',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('slideshow_speed', array(
        'label'      => __('Slideshow Interval', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[slideshow_speed]',
		'description' => __('1000 = 1 second, default value: 5000', 'initio'),
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[animation_speed]', array(
        'default'        => '800',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('animation_speed', array(
        'label'      => __('Animation Speed', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[animation_speed]',
		'description' => __('1000 = 1 second, default value: 800', 'initio'),
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[slider_num]', array(
        'default'        => '3',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('slider_num', array(
        'label'      => __('Number of Slides', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[slider_num]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[image_slider_effect]', array(
        'default'        => 'fade',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('image_slider_effect', array(
        'label'      => __('Image Slider Effect', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[image_slider_effect]',
        'type'    => 'select',
        'choices'    => $options_effects,
		'description' => __('Can be only used with Ideal Image Slider', 'initio'),
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[captions_on]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('captions_on', array(
        'settings' => 'initio_theme_options[captions_on]',
        'label'    => __('Enable Slider Captions', 'initio'),
        'section'  => 'initio_slider_settings',
        'type'     => 'checkbox',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[captions_pos_left]', array(
        'default'        => '0',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('captions_pos_left', array(
        'label'      => __('Caption Position Left %', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[captions_pos_left]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[captions_pos_top]', array(
        'default'        => '120',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('captions_pos_top', array(
        'label'      => __('Caption Position Top (px)', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[captions_pos_top]',
		'description' => __('Can be only used with Unslider Image Slider', 'initio'),
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[captions_pos_bottom]', array(
        'default'        => '5',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('captions_pos_bottom', array(
        'label'      => __('Caption Position Bottom %', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[captions_pos_bottom]',
		'description' => __('Can be only used with Ideal Image Slider', 'initio'),
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[captions_width]', array(
        'default'        => '90',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('captions_width', array(
        'label'      => __('Caption Width %', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[captions_width]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[captions_title_size]', array(
        'default'        => '24',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('captions_title_size', array(
        'label'      => __('Caption Title Font Size px', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[captions_title_size]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[captions_text_size]', array(
        'default'        => '14',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('captions_text_size', array(
        'label'      => __('Caption Text Font Size px', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[captions_text_size]',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[captions_title_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'captions_title_color', array(
        'label'    => __('Caption Title Color', 'initio'),
        'section'  => 'initio_slider_settings',
        'settings' => 'initio_theme_options[captions_title_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[captions_text_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'captions_text_color', array(
        'label'    => __('Captions Text Color', 'initio'),
        'section'  => 'initio_slider_settings',
        'settings' => 'initio_theme_options[captions_text_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[captions_button_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'captions_button_color', array(
        'label'    => __('Captions Button Color', 'initio'),
        'section'  => 'initio_slider_settings',
        'settings' => 'initio_theme_options[captions_button_color]',
		'description' => __('Can be only used with Unslider Image Slider', 'initio'),
    )));
	//===============================
	$wp_customize->add_setting('initio_theme_options[captions_button]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('captions_button', array(
        'settings' => 'initio_theme_options[captions_button]',
        'label'    => __('Enable Captions Button', 'initio'),
        'section'  => 'initio_slider_settings',
        'type'     => 'checkbox',
		'description' => __('Can be only used with Unslider Image Slider', 'initio'),
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[caption_button_text]', array(
        'default'        => 'Read More',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('caption_button_text', array(
        'label'      => __('Captions Button Text', 'initio'),
        'section'    => 'initio_slider_settings',
        'settings'   => 'initio_theme_options[caption_button_text]',
		'description' => __('Can be only used with Unslider Image Slider', 'initio'),
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[slider_dots]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('slider_dots', array(
        'settings' => 'initio_theme_options[slider_dots]',
        'label'    => __('Enable Slider Dots', 'initio'),
        'section'  => 'initio_slider_settings',
        'type'     => 'checkbox',
		'description' => __('Can be only used with Unslider Image Slider', 'initio'),
    ));
	//  =============================
    //  = Footer Section            =
    //  =============================
	$wp_customize->add_section( 'initio_footer_settings', array(
    	'title'          => __( 'Footer Settings', 'initio' ),
    	'priority'       => 1007,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[footer_bg_color]', array(
    	'default'        => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', array(
        'label'    => __('Footer Background Color', 'initio'),
        'section'  => 'initio_footer_settings',
        'settings' => 'initio_theme_options[footer_bg_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[copyright_bg_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'copyright_bg_color', array(
        'label'    => __('Copyright Section Background Color', 'initio'),
        'section'  => 'initio_footer_settings',
        'settings' => 'initio_theme_options[copyright_bg_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[footer_widget_title_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_widget_title_color', array(
        'label'    => __('Footer Widget Title Color', 'initio'),
        'section'  => 'initio_footer_settings',
        'settings' => 'initio_theme_options[footer_widget_title_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[footer_widget_title_border_color]', array(
    	'default'        => '#444444',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_widget_title_border_color', array(
        'label'    => __('Footer Widget Title Border Color', 'initio'),
        'section'  => 'initio_footer_settings',
        'settings' => 'initio_theme_options[footer_widget_title_border_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[footer_widget_text_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_widget_text_color', array(
        'label'    => __('Footer Widget Text Color', 'initio'),
        'section'  => 'initio_footer_settings',
        'settings' => 'initio_theme_options[footer_widget_text_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[footer_widget_text_border_color]', array(
    	'default'        => '#444444',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_widget_text_border_color', array(
        'label'    => __('Footer Widget Text Border Color', 'initio'),
        'section'  => 'initio_footer_settings',
        'settings' => 'initio_theme_options[footer_widget_text_border_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[footer_social_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'footer_social_color', array(
        'label'    => __('Footer Social Icons Color', 'initio'),
        'section'  => 'initio_footer_settings',
        'settings' => 'initio_theme_options[footer_social_color]',
    )));
	//===============================
	$wp_customize->add_setting('initio_theme_options[footer_widgets]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('footer_widgets', array(
        'settings' => 'initio_theme_options[footer_widgets]',
        'label'    => __('Enable Footer Widgets', 'initio'),
        'section'  => 'initio_footer_settings',
        'type'     => 'checkbox',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[footer_copyright_text]', array(
        'default'        => 'Copyright '.date('Y').' '.get_bloginfo('site_title'),
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('footer_copyright_text', array(
        'label'      => __('Copyright Text', 'initio'),
        'section'    => 'initio_footer_settings',
        'settings'   => 'initio_theme_options[footer_copyright_text]',
    ));
	//  =============================
    //  = Layout Section            =
    //  =============================
	$wp_customize->add_section( 'initio_layout_settings', array(
    	'title'          => __( 'Layout Settings', 'initio' ),
    	'priority'       => 1008,
		'panel' => 'theme_options',
	) );
	//===============================
     $wp_customize->add_setting('initio_theme_options[layout_settings]', array(
		'sanitize_callback' => 'initio_sanitize_theme_layout',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
		'default'        => 'col2-l',
 
    ));

    $wp_customize->add_control( 'layout_settings', array(
        'settings' => 'initio_theme_options[layout_settings]',
        'label'   => __('Theme Layout','initio'),
        'section' => 'initio_layout_settings',
        'type'    => 'radio',
        'choices'    => $theme_layout,
    ));
	//  =============================
    //  = Blog Section              =
    //  =============================
	$wp_customize->add_section( 'initio_blog_settings', array(
    	'title'          => __( 'Blog Settings', 'initio' ),
    	'priority'       => 1009,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[blog_posts_home_color]', array(
    	'default'        => '#efefef',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'blog_posts_home_color', array(
        'label'    => __('Background Color', 'initio'),
        'section'  => 'initio_blog_settings',
        'settings' => 'initio_theme_options[blog_posts_home_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[blog_posts_home_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_posts_home_image', array(
        'label'    => __('Background Image', 'initio'),
        'section'  => 'initio_blog_settings',
        'settings' => 'initio_theme_options[blog_posts_home_image]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[blog_posts_top_color]', array(
    	'default'        => '#efefef',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'blog_posts_top_color', array(
        'label'    => __('Top Section Background Color', 'initio'),
        'section'  => 'initio_blog_settings',
        'settings' => 'initio_theme_options[blog_posts_top_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[blog_posts_top_font_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'blog_posts_top_font_color', array(
        'label'    => __('Top Section Font Color', 'initio'),
        'section'  => 'initio_blog_settings',
        'settings' => 'initio_theme_options[blog_posts_top_font_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[blog_posts_top_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_posts_top_image', array(
        'label'    => __('Top Section Image', 'initio'),
        'section'  => 'initio_blog_settings',
        'settings' => 'initio_theme_options[blog_posts_top_image]',
    )));

	//===============================
     $wp_customize->add_setting('initio_theme_options[blog_content]', array(
		'sanitize_callback' => 'initio_sanitize_blog_content',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
		'default'        => 'excerpt',
 
    ));

    $wp_customize->add_control( 'blog_content', array(
        'settings' => 'initio_theme_options[blog_content]',
        'label'   => __('Blog Content','initio'),
        'section' => 'initio_blog_settings',
        'type'    => 'radio',
        'choices'    => $blog_content,
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[blog_excerpt]', array(
        'default'        => '50',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('blog_excerpt', array(
        'label'      => __('Blog Excerpt Length', 'initio'),
        'section'    => 'initio_blog_settings',
        'settings'   => 'initio_theme_options[blog_excerpt]',
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[simple_paginaton]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => false,
    ));
 
    $wp_customize->add_control('simple_paginaton', array(
        'settings' => 'initio_theme_options[simple_paginaton]',
        'label'    => __('Use Simple Pagination', 'initio'),
        'section'  => 'initio_blog_settings',
        'type'     => 'checkbox',
    ));
	//===============================
     $wp_customize->add_setting('initio_theme_options[post_navigation]', array(
		'sanitize_callback' => 'initio_sanitize_post_nav',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
		'default'        => 'sidebar',
 
    ));

    $wp_customize->add_control( 'post_navigation', array(
        'settings' => 'initio_theme_options[post_navigation]',
        'label'   => __('Post Navigation Links','initio'),
        'section' => 'initio_blog_settings',
        'type'    => 'radio',
        'choices'    => $post_nav_array,
    ));
	//===============================
     $wp_customize->add_setting('initio_theme_options[post_info]', array(
		'sanitize_callback' => 'initio_sanitize_post_info',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
		'default'        => 'above',
 
    ));

    $wp_customize->add_control( 'post_info', array(
        'settings' => 'initio_theme_options[post_info]',
        'label'   => __('Post Info Position','initio'),
        'section' => 'initio_blog_settings',
        'type'    => 'radio',
        'choices'    => $post_info_array,
    ));
	//===============================
	$wp_customize->add_setting('initio_theme_options[featured_img_post]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('featured_img_post', array(
        'settings' => 'initio_theme_options[featured_img_post]',
        'label'    => __('Featured Image Inside the Post', 'initio'),
        'section'  => 'initio_blog_settings',
        'type'     => 'checkbox',
    ));
	//  =============================
    //  = Features Settings         =
    //  =============================
	$wp_customize->add_section( 'initio_features_settings', array(
    	'title'          => __( 'Features Section', 'initio' ),
    	'priority'       => 1011,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[features_bg_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'features_bg_color', array(
        'label'    => __('Background Color', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[features_bg_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[features_bg_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'features_bg_image', array(
        'label'    => __('Background Image', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[features_bg_image]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[features_title_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'features_title_color', array(
        'label'    => __('Title Color', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[features_title_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[features_text_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'features_text_color', array(
        'label'    => __('Text Color', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[features_text_color]',
    )));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[features_section_title]', array(
        'default'        => 'Clean Design & Great Functionality',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('features_section_title', array(
        'label'      => __('Title Text', 'initio'),
        'section'    => 'initio_features_settings',
        'settings'   => 'initio_theme_options[features_section_title]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[features_section_desc]', array(
        'default'        => 'Clean Design & Great Functionality',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('features_section_desc', array(
        'label'      => __('Description Text', 'initio'),
        'section'    => 'initio_features_settings',
        'settings'   => 'initio_theme_options[features_section_desc]',
    ));
    	
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[features_page_1]', array(
        	'default'        => '',
			'sanitize_callback' => 'absint',
	        'capability'     => 'edit_theme_options',
    	    'type'           => 'option',
    	));
 
		$wp_customize->add_control('features_page_1', array(
	        'label'      => __('Feature #1', 'initio'),
	        'section'    => 'initio_features_settings',
			'type'    => 'dropdown-pages',
	        'settings'   => 'initio_theme_options[features_page_1]',
			'description' => __('Select Page to Display as One of the Features', 'initio'),
    	));	
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[feature_icon_1]', array(
        'default'        => 'fa-tablet',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('feature_icon_1', array(
        'label'      => __('Feature #1 Icon', 'initio'),
        'section'    => 'initio_features_settings',
        'settings'   => 'initio_theme_options[feature_icon_1]',
		'description' => sprintf( __( 'Enter Font Awesome icon name. For icon name refer to: <a href="%1$s" target="_blank">Font Awesome Website</a>', 'initio' ), 'http://fortawesome.github.io/Font-Awesome/icons/' ),
    ));
	//===============================
    $wp_customize->add_setting('initio_theme_options[feature_image_1]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'feature_image_1', array(
        'label'    => __('Feature #1 Image', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[feature_image_1]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[features_page_2]', array(
        	'default'        => '',
			'sanitize_callback' => 'absint',
	        'capability'     => 'edit_theme_options',
    	    'type'           => 'option',
    	));
 
		$wp_customize->add_control('features_page_2', array(
	        'label'      => __('Feature #2', 'initio'),
	        'section'    => 'initio_features_settings',
			'type'    => 'dropdown-pages',
	        'settings'   => 'initio_theme_options[features_page_2]',
			'description' => __('Select Page to Display as One of the Features', 'initio'),
    	));	
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[feature_icon_2]', array(
        'default'        => 'fa-tint',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('feature_icon_2', array(
        'label'      => __('Feature #2 Icon', 'initio'),
        'section'    => 'initio_features_settings',
        'settings'   => 'initio_theme_options[feature_icon_2]',
		'description' => sprintf( __( 'Enter Font Awesome icon name. For icon name refer to: <a href="%1$s" target="_blank">Font Awesome Website</a>', 'initio' ), 'http://fortawesome.github.io/Font-Awesome/icons/' ),
    ));
	//===============================
    $wp_customize->add_setting('initio_theme_options[feature_image_2]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'feature_image_2', array(
        'label'    => __('Feature #2 Image', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[feature_image_2]',
    )));


	//===============================
	$wp_customize->add_setting( 'initio_theme_options[features_page_3]', array(
        	'default'        => '',
			'sanitize_callback' => 'absint',
	        'capability'     => 'edit_theme_options',
    	    'type'           => 'option',
    	));
 
		$wp_customize->add_control('features_page_3', array(
	        'label'      => __('Feature #3', 'initio'),
	        'section'    => 'initio_features_settings',
			'type'    => 'dropdown-pages',
	        'settings'   => 'initio_theme_options[features_page_3]',
			'description' => __('Select Page to Display as One of the Features', 'initio'),
    	));	
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[feature_icon_3]', array(
        'default'        => 'fa-html5',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('feature_icon_3', array(
        'label'      => __('Feature #3 Icon', 'initio'),
        'section'    => 'initio_features_settings',
        'settings'   => 'initio_theme_options[feature_icon_3]',
		'description' => sprintf( __( 'Enter Font Awesome icon name. For icon name refer to: <a href="%1$s" target="_blank">Font Awesome Website</a>', 'initio' ), 'http://fortawesome.github.io/Font-Awesome/icons/' ),
    ));
	//===============================
    $wp_customize->add_setting('initio_theme_options[feature_image_3]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'feature_image_3', array(
        'label'    => __('Feature #3 Image', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[feature_image_3]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[features_page_4]', array(
        	'default'        => '',
			'sanitize_callback' => 'absint',
	        'capability'     => 'edit_theme_options',
    	    'type'           => 'option',
    	));
 
		$wp_customize->add_control('features_page_4', array(
	        'label'      => __('Feature #4', 'initio'),
	        'section'    => 'initio_features_settings',
			'type'    => 'dropdown-pages',
	        'settings'   => 'initio_theme_options[features_page_4]',
			'description' => __('Select Page to Display as One of the Features', 'initio'),
    	));	
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[feature_icon_4]', array(
        'default'        => 'fa-shopping-cart',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('feature_icon_4', array(
        'label'      => __('Feature #4 Icon', 'initio'),
        'section'    => 'initio_features_settings',
        'settings'   => 'initio_theme_options[feature_icon_4]',
		'description' => sprintf( __( 'Enter Font Awesome icon name. For icon name refer to: <a href="%1$s" target="_blank">Font Awesome Website</a>', 'initio' ), 'http://fortawesome.github.io/Font-Awesome/icons/' ),
    ));
	//===============================
    $wp_customize->add_setting('initio_theme_options[feature_image_4]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'feature_image_4', array(
        'label'    => __('Feature #4 Image', 'initio'),
        'section'  => 'initio_features_settings',
        'settings' => 'initio_theme_options[feature_image_4]',
    )));
	//  =============================
    //  = About Us Settings         =
    //  =============================
	$wp_customize->add_section( 'initio_about_settings', array(
    	'title'          => __( 'About Us Section', 'initio' ),
    	'priority'       => 1012,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[about_page]', array(
        	'default'        => '',
			'sanitize_callback' => 'absint',
	        'capability'     => 'edit_theme_options',
    	    'type'           => 'option',
    	));
 
		$wp_customize->add_control('about_page', array(
	        'label'      => __('About Us Page', 'initio'),
	        'section'    => 'initio_about_settings',
			'type'    => 'dropdown-pages',
	        'settings'   => 'initio_theme_options[about_page]',
			'description' => __('Select Page to Display in About Us Section', 'initio'),
    	));	
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[about_bg_color]', array(
    	'default'        => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'about_bg_color', array(
        'label'    => __('Background Color', 'initio'),
        'section'  => 'initio_about_settings',
        'settings' => 'initio_theme_options[about_bg_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[about_bg_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'about_bg_image', array(
        'label'    => __('Background Image', 'initio'),
        'section'  => 'initio_about_settings',
        'settings' => 'initio_theme_options[about_bg_image]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[about_header_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'about_header_color', array(
        'label'    => __('Title Color', 'initio'),
        'section'  => 'initio_about_settings',
        'settings' => 'initio_theme_options[about_header_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[about_text_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'about_text_color', array(
        'label'    => __('Text Color', 'initio'),
        'section'  => 'initio_about_settings',
        'settings' => 'initio_theme_options[about_text_color]',
    )));

	//  =============================
    //  = Our Services Settings     =
    //  =============================
	$wp_customize->add_section( 'initio_services_settings', array(
    	'title'          => __( 'Services Section', 'initio' ),
    	'priority'       => 1013,
		'panel' => 'theme_options',
	) );
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[services_bg_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'services_bg_color', array(
        'label'    => __('Background Color', 'initio'),
        'section'  => 'initio_services_settings',
        'settings' => 'initio_theme_options[services_bg_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[services_bg_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'services_bg_image', array(
        'label'    => __('Background Image', 'initio'),
        'section'  => 'initio_services_settings',
        'settings' => 'initio_theme_options[services_bg_image]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[services_title_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'services_title_color', array(
        'label'    => __('Title Color', 'initio'),
        'section'  => 'initio_services_settings',
        'settings' => 'initio_theme_options[services_title_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[services_text_color]', array(
    	'default'        => '#777777',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'services_text_color', array(
        'label'    => __('Section Text Color', 'initio'),
        'section'  => 'initio_services_settings',
        'settings' => 'initio_theme_options[services_text_color]',
    )));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[services_section_title]', array(
        'default'        => 'Our Services',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('services_section_title', array(
        'label'      => __('Section Text', 'initio'),
        'section'    => 'initio_services_settings',
        'settings'   => 'initio_theme_options[services_section_title]',
    ));

	//===============================
    $wp_customize->add_setting('initio_theme_options[services_image]', array(
        'default'           => get_template_directory_uri() . '/images/assets/ipad-1065284_1280.png',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'services_image', array(
        'label'    => __('Section Image', 'initio'),
        'section'  => 'initio_services_settings',
        'settings' => 'initio_theme_options[services_image]',
    )));
	//===============================
	$wp_customize->add_setting('initio_theme_options[services_img_display]', array(
        'capability' => 'edit_theme_options',
		'sanitize_callback' => 'initio_sanitize_checkbox',
        'type'       => 'option',
		'default'        => '1',
    ));
 
    $wp_customize->add_control('services_img_display', array(
        'settings' => 'initio_theme_options[services_img_display]',
        'label'    => __('Display Image Inside Services Section', 'initio'),
        'section'  => 'initio_services_settings',
        'type'     => 'checkbox',
    ));
	//===============================
	for ( $count = 1; $count <= 6; $count++ ) {
    	$wp_customize->add_setting( 'initio_theme_options[service_page_'.$count.']', array(
        	'default'        => '',
			'sanitize_callback' => 'absint',
	        'capability'     => 'edit_theme_options',
    	    'type'           => 'option',
    	));
 
		$wp_customize->add_control('service_page_'.$count, array(
	        'label'      => __('Service #', 'initio') .$count,
	        'section'    => 'initio_services_settings',
			'type'    => 'dropdown-pages',
	        'settings'   => 'initio_theme_options[service_page_'.$count.']',
			'description' => __('Select Page to Display as One of the Services', 'initio'),
    	));
		//===============================	
		$wp_customize->add_setting( 'initio_theme_options[service_icon_'. $count .']', array(
        	'default'        => '',
			'sanitize_callback' => 'initio_sanitize_cb',
    	    'capability'     => 'edit_theme_options',
        	'type'           => 'option',
 
    	));
 
    	$wp_customize->add_control('service_icon_'.$count, array(
        	'label'      => __('Icon to Display in Box #','initio') . $count,
	        'section'    => 'initio_services_settings',
    	    'settings'   => 'initio_theme_options[service_icon_'.$count.']',
			'description' => sprintf( __( 'Enter Font Awesome icon name. For example: fa-coffee. For icon name refer to: <a href="%1$s" target="_blank">Font Awesome Website</a>', 'initio' ), 'http://fortawesome.github.io/Font-Awesome/icons/' ),
    	));
	}
	//  =============================
    //  = Get In Touch Settings     =
    //  =============================
	$wp_customize->add_section( 'initio_git_settings', array(
    	'title'          => __( 'Get In Touch Section', 'initio' ),
    	'priority'       => 1016,
		'panel' => 'theme_options',
	));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[getin_page]', array(
        	'default'        => '',
			'sanitize_callback' => 'absint',
	        'capability'     => 'edit_theme_options',
    	    'type'           => 'option',
    	));
 
		$wp_customize->add_control('getin_page', array(
	        'label'      => __('Get In Touch Page', 'initio'),
	        'section'    => 'initio_git_settings',
			'type'    => 'dropdown-pages',
	        'settings'   => 'initio_theme_options[getin_page]',
			'description' => __('Select Page to Display in Get In Touch Section', 'initio'),
    	));	
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[getin_bg_color]', array(
    	'default'        => '#252525',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'getin_bg_color', array(
        'label'    => __('Background Color', 'initio'),
        'section'  => 'initio_git_settings',
        'settings' => 'initio_theme_options[getin_bg_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[getin_bg_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'getin_bg_image', array(
        'label'    => __('Background Image', 'initio'),
        'section'  => 'initio_git_settings',
        'settings' => 'initio_theme_options[getin_bg_image]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[getin_header_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'getin_header_color', array(
        'label'    => __('Title Color', 'initio'),
        'section'  => 'initio_git_settings',
        'settings' => 'initio_theme_options[getin_header_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[getin_text_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'getin_text_color', array(
        'label'    => __('Subtitle Color', 'initio'),
        'section'  => 'initio_git_settings',
        'settings' => 'initio_theme_options[getin_text_color]',
    )));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[getin_button_text]', array(
        'default'        => 'Contact us now',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('getin_button_text', array(
        'label'      => __('Button Text', 'initio'),
        'section'    => 'initio_git_settings',
        'settings'   => 'initio_theme_options[getin_button_text]',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[getin_button_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'getin_button_color', array(
        'label'    => __('Button Color', 'initio'),
        'section'  => 'initio_git_settings',
        'settings' => 'initio_theme_options[getin_button_color]',
    )));
	//  =============================
    //  = Latest News Settings      =
    //  =============================
	$wp_customize->add_section( 'initio_news_settings', array(
    	'title'          => __( 'Latest News Section', 'initio' ),
    	'priority'       => 1017,
		'panel' => 'theme_options',
	));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[blog_bg_color]', array(
    	'default'        => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'blog_bg_color', array(
        'label'    => __('Background Color', 'initio'),
        'section'  => 'initio_news_settings',
        'settings' => 'initio_theme_options[blog_bg_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[blog_bg_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_bg_image', array(
        'label'    => __('Background Image', 'initio'),
        'section'  => 'initio_news_settings',
        'settings' => 'initio_theme_options[blog_bg_image]',
    )));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[blog_cat]', array(
        'default'        => '',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('blog_cat', array(
        'label'      => __('Latest News Category', 'initio'),
        'section'    => 'initio_news_settings',
        'settings'   => 'initio_theme_options[blog_cat]',
        'type'    => 'select',
        'choices'    => $options_categories,
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[num_posts]', array(
        'default'        => '3',
		'sanitize_callback' => 'initio_sanitize_number',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('num_posts', array(
        'label'      => __('Number of Posts', 'initio'),
        'section'    => 'initio_news_settings',
        'settings'   => 'initio_theme_options[num_posts]',
    ));
	//===============================
    $wp_customize->add_setting( 'initio_theme_options[blog_section_title]', array(
        'default'        => 'Latest News',
		'sanitize_callback' => 'initio_sanitize_cb',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control('blog_section_title', array(
        'label'      => __('Title Text', 'initio'),
        'section'    => 'initio_news_settings',
        'settings'   => 'initio_theme_options[blog_section_title]',
    ));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[blog_title_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'blog_title_color', array(
        'label'    => __('Title Color', 'initio'),
        'section'  => 'initio_news_settings',
        'settings' => 'initio_theme_options[blog_title_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[blog_post_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'blog_post_color', array(
        'label'    => __('Post Title Color', 'initio'),
        'section'  => 'initio_news_settings',
        'settings' => 'initio_theme_options[blog_post_color]',
    )));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[blog_meta_color]', array(
    	'default'        => '#111111',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'blog_meta_color', array(
        'label'    => __('Post Meta Color', 'initio'),
        'section'  => 'initio_news_settings',
        'settings' => 'initio_theme_options[blog_meta_color]',
    )));
	//  =============================
    //  = Social Settings           =
    //  =============================
	$wp_customize->add_section( 'initio_social_settings', array(
    	'title'          => __( 'Social Links', 'initio' ),
    	'priority'       => 1018,
		'panel' => 'theme_options',
		'description' => __("Enter your profile URL. To remove it, just leave it blank","initio"),
	));
	//===============================
	$wp_customize->add_setting( 'initio_theme_options[social_color]', array(
    	'default'        => '#efefef',
		'sanitize_callback' => 'sanitize_hex_color',
    	'type'           => 'option',
    	'capability'     => 'edit_theme_options',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'social_color', array(
        'label'    => __('Background Color', 'initio'),
        'section'  => 'initio_social_settings',
        'settings' => 'initio_theme_options[social_color]',
    )));
	//===============================
    $wp_customize->add_setting('initio_theme_options[social_bg_image]', array(
        'default'           => '',
		'sanitize_callback' => 'esc_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
 
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'social_bg_image', array(
        'label'    => __('Background Image', 'initio'),
        'section'  => 'initio_social_settings',
        'settings' => 'initio_theme_options[social_bg_image]',
    )));
}
 
add_action('customize_register', 'initio_customize_register');


/**
 * Sets up theme custom styling
 * 
 */
function initio_theme_custom_styling() {
	$initio_theme_options = initio_get_options( 'initio_theme_options' );
	/**
	 * General Settings 
	 */	
	$theme_color = $initio_theme_options['theme_color'];
	$scrollup_color = $initio_theme_options['scrollup_color'];
	$scrollup_hover_color = $initio_theme_options['scrollup_hover_color'];
	/**
	 * Logo Settings 
	 */		
	$logo_width = $initio_theme_options['logo_width'];
	$logo_height = $initio_theme_options['logo_height'];
	$logo_top_margin = $initio_theme_options['logo_top_margin'];
	$logo_left_margin = $initio_theme_options['logo_left_margin'];
	$logo_bottom_margin = $initio_theme_options['logo_bottom_margin'];
	$logo_right_margin = $initio_theme_options['logo_right_margin'];
	$logo_uppercase = $initio_theme_options['logo_uppercase'];
	$google_font_logo = $initio_theme_options['google_font_logo'];
	$logo_font_size = $initio_theme_options['logo_font_size'];
	$logo_font_weight = $initio_theme_options['logo_font_weight'];
	$text_logo_color = $initio_theme_options['text_logo_color'];
	$tagline_font_size = $initio_theme_options['tagline_font_size'];
	$tagline_color = $initio_theme_options['tagline_color'];
	$tagline_uppercase = $initio_theme_options['tagline_uppercase'];
	/**
	 * Navigation Settings
	 */	
	$menu_sticky = $initio_theme_options['menu_sticky'];
	$menu_top_margin = $initio_theme_options['menu_top_margin'];
	$google_font_menu = $initio_theme_options['google_font_menu'];
	$nav_font_size = $initio_theme_options['nav_font_size'];
	$menu_uppercase = $initio_theme_options['menu_uppercase'];
	$nav_font_color = $initio_theme_options['nav_font_color'];
	$nav_border_color = $initio_theme_options['nav_border_color'];
	$nav_bg_color = $initio_theme_options['nav_bg_color'];
	$nav_bg_sub_color = $initio_theme_options['nav_bg_sub_color'];
	$nav_hover_font_color = $initio_theme_options['nav_hover_font_color'];
	$nav_bg_hover_color = $initio_theme_options['nav_bg_hover_color'];
	$nav_cur_item_color = $initio_theme_options['nav_cur_item_color'];
	/**
	 * Typography Settings
	 */	
	$google_font_body = $initio_theme_options['google_font_body'];
	$body_font_size = $initio_theme_options['body_font_size'];
	$body_font_color = $initio_theme_options['body_font_color'];
	/**
	 * Header Settings
	 */	
	$header_bg_color = $initio_theme_options['header_bg_color'];
	$header_opacity = $initio_theme_options['header_opacity'];
	$address_color = $initio_theme_options['address_color'];
	$top_head_color = $initio_theme_options['top_head_color'];
	/**
	 * Image Slider 
	 */	
	$slider_height = $initio_theme_options['slider_height'];
	$captions_pos_left = $initio_theme_options['captions_pos_left'];
	$captions_pos_top = $initio_theme_options['captions_pos_top'];
	$captions_pos_bottom = $initio_theme_options['captions_pos_bottom'];
	$captions_width = $initio_theme_options['captions_width'];
	$captions_title_color = $initio_theme_options['captions_title_color'];
	$captions_text_color = $initio_theme_options['captions_text_color'];
	$captions_button_color = $initio_theme_options['captions_button_color'];
	$slider_dots = $initio_theme_options['slider_dots'];
	$captions_title_size = $initio_theme_options['captions_title_size'];
	$captions_text_size = $initio_theme_options['captions_text_size'];
	/**
	 * Footer Settings
	 */
	$footer_bg_color = $initio_theme_options['footer_bg_color'];
	$copyright_bg_color = $initio_theme_options['copyright_bg_color'];
	$footer_widget_title_color = $initio_theme_options['footer_widget_title_color'];
	$footer_widget_title_border_color = $initio_theme_options['footer_widget_title_border_color'];
	$footer_widget_text_color = $initio_theme_options['footer_widget_text_color'];
	$footer_widget_text_border_color = $initio_theme_options['footer_widget_text_border_color'];
	$footer_social_color = $initio_theme_options['footer_social_color'];
	/**
	 * Blog Settings
	 */	
	$blog_posts_home_color = $initio_theme_options['blog_posts_home_color'];
	$blog_bg_color = $initio_theme_options['blog_bg_color'];
	$blog_title_color = $initio_theme_options['blog_title_color'];
	$blog_post_color = $initio_theme_options['blog_post_color'];
	$blog_meta_color = $initio_theme_options['blog_meta_color'];
	$blog_posts_top_color = $initio_theme_options['blog_posts_top_color'];
	$blog_posts_top_font_color = $initio_theme_options['blog_posts_top_font_color'];
	/**
	* Features Section
	*/
	$features_bg_color = $initio_theme_options['features_bg_color'];
	$features_text_color = $initio_theme_options['features_text_color'];
	$features_title_color = $initio_theme_options['features_title_color'];
	/**
	* About Section
	*/
	$about_text_color = $initio_theme_options['about_text_color'];
	$about_bg_color = $initio_theme_options['about_bg_color'];
	$about_header_color = $initio_theme_options['about_header_color'];
	/**
	* Our Services Section
	*/
	$services_bg_color = $initio_theme_options['services_bg_color'];
	$services_title_color = $initio_theme_options['services_title_color'];
	$services_text_color = $initio_theme_options['services_text_color'];
	/**
	* Get in Touch Section
	*/
	$getin_header_color = $initio_theme_options['getin_header_color'];
	$getin_text_color = $initio_theme_options['getin_text_color'];
	$getin_button_color = $initio_theme_options['getin_button_color'];
	$getin_bg_color = $initio_theme_options['getin_bg_color'];
	/**
	* Social Section
	*/
	$social_color = $initio_theme_options['social_color'];
	
	$output = '';

	/**
	 * General Settings 
	 */
	if ( $theme_color )
	$output .= esc_html('blockquote, address, .page-links a:hover, .post-format-wrap {border-color:' . $theme_color . '}' . "\n");
	$output .= esc_html('.meta span i, .more-link, .post-title h3:hover, #main .standard-posts-wrapper .posts-wrapper .post-single .text-holder-full .post-format-wrap p.link-text a:hover, .breadcrumbs .breadcrumbs-wrap ul li a:hover, #article p a, .navigation a, .link-post i.fa, .quote-post i.fa, #article .link-post p.link-text a:hover, .link-post p.link-text a:hover, .quote-post span.quote-author, .post-single ul.link-pages li a strong, .post-info span i, .footer-widget-col ul li a:hover, .sidebar ul.link-pages li.next-link a span, .sidebar ul.link-pages li.previous-link a span, .sidebar ul.link-pages li i, .sidebar .widget-title h4, .btn-default:hover, .post-tags a, .post-title h2:hover {color:' . $theme_color . '}' . "\n");
	$output .= esc_html('input[type="submit"],button, .page-links a:hover {background:' . $theme_color . '}' . "\n");
	$output .= esc_html('.search-submit,.wpcf7-form-control,.main-navigation ul ul, .content-boxes .circle, .section-title-right:after, .boxtitle:after, .section-title:after, #services h2:after, .content-btn, #comments .form-submit #submit, .post-button, .simple-pagination span, .pagination span, .pagination a {background-color:' . $theme_color . '}' . "\n");
	
	if ( $scrollup_color )
	$output .= esc_html('.back-to-top {color:' . $scrollup_color . '}' . "\n");
	
	if ( $scrollup_hover_color )
	$output .= esc_html('.back-to-top i.fa:hover {color:' . $scrollup_hover_color . '}' . "\n");

	/**
	 * Logo Settings 
	 */	
	if ( $logo_width )
	$output .= esc_html('#logo {width:' . $logo_width . 'px }' . "\n");
	
	if ( $logo_height )
	$output .= esc_html('#logo {height:' . $logo_height . 'px }' . "\n");
	
	if ( $logo_top_margin )
	$output .= esc_html('#logo { margin-top:' . $logo_top_margin . 'px }' . "\n");
	
	if ( $logo_left_margin )
	$output .= esc_html('#logo { margin-left:' . $logo_left_margin . 'px }' . "\n");
	
	if ( $logo_bottom_margin )
	$output .= esc_html('#logo { margin-bottom:' . $logo_bottom_margin . 'px }' . "\n");
	
	if ( $logo_right_margin )
	$output .= esc_html('#logo { margin-right:' . $logo_right_margin . 'px }' . "\n");
	
	if ( $logo_uppercase == '1' )
	$output .= esc_html('#logo {text-transform: uppercase }' . "\n");
	
	if ( $google_font_logo )
	$output .= esc_html('#logo {font-family:' . $google_font_logo . '}' . "\n");
	
	if ( $logo_font_size )
	$output .= esc_html('#logo {font-size:' . $logo_font_size . 'px }' . "\n");
	
	if ( $logo_font_weight )
	$output .= esc_html('#logo {font-weight:' . $logo_font_weight . '}' . "\n");

	if ( $text_logo_color )
	$output .= esc_html('#logo a {color:' . $text_logo_color . '}' . "\n");
	
	if ( $tagline_font_size )
	$output .= esc_html('#logo h5.site-description {font-size:' . $tagline_font_size . 'px }' . "\n");
	
	if ( $tagline_color )
	$output .= esc_html('#logo .site-description {color:' . $tagline_color . '}' . "\n");
	
	if ( $tagline_uppercase == '0' )
	$output .= esc_html('#logo .site-description {text-transform: none}' . "\n");

	if ( $tagline_uppercase == '1' )
	$output .= esc_html('#logo .site-description {text-transform: uppercase}' . "\n");

	/**
	 * Navigation Settings
	 */	
	if ( $menu_top_margin )
	$output .= esc_html('#navbar {margin-top:'. $menu_top_margin .'px}' . "\n");
	
	if ( $google_font_menu )
	$output .= esc_html('#navbar ul li a {font-family:' . $google_font_menu . '}' . "\n");
	
	if ( $nav_font_size )
	$output .= esc_html('#navbar ul li a {font-size:' . $nav_font_size . 'px}' . "\n");
	
	if ( $menu_uppercase == '1' )
	$output .= esc_html('#navbar ul li a {text-transform: uppercase;}' . "\n");
	
	if ( $nav_font_color )
	$output .= esc_html('.navbar-nav li a {color:' . $nav_font_color . '}' . "\n");
	
	if ( $nav_border_color )
	$output .= esc_html('.dropdown-menu {border-bottom: 5px solid ' . $nav_border_color . '}' . "\n");
	
	if ( $nav_bg_color )
	$output .= esc_html('.navbar-nav {background-color:' . $nav_bg_color . '}' . "\n");
	
	if ( $nav_bg_sub_color )
	$output .= esc_html('.dropdown-menu { background:'.$nav_bg_sub_color . '}' . "\n");
	
	if ( $nav_hover_font_color )
	$output .= esc_html('.navbar-nav li a:hover {color:' . $nav_hover_font_color . '}' . "\n");
	
	if ( $nav_bg_hover_color )
	$output .= esc_html('.navbar-nav ul li a:hover, .navbar-nav ul li a:focus, .navbar-nav ul li a.active, .navbar-nav ul li a.active-parent, .navbar-nav ul li.current_page_item a, #menu-navmenu li a:hover { background:' . $nav_bg_hover_color . '}' . "\n");
	
	if ( $nav_cur_item_color )
	$output .= esc_html('.active a { color:' . $nav_cur_item_color . ' !important}' . "\n");
	/**
	 * Typography Settings
	 */	
	if ( $google_font_body != 'None' )
	$output .= esc_html('body {font-family:' . $google_font_body . '}' . "\n");
	
	if ( $body_font_size )
	$output .= esc_html('body, p {font-size:' . $body_font_size . 'px}' . "\n");
	
	if ( $body_font_color )
	$output .= esc_html('body {color:' . $body_font_color . '}' . "\n");
	/**
	 * Header Settings
	 */
	if ( $header_bg_color )
	$output .= esc_html('#header-holder { background-color: ' . $header_bg_color . '}' . "\n");
	
	if ( $header_opacity )
	$output .= esc_html('#header-holder {opacity:'. $header_opacity .'}' . "\n");
	
	if ( $address_color )
	$output .= esc_html('#header-top .top-phone,#header-top p, #header-top a, #header-top i { color:' . $address_color . '}' . "\n");
	
	if ( $top_head_color )
	$output .= esc_html('#header-top { background-color: ' . $top_head_color . '}' . "\n");
	/**
	 * Image Slider 
	 */	
	if ( $slider_height )
	$output .= esc_html('.banner ul li { height:' . $slider_height . 'px;}' . "\n");

	if ( $captions_title_color )
	$output .= esc_html('.banner .inner h1 { color:' . $captions_title_color . '}' . "\n");
	$output .= esc_html('.iis-caption-title a { color:' . $captions_title_color . '}' . "\n");
	
	if ( $captions_text_color )
	$output .= esc_html('.banner .inner p { color: ' . $captions_text_color . '}' . "\n");
	$output .= esc_html('.iis-caption-content p { color: ' . $captions_text_color . '}' . "\n");
	
	if ( $captions_button_color )
	$output .= esc_html('.banner .btn { color: ' . $captions_button_color . '}' . "\n");
	$output .= esc_html('.banner .btn { border-color: ' . $captions_button_color . '}' . "\n");	
	
	if ( $captions_pos_left )
	$output .= esc_html('.banner .inner { padding-left: ' . $captions_pos_left . '%}' . "\n");
	$output .= esc_html('.iis-caption { left: ' . $captions_pos_left . '%}' . "\n");
	
	if ( $captions_pos_top )
	$output .= esc_html('.banner .inner { padding-top: ' . $captions_pos_top . 'px}' . "\n");
	
	if ( $captions_pos_bottom )
	$output .= esc_html('.iis-caption { bottom: ' . $captions_pos_bottom . '%}' . "\n");
	
	if ( $captions_width )
	$output .= esc_html('.banner .inner { width: ' . $captions_width . '%}' . "\n");
	$output .= esc_html('.iis-caption { max-width: ' . $captions_width . '%}' . "\n");
	
	if ( $slider_dots == false )
	$output .= esc_html('.banner ol.dots { display: none;}' . "\n");
	
	if ( $captions_title_size )
	$output .= esc_html('.ideal-image-slider .iis-caption .iis-caption-title a { font-size: ' . $captions_title_size . 'px}' . "\n");
	$output .= esc_html('.ideal-image-slider .iis-caption .iis-caption-title a { line-height: ' . $captions_title_size . 'px}' . "\n");
	
	if ( $captions_text_size )
	$output .= esc_html('.iis-caption-content p { font-size: ' . $captions_text_size . 'px}' . "\n");
	/**
	 * Footer Settings
	 */
	if ( $footer_bg_color )
	$output .= esc_html('#footer { background-color:' . $footer_bg_color . '}' . "\n");

	if ( $copyright_bg_color )
	$output .= esc_html('#copyright { background-color:' . $copyright_bg_color . '}' . "\n");
	
	if ( $footer_widget_title_color )
	$output .= esc_html('.footer-widget-col h4 { color:' . $footer_widget_title_color . '}' . "\n");
	
	if ( $footer_widget_title_border_color )
	$output .= esc_html('.footer-widget-col h4 { border-bottom: 4px solid ' . $footer_widget_title_border_color . '}' . "\n");
	
	if ( $footer_widget_text_color )
	$output .= esc_html('.footer-widget-col a, .footer-widget-col { color:' . $footer_widget_text_color . '}' . "\n");

	if ( $footer_widget_text_border_color )
	$output .= esc_html('.footer-widget-col ul li { border-bottom: 1px solid ' . $footer_widget_text_border_color . '}' . "\n");
	
	if ( $footer_social_color )
	$output .= esc_html('#social-bar-footer ul li a i { color:' . $footer_social_color . '}' . "\n");
	/**
	 * Blog Settings 
	 */
	if ($blog_posts_home_color)
	$output .= esc_html('.home-blog {background: none repeat scroll 0 0 ' . $blog_posts_home_color . '}' . "\n");
	
	if ($blog_meta_color)
	$output .= esc_html('.from-blog .post-info span a, .from-blog .post-info span {color:' . $blog_meta_color . ';}' . "\n");

	if ($blog_post_color)
	$output .= esc_html('.from-blog h3 {color:' . $blog_post_color . ';}' . "\n");
	
	if ($blog_title_color)
	$output .= esc_html('.from-blog h2 {color:' . $blog_title_color . ';}' . "\n");
	
	if ($blog_bg_color)
	$output .= esc_html('.from-blog {background: none repeat scroll 0 0 ' . $blog_bg_color . ';}' . "\n");
	
	if ($blog_posts_top_color)
	$output .= esc_html('.blog-top-image {background: none repeat scroll 0 0 ' . $blog_posts_top_color . ';}' . "\n");
	
	if ($blog_posts_top_font_color)
	$output .= esc_html('.blog-top-image h1.section-title, .blog-top-image h1.section-title-right {color:' . $blog_posts_top_font_color . ';}' . "\n");
	/**
	* Features Section
	*/
	if ( $features_bg_color )
	$output .= esc_html('#features { background-color:' . $features_bg_color . ';}' . "\n");
	
	if ( $features_text_color )
	$output .= esc_html('h4.sub-title, #features p { color:' . $features_text_color . ';}' . "\n");
	
	if ( $features_title_color )
	$output .= esc_html('#features .section-title, #features h3 { color:' . $features_title_color . ';}' . "\n");
	/**
	* About Section
	*/
	if ($about_text_color)
	$output .= esc_html('.about p {color:' . $about_text_color . ';}' . "\n");
	
	if ($about_header_color)
	$output .= esc_html('.about h2, .about h2 a {color:' . $about_header_color . ';}' . "\n");
	
	if ($about_bg_color)
	$output .= esc_html('.about {background: none repeat scroll 0 0 ' . $about_bg_color . ';}' . "\n");
	/**
	* Our Services Section
	*/
	if ( $services_bg_color )
	$output .= esc_html('#services { background-color:' . $services_bg_color . ';}' . "\n");
	
	if ( $services_title_color )
	$output .= esc_html('#services h2, #services h3 { color:' . $services_title_color . ';}' . "\n");
	
	if ( $services_text_color )
	$output .= esc_html('#services p { color:' . $services_text_color . ';}' . "\n");
	/**
	* Get in Touch Section
	*/
	if ($getin_bg_color)
	$output .= esc_html('.get-in-touch { background-color: ' . $getin_bg_color . '}' . "\n");
	
	if ($getin_header_color)
	$output .= esc_html('.get-in-touch h2.boxtitle, .get-in-touch h2.boxtitle a {color:' . $getin_header_color . ';}' . "\n");
	
	if ($getin_text_color)
	$output .= esc_html('.get-in-touch h4.sub-title, .get-in-touch p {color:' . $getin_text_color . ';}' . "\n");
	
	if ( $getin_button_color )
	$output .= esc_html('.git-link { color: ' . $getin_button_color . '}' . "\n");
	$output .= esc_html('.git-link { border-color: ' . $getin_button_color . '}' . "\n");
	/**
	* Social Section
	*/
	if ( $social_color )
	$output .= esc_html('.social { background-color: ' . $social_color . '}' . "\n");
			
	// Output styles
	if ( isset( $output ) && $output != '' ) {
		$output = strip_tags( $output );
		$output = "<!--Custom Styling-->\n<style media=\"screen\" type=\"text/css\">\n" . $output . "</style>\n";
		echo $output;
	}
}
add_action('wp_head','initio_theme_custom_styling');

/**
 * Sanitization for checkbox input
 *
 * @param $input string (1 or empty) checkbox state
 * @return $output '1' or false
 */
function initio_sanitize_checkbox( $input ) {
	if ( $input ) {
		$output = '1';
	} else {
		$output = false;
	}
	return $output;
}

/**
 * Sanitization for font style
 */
function initio_sanitize_font_style( $value ) {
	$recognized = initio_font_styles();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'initio_font_style', current( $recognized ) );
}

/**
 * Sanitization for opacity value
 */
function initio_sanitize_opacity( $value ) {
	$recognized = initio_opacity();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'initio_opacity', current( $recognized ) );
}

/**
 * Sanitization for layout value
 */
function initio_sanitize_theme_layout( $value ) {
	$recognized = initio_layout();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'initio_layout', current( $recognized ) );
}

/**
 * Sanitization for navigation position
 */
function initio_sanitize_post_nav( $value ) {
	$recognized = initio_post_nav();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'initio_post_nav', current( $recognized ) );
}

/**
 * Sanitization for post info position
 */
function initio_sanitize_post_info( $value ) {
	$recognized = initio_post_info();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'initio_post_info', current( $recognized ) );
}

/**
 * Sanitization for blog content value
 */
function initio_sanitize_blog_content( $value ) {
	$recognized = initio_blog_content();
	if ( array_key_exists( $value, $recognized ) ) {
		return $value;
	}
	return apply_filters( 'initio_blog_content', current( $recognized ) );
}

function initio_sanitize_cat ( $input, $option ) {
	$output = '';
	if ( array_key_exists( $input, $option ) ) {
		$output = $input;
	}
	return $output;
}

/**
 * Sanitization callback function
 */
function initio_sanitize_cb( $input ) {     
	return wp_kses_post( $input );
}

/**
 * Sanitization to validate that the input value is an integer
 */
function initio_sanitize_number( $input ) {
	return absint( $input );
}

/**
 * Sanitization for image position
*/
function initio_sanitize_image_pos( $input ) {
	$valid = array(
       'left' => 'left',
        'right' => 'right',
        'center' => 'center',
	);
	
	if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function initio_sanitize_image_repeat( $input ) {
	$valid = array(
		'no-repeat' => 'no-repeat',
		'repeat' => 'repeat',
		'repeat-x' => 'repeat-x',
		'repeat-y' => 'repeat-y',
	);
	
	if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function initio_sanitize_email( $email ) {
	if(is_email( $email )){
		return $email;
	}else{
		return '';
	}
} 

/**
 * Function for options that do not require sanitization.
 */
function initio_no_sanitize( $input ) {
} 

function initio_font_styles() {
	$default = array(
		'Raleway' => 'Raleway',
		);
	return apply_filters( 'initio_font_styles', $default );
}

function initio_opacity() {
	$default = array(
		'1' => '1',
		'0.9'	=> '0.9',
		'0.8'	=> '0.8',
		'0.7'	=> '0.7',
		'0.6'	=> '0.6',
		'0.5'	=> '0.5',
		'0.4'	=> '0.4',
		'0.3'	=> '0.3',
		'0.2'	=> '0.2',
		'0.1'	=> '0.1',
		'0'	=> '0',
	);
	return apply_filters( 'initio_opacity', $default );
}

function initio_layout() {
	$default = array(
	'col1' => 'col1', 
	'col2-l' => 'col2-l', 
	'col2-r' =>'col2-r',
	);
	return apply_filters( 'initio_layout', $default );
}

function initio_blog_content() {
	$default = array(
	'excerpt' => 'excerpt', 
	'full' => 'full', 
	);
	return apply_filters( 'initio_blog_content', $default );
}

function initio_post_nav() {
	$default = array(
		'disable' => 'disable',
		'sidebar' => 'sidebar',
		'below' => 'below',
	);
	return apply_filters( 'initio_post_nav', $default );
}

function initio_post_info() {
	$default = array(
		'disable' => 'disable',
		'above' => 'above',
	);
	return apply_filters( 'initio_post_info', $default );
}

function initio_get_option_defaults() {
	$defaults = array(
		'theme_color' => '#10b4d1',
		'breadcrumbs' => '1',
		'animation' => false,
		'responsive_design' => '1',
		'scrollup' => '1',
		'scrollup_color' => '#888888',
		'scrollup_hover_color' => '#10b4d1',
		'social_section_on' => false,
		'logo_width' => '300',
		'logo_height' => '30',
		'logo_top_margin' => '8',
		'logo_left_margin' => '0',
		'logo_bottom_margin' => '0',
		'logo_right_margin' => '25',
		'logo_uppercase' => '1',
		'google_font_logo' => 'Raleway',
		'logo_font_size' => '24',
		'logo_font_weight' => '700',
		'text_logo_color' => '#000000',
		'enable_logo_tagline' => false,
		'tagline_font_size' => '16',
		'tagline_color' => '#000000',
		'tagline_uppercase' => '1',
		'menu_sticky' => '1',
		'menu_top_margin' => '0',
		'google_font_menu' => 'Raleway',
		'nav_font_size' => '13',
		'menu_uppercase' => '1',
		'nav_font_color' => '#000000',
		'nav_border_color' => '#000000',
		'nav_bg_color' => '#ffffff',
		'nav_bg_sub_color' => '#10b4d1',
		'nav_hover_font_color' => '#10b4d1',
		'nav_bg_hover_color' => '#f2f2f2',
		'nav_cur_item_color' => '#dd3333',
		'google_font_body' => 'Raleway',
		'body_font_size' => '14',
		'body_font_color' => '#252525',
		'header_bg_color' => '#ffffff',
		'header_opacity' => '1',
		'header_top_enable' => false,
		'header_address' => '1234 Street Name, City Name, United States',
		'header_phone' => '(123) 456-7890',
		'header_email' => 'info@yourdomain.com',
		'address_color' => '#ffffff',
		'top_head_color' => '#10b4d1',
		'image_slider_on' => false,
		'getstarted_section_on' => false,
		'features_section_on' => false,
		'about_section_on' => true,
		'services_section_on' => false,
		'getin_home_on' => false,
		'blog_section_on' => true,
		'default_image_slider' => 'ideal',
		'slider_height' => '500',
		'image_slider_cat' => '',
		'slideshow_speed' => '5000',
		'animation_speed' => '800',
		'slider_num' => '3',
		'image_slider_effect' => 'fade',
		'captions_on' => false,
		'captions_pos_left' => '0',
		'captions_pos_top' => '120',
		'captions_pos_bottom' => '5',
		'captions_width' => '90',
		'captions_title_size' => '24',
		'captions_text_size' => '14',
		'captions_title_color' => '#ffffff',
		'captions_text_color' => '#ffffff',
		'captions_button_color' => '#ffffff',
		'captions_button' => '1',
		'caption_button_text' => 'Read More',
		'slider_dots' => '1',
		'footer_bg_color' => '#252525',
		'copyright_bg_color' => '#111111',
		'footer_widget_title_color' => '#ffffff',
		'footer_widget_title_border_color' => '#444444',
		'footer_widget_text_color' => '#ffffff',
		'footer_widget_text_border_color' => '#444444',
		'footer_social_color' => '#efefef',
		'footer_widgets' => '1',
		'footer_copyright_text' => 'Copyright '.date('Y').' '.get_bloginfo('site_title'),
		'layout_settings' => 'col2-l',
		'blog_posts_home_color' => '#efefef',
		'blog_posts_home_image' => '',
		'blog_posts_top_color' => '#efefef',
		'blog_posts_top_font_color' => '#111111',
		'blog_posts_top_image' => '',
		'blog_content' => 'excerpt',
		'blog_excerpt' => '50',
		'simple_paginaton' => false,
		'post_navigation' => 'sidebar',
		'post_info' => 'above',
		'featured_img_post' => '1',
		'features_bg_color' => '#ffffff',
		'features_bg_image' => '',
		'features_title_color' => '#111111',
		'features_text_color' => '#111111',
		'features_section_title' => 'Clean Design & Great Functionality',
		'features_section_desc' => 'Clean Design & Great Functionality',
		'features_page_1' => '',
		'features_page_2' => '',
		'features_page_3' => '',
		'features_page_4' => '',
		'feature_icon_1' => 'fa-tablet',
		'feature_image_1' => '',
		'feature_icon_2' => 'fa-tint',
		'feature_image_2' => '',
		'feature_icon_3' => 'fa-html5',
		'feature_image_3' => '',
		'feature_icon_4' => 'fa-shopping-cart',
		'feature_image_4' => '',
		'about_page' => '',
		'about_bg_color' => '#252525',
		'about_bg_image' => '',
		'about_header_color' => '#ffffff',
		'about_text_color' => '#ffffff',
		'services_bg_color' => '#ffffff',
		'services_bg_image' => '',
		'services_title_color' => '#111111',
		'services_text_color' => '#777777',
		'services_section_title' => 'Our Services',
		'services_image' => get_template_directory_uri() . '/images/assets/ipad-1065284_1280.png',
		'services_img_display' => '1',
		'service_page_1' =>'',
		'service_page_2' =>'',
		'service_page_3' =>'',
		'service_page_4' =>'',
		'service_page_5' =>'',
		'service_page_6' =>'',
		'service_icon_1' => 'fa-anchor',
		'service_icon_2' => 'fa-cog',
		'service_icon_3' => 'fa-tachometer',
		'service_icon_4' => 'fa-paper-plane',
		'service_icon_5' => 'fa-code',
		'service_icon_6' => 'fa-umbrella',
		'getin_bg_color' => '#252525',
		'getin_bg_image' => '',
		'getin_header_color' => '#ffffff',
		'getin_page' =>'',
		'getin_text_color' => '#ffffff',
		'getin_button_text' => 'Contact us now',
		'getin_button_color' => '#ffffff',
		'blog_bg_color' => '#ffffff',
		'blog_bg_image' => '',
		'blog_cat' => '',
		'num_posts' => '3',
		'blog_section_title' => 'Latest News',
		'blog_title_color' => '#111111',
		'blog_post_color' => '#111111',
		'blog_meta_color' => '#111111',
		'social_color' => '#eeeeee',
		'social_bg_image' => '',
	);
	return apply_filters( 'initio_get_option_defaults', $defaults );
}

function initio_get_options() {
    // Options API
    return wp_parse_args( 
        get_option( 'initio_theme_options', array() ), 
        initio_get_option_defaults() 
    );
}
