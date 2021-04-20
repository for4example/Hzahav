
<?php
get_header();
global $post;
$layouts = get_post_meta($post->ID, 'content', true);
if (is_array($layouts) && in_array('blue-contact', $layouts)) {
  $contact = 1;
}
?>
<section id="without" class="<?php if( is_singular('project') ) { echo 'with-single'; }?> without-single">
        <div class="single-project-without">
                <div class="search-content flex-direction">
                    <div class="search-content__item-left">
                        <div class="search__title">
                            <h1 class="main-title"><?php the_title()?></h1>
                            <p class="main-text"><?php the_excerpt();?></p>
                        </div>
                        <?php if(get_field('single_project_link')){ ?>
                        <div class="search__button">
                          <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                            <a href="#blue-contact" class="button-color"><?php the_field('single_project_button');?></a>
                          <?php else: ?>
                            <a href="#blue-contact" class="button-color"><?php the_field('single_project_button');?></a>
                         <?php endif; ?>
                          </div>
                        <?php } ?>
                    </div>
                    <div class="search-content__item-right">
                        <div class="slick-controls flex-direction">
                            <div class="carousel-controls__prev"></div>
                            <hr>
                            <div class="carousel-controls__next"></div>
                        </div>
                        <div class="search-content__slider">
                        <?php if( have_rows('block_slider') ):
                              while( have_rows('block_slider') ): the_row(); ?>
                              <?php $image = get_sub_field('s_image');?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                        <?php endwhile; endif; ?>
                        </div>

                    </div>
                </div>
                <div class="search-box">
                    <div class="search-box__content flex-direction">
                        <div class="search-box__item single_search-box">
                            <h2 class="single-blog-title"><?php the_field('block_main_title');?></h2>
                        <div class="single-project flex-direction">
                                <div class="project-item">
                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_area_image');?>
                                        <img src="<?php echo get_theme_mod('area');?>" alt="area">
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <span><?php the_field('block_area_select');?></span>
                                        <?php else: ?>
                                        <span><?php the_field('block_area_select_il');?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="project-item">
                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_religious_character');?>
                                        <img src="<?php echo get_theme_mod('relation');?>" alt="relation">
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <span><?php the_field('block_religious_select');?></span>
                                        <?php else: ?>
                                          <span><?php the_field('block_religious_select_il');?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="project-item">
                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_house_character');?>
                                        <img src="<?php echo get_theme_mod('apartament');?>" alt="apartament">
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <span><?php the_field('block_house_select');?></span>
                                        <?php else: ?>
                                        <span><?php the_field('block_house_select_il');?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="project-item">
                                    <div class="block-content-about__item flex-direction">
                                        <?php  $image = get_field('block_price_character');?>
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <img src="<?php echo get_theme_mod('price');?>" alt="price">
                                    <?php else: ?>
                                        <img src="<?php echo get_theme_mod('price-il');?>" alt="price">
                                    <?php endif; ?>
                                        <span><?php the_field('block_price_select');?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<section id="main-content" class="main-content">
    <div class="container">
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post(); ?>
                        <div class="about-project">
                            <div class="about-project__title">
                                <h2 class="main-title"><?php the_field('about_title');?></h2>
                                <hr class="main-line">
                                <span class="main-text"><?php the_field('about_sub');?></span>
                            </div>
                            <div class="about-project__content wrap flex-direction">
                            <?php if( have_rows('about_content') ):
                                while( have_rows('about_content') ): the_row(); ?>
                                <div class="about-project__content-item">
                                    <div class="about-project__content-title">
                                        <h2 class="main-title"><?php the_sub_field('about_content_title');?></h2>
                                        <p class="main-text"><?php the_sub_field('about_content_text');?></p>
                                    </div>
                                    <div class="about-project__content-image flex-direction">
                                        <?php $image = get_sub_field('about_content_im');?>
                                        <a data-fancybox="gallery" href="<?php echo $image['url'];?>">
                                          <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                        </a>

                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                            <div class="about-project__content-button flex-direction">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2 class="main-title-block"><?php echo get_theme_mod('text-en-more');?></h2>
                                <p class="main-text"><?php the_field('about_text_more_button');?></p>
                                <?php if($contact == 1) :  ?>
                                  <a class="button-more single-more" href="#blue-contact"><?php echo get_theme_mod('button-en-more');?></a>
                                <?php else: ?>
                                  <a class="button-more single-more" href="/en/contacts/"><?php echo get_theme_mod('button-en-more');?></a>
                                <?php endif;?>
                              <?php else: ?>
                              <h2 class="main-title-block"><?php echo get_theme_mod('text-il-more');?></h2>
                                <p class="main-text"><?php the_field('about_text_more_button');?></p>
                                <?php if($contact == 1) :  ?>
                                  <a class="button-more single-more" href="#blue-contact"><?php echo get_theme_mod('button-il-more');?></a>
                                <?php else: ?>
                                  <a class="button-more single-more" href="/contacts/"><?php echo get_theme_mod('button-il-more');?></a>
                                <?php endif;?>
                            <?php endif;?>
                              </div>
                        </div>
                    <?php endwhile;?>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div>
