
function cptui_register_my_taxes() {

    /**
     * Taxonomy: Weight Selection Categories.
     */

    $labels = [
        "name" => esc_html__( "Weight Category", "custom-post-type-ui" ),
        "singular_name" => esc_html__( "Weight Selection", "custom-post-type-ui" ),
    ];

    
    $args = [
        "label" => esc_html__( "Weight Selections", "custom-post-type-ui" ),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => [ 'slug' => 'weight_categories', 'with_front' => true, ],
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "weight_categories",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "rest_namespace" => "wp/v2",
        "show_in_quick_edit" => false,
        "sort" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy( "weight_categories", [ "weight" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
