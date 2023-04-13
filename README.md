# Introducing Custom Post Type Rewrite

Custom Post Type Rewrite plugin adds default custom post type permalinks.
 plugin adds default custom post type permalinks.

## Add permalink structure of custom post type

By default, there are no some permalinks of custom post type. The Custom Post Type Rewrite plugin adds permalink structure of custom post type. Following:

* date-based
* author-based
* front

Note: Regarding has_archive and rewrite in $args of Parameters, the priority of the rewrite rule conforms to register_post_type().

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

## Contribution

Small patches and bug reports can be submitted a issue tracker in Github.

* VCS - Github: [https://github.com/thingsym/custom-post-type-rewrite/](https://github.com/thingsym/custom-post-type-rewrite/)

You can also contribute by answering issues on the forums.

* Forum: [https://wordpress.org/support/plugin/custom-post-type-rewrite/](https://wordpress.org/support/plugin/custom-post-type-rewrite/)
* Issues: [https://github.com/thingsym/custom-post-type-rewrite/issues](https://github.com/thingsym/custom-post-type-rewrite/issues)

### Patches and Bug Fixes

Forking on Github is another good way. You can send a pull request.

1. Fork [Custom Post Type Rewrite](https://github.com/thingsym/custom-post-type-rewrite) from GitHub repository
2. Create a feature branch: git checkout -b my-new-feature
3. Commit your changes: git commit -am 'Add some feature'
4. Push to the branch: git push origin my-new-feature
5. Create new Pull Request

### Contribute guidlines

If you would like to contribute, here are some notes and guidlines.

* All development happens on the **develop** branch, so it is always the most up-to-date
* The **master** branch only contains tagged releases
* If you are going to be submitting a pull request, please submit your pull request to the **develop** branch
* See about [forking](https://help.github.com/articles/fork-a-repo/) and [pull requests](https://help.github.com/articles/using-pull-requests/)

## Test Matrix

For operation compatibility between PHP version and WordPress version, see below [Github Actions](https://github.com/thingsym/custom-post-type-rewrite/actions).

## Changelog

* Version 1.2.1
	* tested up to 6.2.0
	* fix composer scripts
	* update github actions
	* add support section and enhance contribution section to README
	* fix license
* Version 1.2.0
	* edit README
	* add test case
	* fix the priority of the rewrite rule of register_post_type()
* Version 1.1.4
	* change mysql from version 8.0 to version 5.7 using docker image
	* fix indent style
	* change plugin initialization to wp_loaded hook
* Version 1.1.3
	* fix 'Trying to get property 'permalink_structure' of non-object' warning
	* change plugin initialization to plugins_loaded hook
	* replace assert from assertEquals to assertSame
* Version 1.1.2
	* update wp-plugin-unit-test.yml
	* bump up yoast/phpunit-polyfills version
	* change os to ubuntu-20.04 for ci
	* add Upgrade Notice
	* change requires at least to wordpress 4.9
	* change requires to PHP 5.6
* Version 1.1.1
	* add timeout-minutes to workflows
	* add phpunit-polyfills
	* tested up to 5.8.0
	* add .editorconfig
* Version 1.1.0
	* tested up to 5.7.0
	* separate a class into a class file
	* add test case
	* add sponsor link
	* add FUNDING.yml
	* add donate link
	* update wordpress-test-matrix
	* add GitHub actions for CI/CD, remove .travis.yml
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

* Version 1.1.2
	* Requires at least version 4.9 of the WordPress
	* Requires PHP version 5.6
* Version 1.0.2
	* Requires at least version 3.8 of the WordPress

## License

Licensed under [GPLv2](https://www.gnu.org/licenses/gpl-2.0.html).
