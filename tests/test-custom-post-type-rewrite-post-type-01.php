<?php

class Custom_Post_Type_Rewrite__Post_Type_01_Test extends WP_UnitTestCase {

    public function setUp() {
        parent::setUp();
        $this->Custom_Post_Type_Rewrite = new Custom_Post_Type_Rewrite();

        register_post_type(
            'test',
            array(
                'public' => true,
                'rewrite' => array(
                    'slug' => 'test',
                    'with_front' => false,
                ),
            )
        );
    }

    /**
     * @test
     * @group construct
     */
    function construct_case() {
        $this->assertEquals( 10, has_action( 'wp_loaded', array( $this->Custom_Post_Type_Rewrite, 'set_rewrite' ) ) );
    }

    /**
     * @test
     * @group rewrite
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    function rewrite_case_1() {
        global $wp_rewrite;
        $wp_rewrite->init();
        $wp_rewrite->set_permalink_structure( '/archives/%post_id%' );
        $this->Custom_Post_Type_Rewrite->set_rewrite();
        $wp_rewrite->flush_rules();

        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/?$', $wp_rewrite->rules );

    }

    /**
     * @test
     * @group rewrite
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    function rewrite_case_2() {
        global $wp_rewrite;
        $wp_rewrite->init();
        $wp_rewrite->set_permalink_structure( '/%postname%/' );
        $this->Custom_Post_Type_Rewrite->set_rewrite();
        $wp_rewrite->flush_rules();

        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/?$', $wp_rewrite->rules );

    }

    /**
     * @test
     * @group rewrite
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    function rewrite_case_3() {
        global $wp_rewrite;
        $wp_rewrite->init();
        $wp_rewrite->set_permalink_structure( '/%year%/%monthnum%/%postname%/' );
        $this->Custom_Post_Type_Rewrite->set_rewrite();
        $wp_rewrite->flush_rules();

        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/?$', $wp_rewrite->rules );

    }

    /**
     * @test
     * @group rewrite
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    function rewrite_case_4() {
        global $wp_rewrite;
        $wp_rewrite->init();
        $wp_rewrite->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' );
        $this->Custom_Post_Type_Rewrite->set_rewrite();
        $wp_rewrite->flush_rules();

        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/([0-9]{4})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/?$', $wp_rewrite->rules );

    }

    /**
     * @test
     * @group rewrite
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    function rewrite_case_5() {
        global $wp_rewrite;
        $wp_rewrite->init();
        $wp_rewrite->set_permalink_structure( '/%post_id%/' );
        $this->Custom_Post_Type_Rewrite->set_rewrite();
        $wp_rewrite->flush_rules();

        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/([0-9]{1,2})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/date/([0-9]{4})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/page/?([0-9]{1,})/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/author/([^/]+)/?$', $wp_rewrite->rules );
        $this->assertArrayHasKey( 'test/?$', $wp_rewrite->rules );
    }

}

