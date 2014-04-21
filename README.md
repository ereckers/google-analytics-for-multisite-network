# Google Analytics for Multisite Network

Requires at least: 3.8.1
Tested up to: 3.8.1
Stable tag: 1.0.0

Inserts latest Google Analytics Asynchronous tracking code into the head (recommended) of your site while swapping in the active domain of a mapped domain WordPress Multisite Network installation.

== Description ==

Google Analytics for WordPress Multisite Network using mapped domains. Version 1.0.0 is nothing more then a hook into the header that swaps in the current domain. There is no ability to override via options. It is simply a drop-in at the moment meant for those who are lords of their multisite networks.

<em>Warning: this is a global insert. Individual sites/domains/installs will not be able to add a custom Google UA.</em>

## To Use:

Update plugin file with your own Google Analytics ID. Open file `google-analytics-for-multisite-network.php` and replace `_PUT_YOUR_GOOGLE_UA_ID_HERE_`.

#### More Information

Visit the <a href="http://www.redbridgenet.com/">Red Bridge Internet</a> site for more information about <a href="http://www.redbridgenet.com/google-analytics-for-multisite-network/">Google Analytics for Multisite Network</a> plugin.

#### Resources

<a href="https://developers.google.com/analytics/devguides/collection/gajs/gaTrackingSite">Tracking Multiple Domains - Web Tracking (ga.js)</a>


== Installation ==

1. Download the plugin and unzip it.
2. Upload the folder /google-analytics-for-multisite-network to your /wp-content/plugins/ folder.
3. Activate the plugin from your WordPress admin panel.
4. Installation finished.

== Screenshots ==

1. At the moment none.

== Frequently Asked Questions ==

= Why was this plugin created? =

Couldn't find anything that did the job. If you find something that can, drop me a note and I'll retire this thing.

= Why did you release this plugin? =

It's nothing more then a simple hook that's packaged up in a plugin. If it can help others, let it spread its wings and fly.

= Why shouldn't this just be added to a theme's functions.php file? =

Upgradeability, portability, backwards compatibility, and other *abilities. If for some reason this function were in need of customization due to a WordPress version upgrade, the plugin will be centrally responsible for releasing the fix as opposed to updating the theme(s).

== Changelog ==

= 1.0.0 =

* Initial release

== Upgrade Notice ==

