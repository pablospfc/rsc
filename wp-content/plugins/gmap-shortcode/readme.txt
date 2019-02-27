=== GMap Shortcode ===

Contributors: mcostales84
Donate Link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VWWTUHZWRS4DG
Tags: google map, 
Requires at least: 3.0.1
Tested up to: 4.1
Stable tag: 2.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin make you happy when you need to add Google Maps to your pages/posts.

== Description ==

**WORKS WITH THE NEW VERSION OF GOOGLE MAPS**

You can add a map using a shortcode.

You only need to:

1. Go to https://www.google.com/maps

2. Search the address you want to embed in your website. Drag and drop the map to adjust it to the section you want.

3. Copy the latitude and longitude.

4. Go to the page you want to add the map and paste this shortcode: [gmap_mc lat="LATITUDE" long="LONGITUDE"]


To keep in mind:

- The default dimensions are **350x250**

- The defaults latitude and longitude point to **Cuba**

- You can set your own dimensions using these parameters [gmap_mc lat="LATITUDE" long="LONGITUDE" width="600" height="250"]

- You can set the zoom of your map using the parameter **mapwidth**, like this [gmap_mc lat="LATITUDE" long="LONGITUDE" width="600" height="250" mapwidth="3000km"]. The zoom is assumed to be in miles unless you specify km. The default zoom is **1500km**

== Installation ==

To install this plugin just follow the standard procedure.

or

1. Upload 'gmap-shortcode.php' to the '/wp-content/plugins/'' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Any question? =

Send me an email at mcostales@jumptoweb.com and I will answer you as soon as I can.

== Screenshots ==

1. Copy the Latitude and Longitude from the url. The first one is the Latitude, and the second one the Longitude.
2. Create the GMap using the shortcode in this way. The required parameters are the Latitude and Longitude. Width and height are optional, and the same with the mapwidth.
3. Publish the page/post and you will see the map!

== Changelog ==

= 2.0 =
Add compatibility with new version of Google Map.

= 1.0 =
Just launch the plugin!
