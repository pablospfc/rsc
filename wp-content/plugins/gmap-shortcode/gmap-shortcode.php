<?php
/**
 * Plugin Name: GMap Shortcode
 * Plugin URI: http://www.jumptoweb.com
 * Description: This plugin make you happy when you need to add Google Maps to your pages/posts. You only need to know the latitude and the longitude, and use the shortcode [gmap_mc lat="LATITUDE" long="LONGITUDE"]. 
 * Version: 2.0
 * Author: Manuel Costales
 * Author URI: http://www.manuelcostales.com
 */
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );
/*add javascripts to the header*/
function gmap_shortcode_mc_iframe( $atts )
{
$lat = $atts['lat'];
$long = $atts['long'];
$mapwidth = $atts['mapwidth'];
$width = $atts['width'];
$height = $atts['height'];

if (! $lat) $lat = 21.5513258;
if (! $long) $long = -79.6017351;
if (! $mapwidth) $mapwidth = '1500km';
if (! $width ) $width = 350;
if (! $height ) $height = 250;

preg_match_all('!\d+!', $mapwidth, $nums);
$mapwidthnum = $nums[0][0];

if ( strpos( $mapwidth, 'km' ) !== false )
{$zoom = 3549 * $mapwidthnum;}
else{$zoom = 5712 * $mapwidthnum;}

$link = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d'.$zoom.'!2d'.$long.'!3d'.$lat.'!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1407089338193';
$iframe = '<iframe src="'.$link.'" width="'.$width.'" height="'.$height.'" frameborder="0" style="border:0"></iframe>';

return $iframe;
}

add_shortcode( 'gmap_mc', 'gmap_shortcode_mc_iframe' );