</section><!-- #main-content -->


<?php if( have_rows('content') ):
      while ( have_rows('content') ) : the_row();
      if(get_row_layout() == "our-stats-block"): ?>
    <section id="our-stats">
        <div class="container">
            <div class="our-stats__content">
                <div class="our-stats__top-title">
                    <h2 class="main-title-block"><?php the_sub_field('stats_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block"><?php the_sub_field('our_subtitle');?></p>
                </div>
                <?php if( get_sub_field('change_style_our_stats') ) { $new_style = 'our-stats__styled'; }?>
                <div class="our-stats__blocks flex-direction">
                <?php if( have_rows('our_blocks') ):
                        while( have_rows('our_blocks') ): the_row(); ?>
                    <div class="our-stats__block-item <?php echo $new_style;?>">
                        <?php $image = get_sub_field('our__image');?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                        <div class="our-stats__block-item-titles">
                            <h2><?php the_sub_field('our__title');?></h2>
                            <p><?php the_sub_field('our__text');?></p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "contact-grey-block") : ?>
<!-- CONTACT GREY BLOCK -->
    <section class="contact-block <?php if( get_sub_field('color_change') ) { echo 'blue-section'; }?>">
        <div class="container">
            <div class="content-grey">
                <div class="content-grey__title">
                    <h2 class="main-title-block <?php if( get_sub_field('color_change') ) { echo 'text-colored'; }?>"><?php the_sub_field('contact_grey_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block <?php if( get_sub_field('color_change') ) { echo 'text-colored'; }?>"><?php the_sub_field('contact_grey_subtitle');?></p>
                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                      <a href="/en/<?php the_sub_field('contact_grey_link');?>" class="button-color"><?php the_sub_field('contact_grey_button_text');?></a>
                    <?php else: ?>
                      <a href="<?php the_sub_field('contact_grey_link');?>" class="button-color"><?php the_sub_field('contact_grey_button_text');?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "why-us") : ?>
<!-- WHY CHOOSE US -->
    <section id="why-us">
        <div class="container">
            <div class="why-content flex">
                <div class="why-content__content-left">
                    <div class="why-content__content-left-image">
                        <?php $image = get_sub_field('why_image');?>
                        <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </div>
                </div>
                <div class="why-content__content-right">
                    <div class="why-content__content-right-title">
                        <h2 class="main-title"><?php the_sub_field('why_title');?></h2>
                        <hr class="main-line">
                        <p class="main-text"><?php the_sub_field('why_text');?></p>
                    </div>
                    <div class="why-content__content-right-list">
                        <ol class="why-list">
                        <?php if( have_rows('why_list') ):
                              while( have_rows('why_list') ): the_row(); ?>
                            <li class="main-text list-item">
                                <?php the_sub_field('list_text');?>
                            </li>
                        <?php endwhile; endif; ?>
                        </ol>
                        <?php if($contact == 1) :  ?>
                          <a class="button-more single-more" href="#blue-contact"><?php the_sub_field('why_button');?></a>
                        <?php else: ?>
                          <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                          <a class="button-more single-more" href="/en/contacts/"><?php the_sub_field('why_button');?></a>
                          <?php else : ?>
                            <a class="button-more single-more" href="/contacts/"><?php the_sub_field('why_button');?></a>
                        <?php endif; endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "blue-contact") : ?>
