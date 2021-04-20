<?php
/**
 * Hzahav Theme Customizer
 *
 * @package theme
 */

/*_________________ HEADER _________________*/
function header_customizer($wp_customize)
{
    $wp_customize->add_panel('header_setting', array(
        'title' => 'Header',
        'priority' => 1,
    ));

    // HEADER
    $wp_customize->add_section('header', array(
        "title" => __('Logo', 'daisy') ,
        "priority" => 30,
        'panel' => 'header_setting',
    ));

    $wp_customize->add_setting('logo', array(
        "default" => 'Upload Logo',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' => __('Upload a logo', 'daisy') ,
        'section' => 'header',
        'settings' => 'logo',
    )));

    // RTL
    $wp_customize->add_setting('logo-il', array(
        "default" => 'Upload Logo',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo-il', array(
        'label' => __('Upload a logo IL', 'daisy') ,
        'section' => 'header',
        'settings' => 'logo-il',
    )));

    // Button
    $wp_customize->add_section('button', array(
        "title" => __('Contact Us', 'daisy') ,
        "priority" => 30,
        'panel' => 'header_setting',
    ));

    $wp_customize->add_setting( 'b-text' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'b-text', array(
        'label'        => 'Contact Us',
        'section'    => 'button',
        'settings'   => 'b-text',
    )));

    $wp_customize->add_setting( 'b-text-en' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'b-text-en', array(
        'label'        => 'Contact Us EN',
        'section'    => 'button',
        'settings'   => 'b-text-en',
    )));

    $wp_customize->add_section('button', array(
        "title" => __('Contact Us', 'daisy') ,
        "priority" => 30,
        'panel' => 'header_setting',
    ));

    $wp_customize->add_setting( 'l-text' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'l-text', array(
        'label'        => 'Link',
        'section'    => 'button',
        'settings'   => 'l-text',
    )));

    $wp_customize->add_setting( 'logo-s' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-s', array(
        'label'        => 'Search',
        'section'    => 'button',
        'settings'   => 'logo-s',
    )));

    $wp_customize->add_setting( 'logo-s-link' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo-s-link', array(
        'label'        => 'Link',
        'section'    => 'button',
        'settings'   => 'logo-s-link',
    )));
	
		
    $wp_customize->add_setting( 'logo-ph' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-ph', array(
        'label'        => 'Phone Image',
        'section'    => 'button',
        'settings'   => 'logo-ph',
    )));
	
		
    $wp_customize->add_setting( 'ph' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ph', array(
        'label'        => 'Phone show EN',
        'section'    => 'button',
        'settings'   => 'ph',
    )));

    $wp_customize->add_setting( 'ph-show' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ph-show', array(
        'label'        => 'Phone show IL',
        'section'    => 'button',
        'settings'   => 'ph-show',
    )));

    $wp_customize->add_setting( 'ph-en' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ph-en', array(
        'label'        => 'Phone EN',
        'section'    => 'button',
        'settings'   => 'ph-en',
    )));

    $wp_customize->add_setting( 'ph-il' , array(
        'default'     => '',
        'transport'   => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ph-il', array(
        'label'        => 'Phone IL',
        'section'    => 'button',
        'settings'   => 'ph-il',
    )));
}
add_action('customize_register', 'header_customizer');

/*_________________ FOOTER _________________*/
function footer_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-footer' , array(
    'title'      => 'Footer',
    'priority'   => 30,
));

$wp_customize->add_setting( 'logo-f' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-f', array(
	'label'        => 'Logo',
	'section'    => 'hzahav-footer',
	'settings'   => 'logo-f',
)));

$wp_customize->add_setting( 'logo-f-rtl' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo-f-rtl', array(
	'label'        => 'Logo IL',
	'section'    => 'hzahav-footer',
	'settings'   => 'logo-f-rtl',
)));

/*________________SOCIAL________________*/

// GOOGLE
$wp_customize->add_setting( 'google-link' , array(
    'default'     => '',
    'transport'   => 'refresh',
));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'google-link', array(
    'label'        => 'Google Link',
    'section'    => 'hzahav-footer',
    'settings'   => 'google-link',
)));

$wp_customize->add_setting( 'f-img-1' , array(
    'default'     => '',
    'transport'   => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'f-img-1', array(
	'label'        => 'Image',
	'section'    => 'hzahav-footer',
	'settings'   => 'f-img-1',
)));

// TWITTER
$wp_customize->add_setting( 'twitter-link' , array(
    'default'     => '',
    'transport'   => 'refresh',
));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter-link', array(
    'label'        => 'Twitter Link',
    'section'    => 'hzahav-footer',
    'settings'   => 'twitter-link',
)));

$wp_customize->add_setting( 'f-img-2' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'f-img-2', array(
	'label'        => 'Image',
	'section'    => 'hzahav-footer',
	'settings'   => 'f-img-2',
)));

// FACEBOOK
$wp_customize->add_setting( 'facebook-link' , array(
    'default'     => '',
    'transport'   => 'refresh',
));
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook-link', array(
    'label'        => 'Facebook Link',
    'section'    => 'hzahav-footer',
    'settings'   => 'facebook-link',
)));

