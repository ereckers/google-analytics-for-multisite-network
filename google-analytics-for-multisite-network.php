<?php
/*
Plugin Name: Google Analytics for Multisite Network
Plugin URI: http://www.redbridgenet.com/google-analytics-for-multisite-network/
Description: Google Analytics for WordPress Multisite Network using mapped domains. Version 1.0.0 is nothing more then a hook into the header that swaps in the current domain. There is no ability to override via options. It is simply a drop-in at the moment meant for those who are lords of their multisite networks.
Version: 1.0.0
Author: Ed Reckers (Red Bridge Internet)
Author URI: http://www.redbridgenet.com
License: GPL2
*/
/*
 *
 * Include the Google Analytics Tracking Code (ga.js)
 * 
 * @ http://code.google.com/apis/analytics/docs/tracking/asyncUsageGuide.html
 *
 */
abstract class GAMU_RedBridge_Base {

	// I'm using this dude's Class setup: http://wptip.me/classes-in-wordpress-plugins-themes

	private static $reg = array();

	public static function init() {
		add_action('wp_head', array(static::instance(), '_setup'));
	}

	public static function instance() {
		$cls = get_called_class();
		!isset(self::$reg[$cls]) && self::$reg[$cls] = new $cls;
		return self::$reg[$cls];
	}

	abstract public function _setup();
}

class GAMU_RedBridge extends GAMU_RedBridge_Base {

	/**
	 * Google Analytics Tracking ID
	 *
	 * @var string
	 */
	protected $google_ua = "_PUT_YOUR_GOOGLE_UA_ID_HERE_";

	/**
	 * Active Currently Viewed Domain
	 *
	 * @var string
	 */
	protected $domain;

	// don't need the boilerplate here. Just the _setup mehod.
	public function _setup() {
		// add actions here
		require('analytics-script.php');
	}

	/**
	 * Get the google_ua value
	 * 
	 * This will eventually be pulled from options // $options['ga_enable']
	 *
	 * @return string
	 */
	function get_google_ua() {
		return $this->google_ua;
	}

	/**
	 * Get active domain, the current viewed domain
	 * 
	 * @return string
	 */
	function get_active_domain() {
		//$this->domain = network_site_url();
		// there has got to be a WP way of doing this (or can I tap into the MU Plugin?)
		$parse = parse_url( $_SERVER['SERVER_NAME'] );

		// remove www
		$this->domain = preg_replace('/^www\./', '', $parse['path'] );

		return $this->domain;
	}

}
GAMU_RedBridge::init();

?>