<!-- CONTACT BLUE FORM -->
    <section id="blue-contact">
        <div class="container">
            <div class="blue-content flex-direction">
                <div class="blue-content__left blue-content__blocks">
                    <div class="blue-content__left-title">
                        <h2 class="main-title"><?php the_sub_field('blue_title');?></h2>
                        <hr class="main-line">
                        <p class="main-text"><?php the_sub_field('blue_text');?></p>
                    </div>
                    <div class="blue-content__left-form">
                      <?php if(ICL_LANGUAGE_CODE=='en') : ?>
                          <?php echo do_shortcode('[contact-form-7 id="843" title="Contact Form"]');?>
                      <?php else : ?>
                        <?php echo do_shortcode('[contact-form-7 id="1006" title="Contact Form IL"]');?>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="blue-content__right blue-content__blocks">
                    <div class="blue-content__right-image">
                        <?php $image = get_sub_field('blue_image');?>
                        <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "more-posts") : ?>
<!-- MORE POSTS -->
    <section id="project" class="project-more">
        <div class="container">
            <div class="project-content">
                <div class="project-content__titles">
                    <h2 class="main-title-block"><?php the_sub_field('more_title');?></h2>
                </div>
                    <div class="project-content__blocks flex-direction wrap">
                        <?php
                            $term = get_queried_object();
                            $term_type = $term->post_type;
                            $args = array(
                                'post_type'=> $term_type,
                                'order'    => 'DESC',
                                'posts_per_page' => 3
                            );
                            $the_query = new WP_Query( $args );
                            if($the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                        ?>
                        <div class="project-content__block-item">
                            <div class="block-image">
                              <a href="<?php echo get_permalink();?>"> <img class="pr-img" src="<?php echo get_the_post_thumbnail_url();?>" alt="img"></a>
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
                        <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "map-full") : ?>
<!-- MAP FULL WIDTH -->
<section id="map">
    <div class="container">
        <div class="map-content">
        <div class="map-content__block border">
            <div class="map-content__block-title">
                <h2 class="main-title"><?php the_sub_field('map_title');?></h2>
            </div>
            <div class="map-content__block-items flex-column">
            <?php if( have_rows('map_content') ):
                    while( have_rows('map_content') ): the_row(); ?>
                <div class="map-content__block-i flex">
                    <div class="block-image">
                        <?php $image = get_sub_field('map_image');?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </div>
                   <div class="block-content-text">
                        <span class="main-text-colored"><?php the_sub_field('map_block_title');?></span>
                        <p class="main-text"><?php the_sub_field('map_block_text');?></p>
                   </div>
                </div>
            <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    </div>
    <?php
        $gmap = get_sub_field('coordinates');
        // var_dump($gmap);
        $lat = $gmap['lat'];
        $lng = $gmap['lng'];
    ?>
    <div class="map-block">


