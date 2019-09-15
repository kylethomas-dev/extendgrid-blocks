<?php
/**
 * Plugin Name: Extendgrid Blocks
 * Plugin URI:  https://extendgrid.com/
 * Description: Blocks featured within Extendgrid
 * Version:     1.0.0
 * Author:      Extendgrid
 */

// Add Custom Blocks Panel in Gutenberg
function extendgrid_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'extendgrid',
				'title' => __( 'Extendgrid', 'extendgrid' ),
			),
		)
	);
}
add_filter( 'block_categories', 'extendgrid_block_category', 10, 2);

add_action('acf/init', 'my_acf_init');
function my_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

	    // register a testimonials block
	    acf_register_block(array(
	        'name'				=> 'testimonials',
	        'title'				=> __( 'Testimonials', 'wprig' ),
	        'description'		=> __( 'A custom testimonial block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment-smile" class="svg-inline--fa fa-comment-smile fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M325.8 272.2C308.5 292.4 283.1 304 256 304s-52.5-11.6-69.8-31.8c-8.6-10.1-23.8-11.2-33.8-2.7-10.1 8.6-11.2 23.8-2.7 33.8 26.5 31 65.2 48.7 106.3 48.7s79.8-17.8 106.2-48.7c8.6-10.1 7.4-25.2-2.7-33.8-10-8.6-25.1-7.4-33.7 2.7zM192 224c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm128 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg>',
	        'keywords' => array( 'testimonial' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a slider block
	    acf_register_block(array(
	        'name'				=> 'image-slider',
	        'title'				=> __( 'Image Slider', 'wprig' ),
	        'description'		=> __( 'A custom image slider block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="photo-video" class="svg-inline--fa fa-photo-video fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M608 0H160c-17.67 0-32 13.13-32 29.33V112h48V48h48v64h48V48h224v304h112c17.67 0 32-13.13 32-29.33V29.33C640 13.13 625.67 0 608 0zm-16 304h-48v-56h48zm0-104h-48v-48h48zm0-96h-48V48h48zM128 320a32 32 0 1 0-32-32 32 32 0 0 0 32 32zm288-160H32a32 32 0 0 0-32 32v288a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32zm-16 240L299.31 299.31a16 16 0 0 0-22.62 0L176 400l-36.69-36.69a16 16 0 0 0-22.62 0L48 432V208h352z"></path></svg>',
	        'keywords'			=> array( 'slider' ),
                      'enqueue_assets' => function(){
            wp_enqueue_style( 'egrid-image-slider-css', plugin_dir_url( __FILE__ ) . 'css/swiper.min.css' );
            wp_enqueue_script('jQuery');
            wp_enqueue_script( 'egrid-image-slider-swiper-js' ,plugin_dir_url( __FILE__ ) . 'js/swiper.min.js', array('jquery'), '', true );
            wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
            wp_enqueue_script( 'egrid-image-slider-custom' ,plugin_dir_url( __FILE__ ) . 'js/image-slider.js', array('jquery'), '', true );
          },
	    ));

        // register a team block
	    acf_register_block(array(
	        'name'				=> 'team',
	        'title'				=> __( 'Team', 'wprig' ),
	        'description'		=> __( 'A custom team block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="users" class="svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M544 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zM96 224c44.2 0 80-35.8 80-80s-35.8-80-80-80-80 35.8-80 80 35.8 80 80 80zm0-112c17.6 0 32 14.4 32 32s-14.4 32-32 32-32-14.4-32-32 14.4-32 32-32zm396.4 210.9c-27.5-40.8-80.7-56-127.8-41.7-14.2 4.3-29.1 6.7-44.7 6.7s-30.5-2.4-44.7-6.7c-47.1-14.3-100.3.8-127.8 41.7-12.4 18.4-19.6 40.5-19.6 64.3V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-44.8c.2-23.8-7-45.9-19.4-64.3zM464 432H176v-44.8c0-36.4 29.2-66.2 65.4-67.2 25.5 10.6 51.9 16 78.6 16 26.7 0 53.1-5.4 78.6-16 36.2 1 65.4 30.7 65.4 67.2V432zm92-176h-24c-17.3 0-33.4 5.3-46.8 14.3 13.4 10.1 25.2 22.2 34.4 36.2 3.9-1.4 8-2.5 12.3-2.5h24c19.8 0 36 16.2 36 36 0 13.2 10.8 24 24 24s24-10.8 24-24c.1-46.3-37.6-84-83.9-84zm-236 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm0-176c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zM154.8 270.3c-13.4-9-29.5-14.3-46.8-14.3H84c-46.3 0-84 37.7-84 84 0 13.2 10.8 24 24 24s24-10.8 24-24c0-19.8 16.2-36 36-36h24c4.4 0 8.5 1.1 12.3 2.5 9.3-14 21.1-26.1 34.5-36.2z"></path></svg>',
	        'keywords'			=> array( 'team' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a schedule block
	    acf_register_block(array(
	        'name'				=> 'events',
	        'title'				=> __( 'Events', 'wprig' ),
	        'description'		=> __( 'A custom events block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-alt" class="svg-inline--fa fa-calendar-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"></path></svg>',
	        'keywords'			=> array( 'events' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a menu block
	    acf_register_block(array(
	        'name'				=> 'menu',
	        'title'				=> __( 'Restaurant Menu', 'wprig' ),
	        'description'		=> __( 'A custom menu block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="utensils-alt" class="svg-inline--fa fa-utensils-alt fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M0 74.1c0 114.2 47.3 199 156.1 223L88 356.6c-31.9 28.2-33.4 77.6-3.3 107.7l26.9 26c30.3 30.3 79.6 28.5 107.7-3.3l70.1-79.1c74 87.3 67.1 79.2 68.5 80.7 28.2 30.1 76.4 31.6 106.3 1.7l26-26c29.7-29.7 28.7-78.1-2-106.6l-59.4-55.2c25.5-3.9 50.3-16.2 71.3-37.2 20.7-20.7 58.4-74.8 66.1-85.9 23.5-33.6 1.2-78.9-35.8-91.9-6.4-18.5-22.8-35.3-42-42.1-12.8-36.3-58-59.6-91.9-35.8-11.2 7.8-65.2 45.4-85.9 66.1-23 23-36.3 51.4-38.3 81.4L124.4 19.9C76.9-24.2 0 9.9 0 74.1zm348.3 153.6c-33.6-33.6-40.1-81.6-3.7-118C363.4 90.9 424 49 424 49c7.3-5.3 24.1 11.8 18.6 18.9L365 145.5c-6.7 7.8 10.5 25.3 18.6 18.9l82.6-73.3c7.2-5.1 23.9 11.5 18.7 18.7l-73.3 82.6c-6.4 8.1 11 25.3 18.9 18.6l77.6-77.6c7.1-5.5 24.1 11.3 18.9 18.6 0 0-41.9 60.6-60.7 79.5-35.8 35.8-83.8 30.5-118-3.8zm-138.7 86.1l48.5 57.1-74.6 84.3c-9.9 11.2-27.3 11.7-37.8 1.1l-26-26c-10.6-10.6-10.1-27.9 1.1-37.8l88.8-78.7zM48 74c0-22.6 27-34.5 43.7-19l364 338c10.8 10 11.1 27 .7 37.4l-26 26c-10.4 10.4-27.3 10.1-37.4-.6L223.5 256C93.5 256 48 182.8 48 74z"></path></svg>',
	        'keywords'			=> array( 'menu' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a business hours block
	    acf_register_block(array(
	        'name'				=> 'business-hours',
	        'title'				=> __( 'Business Hours', 'wprig' ),
	        'description'		=> __( 'A custom business hours block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg>',
	        'keywords'			=> array( 'business-hours' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a card block
	    acf_register_block(array(
	        'name'				=> 'card',
	        'title'				=> __( 'Card', 'wprig' ),
	        'description'		=> __( 'A custom card block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="rectangle-portrait" class="svg-inline--fa fa-rectangle-portrait fa-w-13" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 385 512"><path fill="currentColor" d="M385 464V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h289c26.5 0 48-21.5 48-48zm-337-6V54c0-3.3 2.7-6 6-6h277c3.3 0 6 2.7 6 6v404c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6z"></path></svg>',
	        'keywords'			=> array( 'card' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a progress bar block
	    acf_register_block(array(
	        'name'				=> 'progress-bar',
	        'title'				=> __( 'Progress Bar', 'wprig' ),
	        'description'		=> __( 'A custom progress bar block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="horizontal-rule" class="svg-inline--fa fa-horizontal-rule fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M640 247.5v17a16 16 0 0 1-16 16H16a16 16 0 0 1-16-16v-17a16 16 0 0 1 16-16h608a16 16 0 0 1 16 16z"></path></svg>',
	        'keywords'			=> array( 'progress-bar' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a jumbotron block
	    acf_register_block(array(
	        'name'				=> 'Jumbotron',
	        'title'				=> __( 'Jumbotron', 'wprig' ),
	        'description'		=> __( 'A custom jumbotron block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="money-check-edit" class="svg-inline--fa fa-money-check-edit fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M485.52 384H528a16 16 0 0 0 16-16v-42.46a32 32 0 0 0-9.37-22.63L303.2 71.47l-71.7 71.7 231.39 231.45a32 32 0 0 0 22.63 9.38zM208.9 120.57l71.7-71.8L238.8 7a24.1 24.1 0 0 0-33.9 0L167 44.87a24 24 0 0 0 0 33.8zM128 368a16 16 0 0 0 16 16h283l-48-48H144a16 16 0 0 0-16 16zm480-240H405l48 48h139v288H48V176h171.07l-10.2-10.2-22.6-22.6-15.2-15.2H32a32 32 0 0 0-32 32v320a32 32 0 0 0 32 32h576a32 32 0 0 0 32-32V160a32 32 0 0 0-32-32zM144 304h203l-48-48H144a16 16 0 0 0-16 16v16a16 16 0 0 0 16 16z"></path></svg>',
	        'keywords'			=> array( 'jumbotron' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a social share block
	    acf_register_block(array(
	        'name'				=> 'Social Share',
	        'title'				=> __( 'Social Share', 'wprig' ),
	        'description'		=> __( 'A custom social share block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="share-alt" class="svg-inline--fa fa-share-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M352 320c-25.6 0-48.9 10-66.1 26.4l-98.3-61.5c5.9-18.8 5.9-39.1 0-57.8l98.3-61.5C303.1 182 326.4 192 352 192c53 0 96-43 96-96S405 0 352 0s-96 43-96 96c0 9.8 1.5 19.6 4.4 28.9l-98.3 61.5C144.9 170 121.6 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.6 0 48.9-10 66.1-26.4l98.3 61.5c-2.9 9.4-4.4 19.1-4.4 28.9 0 53 43 96 96 96s96-43 96-96-43-96-96-96zm0-272c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zM96 304c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256 160c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"></path></svg>',
	        'keywords'			=> array( 'social-media' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a background image block
	    acf_register_block(array(
	        'name'				=> 'background-image',
	        'title'				=> __( 'Background Image', 'wprig' ),
	        'description'		=> __( 'A custom background image block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="image" class="svg-inline--fa fa-image fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm-6 336H54a6 6 0 0 1-6-6V118a6 6 0 0 1 6-6h404a6 6 0 0 1 6 6v276a6 6 0 0 1-6 6zM128 152c-22.091 0-40 17.909-40 40s17.909 40 40 40 40-17.909 40-40-17.909-40-40-40zM96 352h320v-80l-87.515-87.515c-4.686-4.686-12.284-4.686-16.971 0L192 304l-39.515-39.515c-4.686-4.686-12.284-4.686-16.971 0L96 304v48z"></path></svg>',
	        'keywords'			=> array( 'background-image' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
	    ));

        // register a Photo Collage block.
        acf_register_block(array(
            'name'				=> 'photo-collage',
	        'title'				=> __( 'Photo Collage', 'wprig' ),
	        'description'		=> __( 'A custom photo collage block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="border-all" class="svg-inline--fa fa-border-all fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H32A32 32 0 0 0 0 64v384a32 32 0 0 0 32 32h384a32 32 0 0 0 32-32V64a32 32 0 0 0-32-32zm-16 48v152H248V80zm-200 0v152H48V80zM48 432V280h152v152zm200 0V280h152v152z"></path></svg>',
	        'keywords'			=> array( 'photo-collage' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
				wp_enqueue_script('jQuery');
				wp_enqueue_script( 'egrid-magnific-js' ,plugin_dir_url( __FILE__ ) . 'js/jquery.magnific-popup.min.js', array('jquery'), '', true );
				wp_enqueue_style( 'egrid-magnific-css', plugin_dir_url( __FILE__ ) . 'css/magnific-popup.css' );
			},
        ));

         // register a Posts block.
        acf_register_block(array(
            'name'				=> 'posts',
	        'title'				=> __( 'Posts', 'wprig' ),
	        'description'		=> __( 'A custom posts block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="edit" class="svg-inline--fa fa-edit fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path></svg>',
	        'keywords'			=> array( 'posts' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
        ));

         // register a Counter block.
        acf_register_block(array(
            'name'				=> 'counter',
	        'title'				=> __( 'Counter', 'wprig' ),
	        'description'		=> __( 'A custom counter block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="abacus" class="svg-inline--fa fa-abacus fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M552 0c-13.25 0-24 10.74-24 24v48h-48V48c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24H240V48c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24h-48V48c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24H48V24C48 10.74 37.25 0 24 0S0 10.74 0 24v476c0 6.63 5.37 12 12 12h24c6.63 0 12-5.37 12-12v-60h48v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h48v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h192v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h48v60c0 6.63 5.37 12 12 12h24c6.63 0 12-5.37 12-12V24c0-13.26-10.75-24-24-24zM96 120v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h48v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h192v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h48v112H336v-24c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24h-48v-24c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24h-48v-24c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24H48V120h48zm384 272v-24c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24H240v-24c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24h-48v-24c0-8.84-7.16-16-16-16h-16c-8.84 0-16 7.16-16 16v24H48V280h48v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h48v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h48v24c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-24h192v112h-48z"></path></svg>',
	        'keywords'			=> array( 'counter' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
        ));

         // register an Alert block.
        acf_register_block(array(
            'name'				=> 'alert',
	        'title'				=> __( 'Alert', 'wprig' ),
	        'description'		=> __( 'A custom alert block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="whistle" class="svg-inline--fa fa-whistle fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M250.6 254c0 22.3-18.1 40.4-40.4 40.4s-40.4-18.1-40.4-40.4c0-22.3 18.1-40.4 40.4-40.4s40.4 18.1 40.4 40.4zm231.9-50.2L633.9 325c6.8 5.5 8.1 15.3 2.8 22.3l-79 105.3c-4.9 6.5-13.9 8.4-20.9 4.3l-151.7-86.8c-7.6 11.4-16.4 22.3-26.5 32.4-41 41-94.7 61.5-148.5 61.5-157 0-258.4-166.6-186.8-306A64.714 64.714 0 0 1 .2 108.4c0-35.6 29-64.6 64.6-64.6 19.2 0 36.9 8.8 49.1 23.4C144 51.7 177 44.1 210 44.1c86.7 0 126.5 42.9 194.5 97.3 5.3 4.3 7.4 11.4 5.2 17.9L399.5 189c-1.1 3.2-.1 6.8 2.6 8.9l25.5 20.4c2.6 2.1 6.3 2.4 9.2.6l27.5-16.4c5.7-3.4 13-2.9 18.2 1.3zM41 129.8c6.3-8.5 13-16.8 20.7-24.5 7.8-7.8 16.1-14.6 24.7-20.9-5.9-5.3-13.5-8.3-21.6-8.3-17.8 0-32.3 14.5-32.3 32.3 0 8.1 3.3 15.6 8.5 21.4zm533.5 219.7c2.6-3.5 2-8.4-1.4-11.2l-103.4-82.7-32.3 19.2c-5.8 3.4-13.1 2.9-18.3-1.3L349.6 218c-5.3-4.3-7.4-11.4-5.2-17.9l12.1-35.2s-52-41.5-60.6-47.8C262.1 95.9 170.5 65 96 139.5 33 202.5 33 305 96 368c30.5 30.5 71.1 47.5 114.2 47.5 102.1 0 142.2-83.7 159.7-109.9L530 397.2c3.5 2 8 1.1 10.5-2.2l34-45.5z"></path></svg>',
	        'keywords'			=> array( 'alert' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
        ));

        // register a Portfolio block.
        acf_register_block(array(
            'name'				=> 'portfolio',
	        'title'				=> __( 'Portfolio', 'wprig' ),
	        'description'		=> __( 'A custom portfolio block.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="folder-open" class="svg-inline--fa fa-folder-open fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M527.95 224H480v-48c0-26.51-21.49-48-48-48H272l-64-64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h385.057c28.068 0 54.135-14.733 68.599-38.84l67.453-112.464C588.24 264.812 565.285 224 527.95 224zM48 96h146.745l64 64H432c8.837 0 16 7.163 16 16v48H171.177c-28.068 0-54.135 14.733-68.599 38.84L32 380.47V112c0-8.837 7.163-16 16-16zm493.695 184.232l-67.479 112.464A47.997 47.997 0 0 1 433.057 416H44.823l82.017-136.696A48 48 0 0 1 168 256h359.975c12.437 0 20.119 13.568 13.72 24.232z"></path></svg>',
	        'keywords'			=> array( 'portfolio' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
        ));

        // register a price list block.
        acf_register_block(array(
            'name'				=> 'pricelist',
	        'title'				=> __( 'Price List', 'wprig' ),
	        'description'		=> __( 'Display price list for any product easily.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="list-ul" class="svg-inline--fa fa-list-ul fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M32.39 224C14.73 224 0 238.33 0 256s14.73 32 32.39 32a32 32 0 0 0 0-64zm0-160C14.73 64 0 78.33 0 96s14.73 32 32.39 32a32 32 0 0 0 0-64zm0 320C14.73 384 0 398.33 0 416s14.73 32 32.39 32a32 32 0 0 0 0-64zM504 80H136a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h368a8 8 0 0 0 8-8V88a8 8 0 0 0-8-8zm0 160H136a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h368a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8zm0 160H136a8 8 0 0 0-8 8v16a8 8 0 0 0 8 8h368a8 8 0 0 0 8-8v-16a8 8 0 0 0-8-8z"></path></svg>',
	        'keywords'			=> array( 'price' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
        ));

        // register an accordion block.
        acf_register_block(array(
            'name'				=> 'accordion',
	        'title'				=> __( 'Accordion', 'wprig' ),
	        'description'		=> __( 'Display accordion.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="window-maximize" class="svg-inline--fa fa-window-maximize fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm16 400c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V192h448v240zM32 160V80c0-8.8 7.2-16 16-16h416c8.8 0 16 7.2 16 16v80H32z"></path></svg>',
	        'keywords'			=> array( 'accordion' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
        ));

        // register a google map block.
        acf_register_block(array(
            'name'				=> 'google-map',
	        'title'				=> __( 'Google Map', 'wprig' ),
	        'description'		=> __( 'Display Google Map.', 'wprig' ),
	        'render_callback'	=> 'my_acf_block_render_callback',
	        'category'			=> 'extendgrid',
	        'icon'				=> '<svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="map-marked-alt" class="svg-inline--fa fa-map-marked-alt fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z"></path></svg>',
	        'keywords'			=> array( 'map' ),
            'enqueue_assets' => function(){
			  wp_enqueue_style( 'egrid-blocks-css', plugin_dir_url( __FILE__ ) . 'css/egridblocks.css' );
			},
        ));

	}
}

function my_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists(plugin_dir_path( __FILE__ ) . "/block-templates/block-{$slug}.php") ) {
		include(plugin_dir_path( __FILE__ ) . "/block-templates/block-{$slug}.php" );
	}
}

// Excerpt Limit
function egrid_excerpt($egrid_excerpt_limit) {
  $egrid_excerpt = explode(' ', get_the_excerpt(), $egrid_excerpt_limit);
  if (count($egrid_excerpt)>=$egrid_excerpt_limit) {
    array_pop($egrid_excerpt);
    $egrid_excerpt = implode(" ",$egrid_excerpt).'...';
  } else {
    $egrid_excerpt = implode(" ",$egrid_excerpt);
  }
  $egrid_excerpt = preg_replace('`[[^]]*]`','',$egrid_excerpt);
  return $egrid_excerpt;
}
