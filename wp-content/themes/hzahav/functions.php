<?php
// Styles + JS
function hzahav_scripts() {
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_enqueue_style( 'slick',  get_template_directory_uri() . '/assets/css/slick.css'  );
   wp_enqueue_style( 'slick-theme',  get_template_directory_uri() . '/assets/css/slick-theme.css'  );
   wp_enqueue_style( 'media-css',  get_template_directory_uri() . '/assets/css/media.css');
   wp_enqueue_style( 'fancy',  'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css');

   wp_register_script( 'slick',  get_template_directory_uri() . '/assets/js/slick.min.js');
   wp_enqueue_script( 'slick' );
   wp_register_script( 'block_main', get_template_directory_uri() . '/assets/js/main.js');
   wp_enqueue_script( 'block_main' );
   wp_register_script( 'fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
   wp_enqueue_script( 'fancybox' );

}
add_action('wp_enqueue_scripts','hzahav_scripts');

// Our custom post type function
add_post_type_support( 'testimonials', 'thumbnail' );

// REGISTER MENU
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

// CUSTOM POST TYPE PROJECTS
function create_posttype() {
    register_post_type( 'project',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Project' ),
                'singular_name' => __( 'project' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'project'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-admin-multisite',
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt'),
        )
    );
    register_post_type( 'articles',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Articles' ),
                'singular_name' => __( 'articles' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'articles'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-image',
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt'),

        )
    );
	register_post_type( 'clients',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Clients' ),
                'singular_name' => __( 'clients' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'clients'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt'),
        )
    );

}

add_action( 'init', 'create_posttype' );

add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'chat', 'audio') );
add_post_type_support( 'post', 'post-formats' );

// ADD THUMBNAIL
add_theme_support( 'post-thumbnails' );


  function fix_post_id_on_preview($null, $post_id) {
    if (is_preview()) {
        return get_the_ID();
    }
    else {
        $acf_post_id = isset($post_id->ID) ? $post_id->ID : $post_id;

        if (!empty($acf_post_id)) {
            return $acf_post_id;
        }
        else {
            return $null;
        }
    }
}
add_filter( 'acf/pre_load_post_id', 'fix_post_id_on_preview', 10, 2 );

// // Allow upload svgs
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );

//Customizer additions.
require get_template_directory() . '/inc/customizer.php';

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


// function custom_excerpt_length( $length ) {
// 	return 20;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter( 'excerpt_length', function(){
    return 10;
  } );

  add_filter('excerpt_more', function($more) {
	return '...';
});

add_filter( 'get_the_excerpt', function( $excerpt, $post ) {
    if ( has_excerpt( $post ) ) {
        $excerpt_length = apply_filters( 'excerpt_length', 20 );
        $excerpt_more   = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
        $excerpt        = wp_trim_words( $excerpt, $excerpt_length, $excerpt_more );
    }
    return $excerpt;
}, 10, 2 );


function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

function misha_my_load_more_scripts() {
	global $wp_query;
    wp_register_script( 'ajax', get_template_directory_uri() . '/assets/js/ajax.js' );
 	wp_enqueue_script( 'ajax' );
}

add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );

function misha_loadmore_ajax_handler(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';

	query_posts( $args );

	if( have_posts() ) :

		// run the loop
		while( have_posts() ): the_post(); ?>

 <div class="project-content__block-item">
                            <div class="block-image">
                                <?php $image = get_field('block_top_image');?>
                                <img class="sircle-img" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                <a href="<?php echo get_permalink();?>"><img class="pr-img" src="<?php echo get_the_post_thumbnail_url();?>" alt="img"></a>
                            </div>
                            <div class="block-content">
                                <div class="block-content-main">
                                    <div class="block-title">
                                        <a href="<?php echo get_permalink();?>"><?php the_title();?></a>
                                        <p><?php the_excerpt();?></p>
                                    </div>
                                    <div class="block-content-about flex-direction wrap">

                                    <?php if( have_rows('blocks') ):
                                        while( have_rows('blocks') ): the_row(); ?>
                                        <?php $image = get_sub_field('blocks_image');?>
                                        <div class="block-content-about__item flex-direction">
                                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                            <span><?php the_sub_field('block_text');?></span>
                                        </div>
                                    <?php endwhile; endif; ?>


                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_area_image');?>
                                        <img src="<?php echo get_theme_mod('area');?>" alt="area">
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <span><?php the_field('block_area_select');?></span>
                                        <?php else: ?>
                                        <span><?php the_field('block_area_select_il');?></span>
                                        <?php endif; ?>
                                    </div>


                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_religious_character');?>
                                        <img src="<?php echo get_theme_mod('relation');?>" alt="relation">
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <span><?php the_field('block_religious_select');?></span>
                                        <?php else: ?>
                                          <span><?php the_field('block_religious_select_il');?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_house_character');?>
                                        <img src="<?php echo get_theme_mod('apartament');?>" alt="apartament">
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <span><?php the_field('block_house_select');?></span>
                                        <?php else: ?>
                                        <span><?php the_field('block_house_select_il');?></span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_price_character');?>
                                        <img src="<?php echo get_theme_mod('price');?>" alt="price">
                                        <span><?php the_field('block_price_select');?></span>
                                    </div>
                                    </div>
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <a class="content-block__link" href="<?php echo get_permalink();?>"><?php echo get_theme_mod('button-en');?></a>
                                    <?php else : ?>
                                        <a class="content-block__link" href="<?php echo get_permalink();?>"><?php echo get_theme_mod('button-il');?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
<?php


		endwhile;

	endif;
	die;
}



add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler');





function misha_loadmore_cl_ajax_handler(){

    $args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';

	query_posts( $args );

	if( have_posts() ) :

		// run the loop
		while( have_posts() ): the_post(); ?>

<div class="our-team__content-blocks-item">
                        <div class="our-team__item">
                            <div class="our-team__item-image">
								<a href="<?php echo get_permalink();?>"><img class="team-border" src="<?php echo get_the_post_thumbnail_url();?>" alt="img"></a>
                            </div>
                            <div class="our-team__item-content">
								<a href="<?php echo get_permalink();?>"><h2 class="main-title"><?php the_title();?></h2></a>
                                <p class="main-text"><?php the_excerpt();?></p>
                                <?php if(ICL_LANGUAGE_CODE=='en'): ?>
								<a class="colored-link" href="<?php echo get_permalink();?>">Read More</a>
                                <?php else : ?>
								<a class="colored-link" href="<?php echo get_permalink();?>">קרא עוד</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
<?php


		endwhile;

	endif;
	die;
}



add_action('wp_ajax_loadmore', 'misha_loadmore_cl_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_cl_ajax_handler');

function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyCcKjtYYM0v6WxwYfwPwBwjyPEDi14PPX8';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>
