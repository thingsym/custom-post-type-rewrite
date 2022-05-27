=== Custom Post Type Rewrite ===

Contributors: thingsym
Link: https://github.com/thingsym/custom-post-type-rewrite
Donate link: https://github.com/sponsors/thingsym
Tags: custom post type, permalink structure, permalink, permalinks
Stable tag: 1.1.4
Tested up to: 5.9.0
Requires at least: 4.9
Requires PHP: 5.6
License: GPL2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This WordPress plugin adds default custom post type permalinks.

== Description ==

By default, there are no some permalinks of custom post type. The Custom Post Type Rewrite plugin adds permalink structure of custom post type. Following:

* date-based
* author-based
* front

Note: Regarding has_archive and rewrite in $args of Parameters, the priority of the rewrite rule conforms to register_post_type().

== Installation ==

1. Download and unzip files. Or install Custom Post Type Rewrite plugin using the WordPress plugin installer. In that case, skip 2.
2. Upload "custom-post-type-rewrite" to the "/wp-content/plugins/" directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Save permalink structure and refresh permalinks through the 'Settings > Permalinks' menu in WordPress.
5. Have fun!

**IMPORTANT**: By default, WordPress will not work the Custom Post Type Rewrite. You need to refresh permalinks.

= Test Matrix =

For operation compatibility between PHP version and WordPress version, see below [Github Actions](https://github.com/thingsym/custom-post-type-rewrite/actions).

= Contribution =

Small patches and bug reports can be submitted a issue tracker in Github. Forking on Github is another good way. You can send a pull request.

* [custom-post-type-rewrite - GitHub](https://github.com/thingsym/custom-post-type-rewrite)
* [Custom Post Type Rewrite - WordPress Plugin](https://wordpress.org/plugins/custom-post-type-rewrite/)

If you would like to contribute, here are some notes and guidlines.

* All development happens on the **develop** branch, so it is always the most up-to-date
* The **master** branch only contains tagged releases
* If you are going to be submitting a pull request, please submit your pull request to the **develop** branch
* See about [forking](https://help.github.com/articles/fork-a-repo/) and [pull requests](https://help.github.com/articles/using-pull-requests/)

== Changelog ==

= 1.1.4 =
* change mysql from version 8.0 to version 5.7 using docker image
* fix indent style
* change plugin initialization to wp_loaded hook

= 1.1.3 =
* fix 'Trying to get property 'permalink_structure' of non-object' warning
* change plugin initialization to plugins_loaded hook
* replace assert from assertEquals to assertSame

= 1.1.2 =
* update wp-plugin-unit-test.yml
* bump up yoast/phpunit-polyfills version
* change os to ubuntu-20.04 for ci
* add Upgrade Notice
* change requires at least to wordpress 4.9
* change requires to PHP 5.6

= 1.1.1 =
* add timeout-minutes to workflows
* add phpunit-polyfills
* tested up to 5.8.0
* add .editorconfig

= 1.1.0 =
* tested up to 5.7.0
* separate a class into a class file
* add test case
* add sponsor link
* add FUNDING.yml
* add donate link
* update wordpress-test-matrix
* add GitHub actions for CI/CD, remove .travis.yml

= 1.0.4 =
* fix rewrite_rule

= 1.0.3 =
* fix indent and reformat with phpcs and phpcbf
* add composer.json for test
* add static code analysis config
* change Requires at least from 3.4.1 to 3.8

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

= 1.1.2 =
* Requires at least version 4.9 of the WordPress
* Requires PHP version 5.6

= 1.0.2 =
* Requires at least version 3.8 of the WordPress
