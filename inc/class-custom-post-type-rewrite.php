<?php
/**
 * Custom_Post_Type_Rewrite class
 *
 * @package Custom_Post_Type_Rewrite
 *
 * @since 1.1.0
 */

/**
 * Core class Custom_Post_Type_Rewrite
 *
 * @since 1.0.0
 */
class Custom_Post_Type_Rewrite {

	public function __construct() {
		add_action( 'wp_loaded', array( $this, 'set_rewrite' ), 10 );
		add_filter( 'plugin_row_meta', array( $this, 'plugin_metadata_links' ), 10, 2 );
	}

	public function set_rewrite() {
		global $wp_rewrite;

		if ( ! isset( $wp_rewrite->permalink_structure ) ) {
			return;
		}

		$post_types = get_post_types(
			array(
				'_builtin'           => false,
				'publicly_queryable' => true,
				'show_ui'            => true,
			)
		);

		$search = array( '%front%', '%post%', '%year%', '%monthnum%', '%day%', '%date%' );

		$date = '';
		if ( preg_match( '/%post_id%/', $wp_rewrite->permalink_structure ) ) {
			$date = '/date';
		}

		$position = 'top';

		foreach ( $post_types as $post_type ) {
			if ( ! $post_type ) {
				continue;
			}

			$type_obj = get_post_type_object( $post_type );

			# The priority of the rewrite rule: has_archive < rewrite
			# See https://developer.wordpress.org/reference/functions/register_post_type/
			$slug = $post_type;
			if ( is_string( $type_obj->has_archive ) ) {
				$slug = $type_obj->has_archive;
			}
			if ( is_bool( $type_obj->rewrite ) && $type_obj->rewrite === true ) {
				$slug = $post_type;
			}
			else if ( is_array( $type_obj->rewrite ) ) {
				if ( ! empty( $type_obj->rewrite['slug'] ) ) {
					$slug = $type_obj->rewrite['slug'];
				}
			}

			$front = $wp_rewrite->front;
			if ( is_bool( $type_obj->rewrite ) && $type_obj->rewrite === false ) {
				$front = '';
			}
			else if ( is_array( $type_obj->rewrite ) ) {
				if ( isset( $type_obj->rewrite['with_front'] ) && is_bool( $type_obj->rewrite['with_front'] ) && $type_obj->rewrite['with_front'] === false ) {
					$front = '';
				}
			}

			$replace = array( preg_replace( '/^\//', '', $front ), $slug, $wp_rewrite->rewritereplace[0], $wp_rewrite->rewritereplace[1], $wp_rewrite->rewritereplace[2], $date );

			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/%day%/page/?([0-9]{1,})/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/%day%/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/page/?([0-9]{1,})/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/page/?([0-9]{1,})/?$' ), 'index.php?year=$matches[1]&paged=$matches[2]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/?$' ), 'index.php?year=$matches[1]&post_type=' . $post_type, $position );

			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/%day%/feed/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/%day%/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/feed/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/%monthnum%/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/feed/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?year=$matches[1]&feed=$matches[2]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%%date%/%year%/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?year=$matches[1]&feed=$matches[2]&post_type=' . $post_type, $position );

			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%/author/([^/]+)/page/?([0-9]{1,})/?$' ), 'index.php?author_name=$matches[1]&paged=$matches[2]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%/author/([^/]+)/?$' ), 'index.php?author_name=$matches[1]&post_type=' . $post_type, $position );

			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%/author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?author_name=$matches[1]&feed=$matches[2]&post_type=' . $post_type, $position );
			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%/author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$' ), 'index.php?author_name=$matches[1]&feed=$matches[2]&post_type=' . $post_type, $position );

			add_rewrite_rule( str_replace( $search, $replace, '%front%%post%/?$' ), 'index.php?post_type=' . $post_type, $position );
		}
	}

	/**
	 * Set links below a plugin on the Plugins page.
	 *
	 * Hooks to plugin_row_meta
	 *
	 * @see https://developer.wordpress.org/reference/hooks/plugin_row_meta/
	 *
	 * @access public
	 *
	 * @param array  $links  An array of the plugin's metadata.
	 * @param string $file   Path to the plugin file relative to the plugins directory.
	 *
	 * @return array $links
	 *
	 * @since 1.1.0
	 */
	public function plugin_metadata_links( $links, $file ) {
		if ( $file == plugin_basename( __CUSTOM_POST_TYPE_REWRITE__ ) ) {
			$links[] = '<a href="https://github.com/sponsors/thingsym">' . __( 'Become a sponsor', 'custom-post-type-rewrite' ) . '</a>';
		}

		return $links;
	}
}
