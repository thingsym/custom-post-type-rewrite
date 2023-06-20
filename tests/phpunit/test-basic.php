<?php
/**
 * Class Test_Custom_Post_Type_Widgets_Basic
 *
 * @package Custom_Post_Type_Widgets
 */

/**
 * Basic test case.
 */
class Test_Custom_Post_Type_Rewrite_Basic extends WP_UnitTestCase {
	public $Custom_Post_Type_Rewrite;

	public function setUp(): void {
		parent::setUp();
		$this->Custom_Post_Type_Rewrite = new Custom_Post_Type_Rewrite();
	}

	/**
	 * @test
	 * @group basic
	 */
	function constructor() {
		$this->assertSame( 10, has_action( 'wp_loaded', array( $this->custom_post_type_rewrite, 'set_rewrite' ) ) );
		$this->assertSame( 10, has_filter( 'plugin_row_meta', array( $this->custom_post_type_rewrite, 'plugin_metadata_links' ) ) );
	}

	/**
	 * @test
	 * @group basic
	 */
	public function plugin_metadata_links() {
		$this->markTestIncomplete( 'This test has not been implemented yet.' );
	}

}
