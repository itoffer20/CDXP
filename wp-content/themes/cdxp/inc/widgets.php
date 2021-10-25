<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cdxp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 1', 'cdxp' ),
			'id'            => 'footer-col-1',
			'description'   => esc_html__( 'Add widgets here.', 'cdxp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 2', 'cdxp' ),
			'id'            => 'footer-col-2',
			'description'   => esc_html__( 'Add widgets here.', 'cdxp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 3', 'cdxp' ),
			'id'            => 'footer-col-3',
			'description'   => esc_html__( 'Add widgets here.', 'cdxp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Column 4', 'cdxp' ),
			'id'            => 'footer-col-4',
			'description'   => esc_html__( 'Add widgets here.', 'cdxp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright Text', 'cdxp' ),
			'id'            => 'copyright',
			'description'   => esc_html__( 'Add widgets here.', 'cdxp' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);


}
add_action( 'widgets_init', 'cdxp_widgets_init' );