$wp_customize->add_setting( 'f-img-3' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'f-img-3', array(
	'label'        => 'Image',
	'section'    => 'hzahav-footer',
	'settings'   => 'f-img-3',
)));

}
add_action('customize_register', 'footer_customizer');

/*_________________ 404 _________________*/
function error_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-404' , array(
    'title'      => '404',
    'priority'   => 30,
));
$wp_customize->add_setting( 'error-text' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'error-text', array(
	'label'        => 'Text',
	'section'    => 'hzahav-404',
	'settings'   => 'error-text',
)));

$wp_customize->add_setting( 'error-text-f' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'error-text-f', array(
	'label'        => 'Sub Text',
	'section'    => 'hzahav-404',
	'settings'   => 'error-text-f',
)));
}
add_action('customize_register', 'error_customizer');

/*_________________ SEARCH _________________*/
function search_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-search' , array(
    'title'      => 'Search',
    'priority'   => 30,
));
$wp_customize->add_setting( 'search-text' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-text', array(
	'label'        => 'Text',
	'section'    => 'hzahav-search',
	'settings'   => 'search-text',
)));

$wp_customize->add_setting( 'search-text-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-text-il', array(
	'label'        => 'Text IL',
	'section'    => 'hzahav-search',
	'settings'   => 'search-text-il',
)));

$wp_customize->add_setting( 'search-text-s' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-text-s', array(
	'label'        => 'Sub Text',
	'section'    => 'hzahav-search',
	'settings'   => 'search-text-s',
)));


$wp_customize->add_setting( 'search-text-s-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-text-s-il', array(
	'label'        => 'Sub Text IL',
	'section'    => 'hzahav-search',
	'settings'   => 'search-text-s-il',
)));


// AREA
$wp_customize->add_setting( 'search-title-area' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-title-area', array(
	'label'        => 'Area Title',
	'section'    => 'hzahav-search',
	'settings'   => 'search-title-area',
)));

$wp_customize->add_setting( 'search-title-area-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-title-area-il', array(
	'label'        => 'Area Title IL',
	'section'    => 'hzahav-search',
	'settings'   => 'search-title-area-il',
)));


// RELIGIOUS
$wp_customize->add_setting( 'search-title-rel' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-title-rel', array(
	'label'        => 'Religious Title',
	'section'    => 'hzahav-search',
	'settings'   => 'search-title-rel',
)));

$wp_customize->add_setting( 'search-title-rel-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-title-rel-il', array(
	'label'        => 'Religious Title IL',
	'section'    => 'hzahav-search',
	'settings'   => 'search-title-rel-il',
)));


// HOUSE 
$wp_customize->add_setting( 'search-title-house' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-title-house', array(
	'label'        => 'House Title',
	'section'    => 'hzahav-search',
	'settings'   => 'search-title-house',
)));

$wp_customize->add_setting( 'search-title-house-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search-title-house-il', array(
	'label'        => 'House Title IL',
	'section'    => 'hzahav-search',
	'settings'   => 'search-title-house-il',
)));

// SECTION CONTACT GREY
$wp_customize->add_setting( 'section-contact' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact', array(
	'label'        => 'Contact Title',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact',
)));

$wp_customize->add_setting( 'section-contact-sub' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact-sub', array(
	'label'        => 'Contact Sub-title',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact-sub',
)));

$wp_customize->add_setting( 'section-contact-button' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact-button', array(
	'label'        => 'Contact Button Text',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact-button',
)));

$wp_customize->add_setting( 'section-contact-link' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact-link', array(
	'label'        => 'Contact Button Link',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact-link',
)));


// IL GREY
$wp_customize->add_setting( 'section-contact-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact-il', array(
	'label'        => 'Contact Title IL',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact-il',
)));

$wp_customize->add_setting( 'section-contact-sub-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact-sub-il', array(
	'label'        => 'Contact Sub-title IL',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact-sub-il',
)));

$wp_customize->add_setting( 'section-contact-button-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact-button-il', array(
	'label'        => 'Contact Button Text IL',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact-button-il',
)));

$wp_customize->add_setting( 'section-contact-link-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'section-contact-link-il', array(
	'label'        => 'Contact Button Link IL',
	'section'    => 'hzahav-search',
	'settings'   => 'section-contact-link-il',
)));
}
add_action('customize_register', 'search_customizer');




/*_________________ MAP _________________*/
function map_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-map' , array(
    'title'      => 'Map',
    'priority'   => 30,
));
$wp_customize->add_setting( 'marker' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'marker', array(
	'label'        => 'Marker',
	'section'    => 'hzahav-map',
	'settings'   => 'marker',
)));
}
add_action('customize_register', 'map_customizer');




