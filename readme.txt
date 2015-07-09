=== Noindex Password-Protected Posts ===
Contributors: kylegilman
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=kylegilman@gmail.com&item_name=Noindex%20Password-Protected%20Posts
Tags: noindex, password
Requires at least: 1.2
Tested up to: 4.3
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Disables search-engine indexing for all password-protected posts.

== Description ==

This plugin does one thing and one thing only. It adds the text `<meta name="robots" content="noindex">` to the header of any password-protected post. Google and all other respectable search engines will leave your password-protected pages out of their search results.

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the plugin from plugins page.

== Changelog ==

= 1.0.1 - July 2, 2014 =
* Fixed PHP notice: Use of undefined constant kgnoipp_print_header

= 1.0 - June 30, 2014 =
* Initial release