<div id="maps">
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb3m5AkiYJXvL6-fzlygwI7hCHwFV0V4k"></script> -->

    <!-- <script type="text/javascript"> -->
    <!-- <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb3m5AkiYJXvL6-fzlygwI7hCHwFV0V4k"></script> -->
    <script type="text/javascript">
    // When the window has finished loading create our google map below
    // google.maps.event.addDomListener(window, 'load', google_maps_init);

    function google_maps_init() {
      // if (window.screen.width < 760) {
      //   console.log('123');
      //     let centr1 = Math.round(<?php echo $lat; ?>) + 10;
      //         let centr2 = Math.round(<?php echo $lng; ?>) + 10; // New York
      //       }else{
      //         let centr1 = <?php echo $lat;?>; // New York
      //         let centr2 = <?php echo $lng; ?>;
      //       }
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            zoomControl: false,
            scaleControl: false,
            mapTypeControl: false,
            fullscreenControl: false,
            streetViewControl: false,
            // The latitude and longitude to center the map (always required)
              center: new google.maps.LatLng(<?php echo $lat;?>, <?php echo $lng; ?>), // New York
            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]



        };


        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('maps');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        //

        var iconBase = '<?php echo get_theme_mod('marker');?>';

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $lat;?>, <?php echo $lng; ?>),
            map: map,
            icon: iconBase
        });

        // Create a div to hold the control. Кнопка "Украина"
        var controlDiv = document.createElement('location-ukr');

        // Set CSS for the control border
        var controlUI = document.createElement('button');
        controlUI.style.backgroundColor = '#fff';
        controlUI.style.border = '2px solid #fff';
        controlUI.style.cursor = 'pointer';
        controlUI.style.marginBottom = '22px';
        controlUI.style.textAlign = 'center';
        controlDiv.appendChild(controlUI);

        // Set CSS for the control interior
        var controlText = document.createElement('button-name-ukr');
        controlText.style.color = 'rgb(25,25,25)';
        controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
        controlText.style.fontSize = '16px';
        controlText.style.lineHeight = '38px';
        controlText.style.paddingLeft = '5px';
        controlText.style.paddingRight = '5px';
        controlText.innerHTML = 'Center Map';
        controlUI.appendChild(controlText);
    }

    function google_maps_lazyload(api_key) {
        'use strict'

        if (api_key) {
            var options = {
                rootMargin: '100px',
                threshold: 0
            }

            var map = document.getElementById('maps')

            var observer = new IntersectionObserver(
                function(entries, self) {
                    // Intersecting with Edge workaround https://calendar.perfplanet.com/2017/progressive-image-loading-using-intersection-observer-and-sqip/#comment-102838
                    var isIntersecting = typeof entries[0].isIntersecting === 'boolean' ? entries[0]
                        .isIntersecting : entries[0].intersectionRatio > 0
                    if (isIntersecting) {
                      <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        var mapsJS = document.createElement('script')
                        mapsJS.src =
                            'https://maps.googleapis.com/maps/api/js?callback=google_maps_init&key=AIzaSyCcKjtYYM0v6WxwYfwPwBwjyPEDi14PPX8&region=EN&language=en'

                        document.getElementsByTagName('head')[0].appendChild(mapsJS)
                        self.unobserve(map)
                    <?php else: ?>
                      var mapsJS = document.createElement('script')
                        mapsJS.src =
                            'https://maps.googleapis.com/maps/api/js?callback=google_maps_init&key=AIzaSyCcKjtYYM0v6WxwYfwPwBwjyPEDi14PPX8&region=IW&language=iw'

                        document.getElementsByTagName('head')[0].appendChild(mapsJS)
                        self.unobserve(map)
                    <?php endif; ?>
                    }
                },
                options
            )

            observer.observe(map)
        }
    }

    google_maps_lazyload("AIzaSyCcKjtYYM0v6WxwYfwPwBwjyPEDi14PPX8")
    </script>




</div>
</div>
</section>




<?php elseif(get_row_layout() == "the-models") : ?>
<!-- THE MODELS -->
<section id="the-models">
    <div class="container">
        <div class="the-model-content">
            <div class="the-model-content__title">
                <h2 class="main-title"><?php the_sub_field('models_title');?></h2>
                <hr class="main-line">
                <p class="main-text"><?php the_sub_field('models_sub_title');?></p>
            </div>
            <div class="the-model-content__block">
                <div class="tabs">
                  <ul class="tabs-top d-flex">
                    <?php if( have_rows('model_tabs') ):
                             while( have_rows('model_tabs') ): the_row();  $i++; ?>
                      <li class="tab" data="<?php echo $i;?>"><?php the_sub_field('tab_title');?></li>
                    <?php endwhile; endif; $i=0; ?>
                  </ul>
                  <div class="tabs-content">
                    <?php if( have_rows('tab_content') ):
                          while( have_rows('tab_content') ): the_row();  $i++; ?>
                    <div id="content-<?php echo $i;?>" class="tabs-i-main">
                        <div class="tab-content-left">
                            <div class="tab-content-title">
                                <h2 class="main-text"><?php the_sub_field('tab_content_title');?></h2>
                                <hr class="main-line">
                            </div>
                            <div class="tab-content__block flex">
                            <?php if( have_rows('tab_items') ):
                                while( have_rows('tab_items') ): the_row(); ?>
                                <div class="tab-content__items flex-direction">
                                    <?php $image = get_sub_field('tab_image');?>
                                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                    <p class="main-text"><?php the_sub_field('tab_inside_text');?></p>
                                </div>
                            <?php endwhile; endif;?>
                            </div>
                            <p class="main-text"><?php the_sub_field('tab_main_text');?></p>
                        </div>
                        <div class="tab-content-right">
                            <div class="tab-slider flex-direction">
                            <?php if( have_rows('tab_images_inside') ):
                                while( have_rows('tab_images_inside') ): the_row(); ?>
                            <?php $image = get_sub_field('tab_i');?>
                                <div class="tab-image-slider">
                                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                            <div class="tab-slider-nav flex-direction">
                            <?php if( have_rows('tab_images_inside') ):
                                while( have_rows('tab_images_inside') ): the_row(); ?>
                            <?php $image = get_sub_field('tab_i');?>
                                <div class="tab-image-slider">
                                    <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif;?>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; endwhile; endif; get_footer(); ?>