/*_________________ PROJECTS _________________*/
function projects_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-project' , array(
    'title'      => 'Project Blocks',
    'priority'   => 30,
));
$wp_customize->add_setting( 'button-en' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button-en', array(
	'label'        => 'Button EN',
	'section'    => 'hzahav-project',
	'settings'   => 'button-en',
)));
$wp_customize->add_setting( 'button-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button-il', array(
	'label'        => 'Button IL',
	'section'    => 'hzahav-project',
	'settings'   => 'button-il',
)));
$wp_customize->add_setting( 'area' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'area', array(
	'label'        => 'Area Icon',
	'section'    => 'hzahav-project',
	'settings'   => 'area',
)));
$wp_customize->add_setting( 'apartament' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'apartament', array(
	'label'        => 'Apartament Icon',
	'section'    => 'hzahav-project',
	'settings'   => 'apartament',
)));
$wp_customize->add_setting( 'relation' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'relation', array(
	'label'        => 'Relations Icon',
	'section'    => 'hzahav-project',
	'settings'   => 'relation',
)));
$wp_customize->add_setting( 'price' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'price', array(
	'label'        => 'Price Icon',
	'section'    => 'hzahav-project',
	'settings'   => 'price',
)));

$wp_customize->add_setting( 'price-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'price-il', array(
	'label'        => 'Price Icon IL',
	'section'    => 'hzahav-project',
	'settings'   => 'price-il',
)));

$wp_customize->add_setting( 'text-en-more' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text-en-more', array(
	'label'        => 'Title EN',
	'section'    => 'hzahav-project',
	'settings'   => 'text-en-more',
)));

$wp_customize->add_setting( 'text-il-more' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text-il-more', array(
	'label'        => 'Title IL',
	'section'    => 'hzahav-project',
	'settings'   => 'text-il-more',
)));

$wp_customize->add_setting( 'text-m-en-more' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text-m-en-more', array(
	'label'        => 'Text EN',
	'section'    => 'hzahav-project',
	'settings'   => 'text-m-en-more',
)));

$wp_customize->add_setting( 'text-m-il-more' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text-m-il-more', array(
	'label'        => 'Text IL',
	'section'    => 'hzahav-project',
	'settings'   => 'text-m-il-more',
)));

$wp_customize->add_setting( 'button-en-more' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button-en-more', array(
	'label'        => 'Button EN',
	'section'    => 'hzahav-project',
	'settings'   => 'button-en-more',
)));

$wp_customize->add_setting( 'button-en-more' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button-en-more', array(
	'label'        => 'Button EN',
	'section'    => 'hzahav-project',
	'settings'   => 'button-en-more',
)));

$wp_customize->add_setting( 'button-il-more' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'button-il-more', array(
	'label'        => 'Button IL',
	'section'    => 'hzahav-project',
	'settings'   => 'button-il-more',
)));

}
add_action('customize_register', 'projects_customizer');



/*_________________ SEARCH RESULT _________________*/
function search_r_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-search_r' , array(
    'title'      => 'Search Result',
    'priority'   => 30,
));
$wp_customize->add_setting( 'title-result' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title-result', array(
	'label'        => 'Title Result',
	'section'    => 'hzahav-search_r',
	'settings'   => 'title-result',
)));
$wp_customize->add_setting( 'title-result-b' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title-result-b', array(
	'label'        => 'Button',
	'section'    => 'hzahav-search_r',
	'settings'   => 'title-result-b',
)));


$wp_customize->add_setting( 'title-result-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title-result-il', array(
	'label'        => 'Title Result',
	'section'    => 'hzahav-search_r',
	'settings'   => 'title-result-il',
)));
$wp_customize->add_setting( 'title-result-b-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'title-result-b-il', array(
	'label'        => 'Button',
	'section'    => 'hzahav-search_r',
	'settings'   => 'title-result-b-il',
)));

}
add_action('customize_register', 'search_r_customizer');


/*_________________ PRELOADER _________________*/
function preloader_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-preloader' , array(
    'title'      => 'Preloader',
    'priority'   => 30,
));
$wp_customize->add_setting( 'pr-image' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pr-image', array(
	'label'        => 'Image EN',
	'section'    => 'hzahav-preloader',
	'settings'   => 'pr-image',
)));

$wp_customize->add_setting( 'pr-image-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pr-image-il', array(
	'label'        => 'Image IL',
	'section'    => 'hzahav-preloader',
	'settings'   => 'pr-image-il',
)));
}
add_action('customize_register', 'preloader_customizer');




/*_________________ PARTNERS _________________*/
function partners_customizer($wp_customize)
{
$wp_customize->add_section( 'hzahav-partners' , array(
    'title'      => 'Partners',
    'priority'   => 30,
));
$wp_customize->add_setting( 'pr-title' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pr-title', array(
	'label'        => 'Partners Title',
	'section'    => 'hzahav-partners',
	'settings'   => 'pr-title',
)));

$wp_customize->add_setting( 'pr-title-il' , array(
    'default'     => '',
    'transport'   => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pr-title-il', array(
	'label'        => 'Partners Title IL',
	'section'    => 'hzahav-partners',
	'settings'   => 'pr-title-il',
)));
}
add_action('customize_register', 'partners_customizer');




?>





