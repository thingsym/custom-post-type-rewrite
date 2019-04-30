=== Custom Post Type Rewrite ===

Contributors: thingsym
Donate link:
Link: https://github.com/thingsym/custom-post-type-rewrite
Tags: custom post type, permalink structure, permalink, permalinks
Requires at least: 3.8
Requires PHP: 5.4
Tested up to: 5.0.3
Stable tag: 1.0.2
License: GPL2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This WordPress plugin adds default custom post type permalinks.

== Description ==

By default, there are no some permalinks of custom post type. The Custom Post Type Rewrite plugin adds permalink structure of custom post type. Following:

* date-based
* author-based
* front

== Installation ==

1. Download and unzip files. Or install Custom Post Type Rewrite plugin using the WordPress plugin installer. In that case, skip 2.
2. Upload "custom-post-type-rewrite" to the "/wp-content/plugins/" directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Save permalink structure and refresh permalinks through the 'Settings > Permalinks' menu in WordPress.
5. Have fun!

**IMPORTANT**: By default, WordPress will not work the Custom Post Type Rewrite. You need to refresh permalinks.

== Changelog ==

= 1.0.2 =
* fix add_rewrite_rule
* fix date-based permalink structure
* fix phpunit tests

= 1.0.1 =
* refactoring
* add phpunit and tests

= 1.0.0 =
* Initial release

== Upgrade Notice ==

= 1.0.2 =
* Requires at least version 3.8 of the WordPress
