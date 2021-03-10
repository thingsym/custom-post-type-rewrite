# Introducing Custom Post Type Rewrite

This WordPress plugin adds default custom post type permalinks.

## Add permalink structure of custom post type

By default, there are no some permalinks of custom post type. The Custom Post Type Rewrite plugin adds permalink structure of custom post type. Following:

* date-based
* author-based
* front

## How do I use it?

1. Download and unzip files. Or install Custom Post Type Rewrite plugin using the WordPress plugin installer. In that case, skip 2.
2. Upload "custom-post-type-rewrite" to the "/wp-content/plugins/" directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Save permalink structure and refresh permalinks through the 'Settings > Permalinks' menu in WordPress.
5. Have fun!

**IMPORTANT**: By default, WordPress will not work the Custom Post Type Rewrite. You need to refresh permalinks.

## WordPress Plugin Directory

Custom Post Type Rewrite is hosted on the WordPress Plugin Directory.

[https://wordpress.org/plugins/custom-post-type-rewrite/](https://wordpress.org/plugins/custom-post-type-rewrite/)

## Test Matrix

For operation compatibility between PHP version and WordPress version, see below [Github Actions](https://github.com/thingsym/custom-post-type-rewrite/actions).

## Contribution

### Patches and Bug Fixes

Small patches and bug reports can be submitted a issue tracker in Github. Forking on Github is another good way. You can send a pull request.

1. Fork [Custom Post Type Rewrite](https://github.com/thingsym/custom-post-type-rewrite) from GitHub repository
2. Create a feature branch: git checkout -b my-new-feature
3. Commit your changes: git commit -am 'Add some feature'
4. Push to the branch: git push origin my-new-feature
5. Create new Pull Request

## Changelog

* Version 1.0.4
	* fix rewrite_rule
* Version 1.0.3
	* fix indent and reformat with phpcs and phpcbf
	* add composer.json for test
	* add static code analysis config
	* change Requires at least from 3.4.1 to 3.8
* Version 1.0.2
	* fix add_rewrite_rule
	* fix date-based permalink structure
	* fix phpunit tests
* Version 1.0.1
	* refactoring
	* add phpunit and tests
* Version 1.0.0
	* Initial release

## Upgrade Notice

* 1.0.2
	* Requires at least version 3.8 of the WordPress

## License

Licensed under [GPLv2](https://www.gnu.org/licenses/gpl-2.0.html).
