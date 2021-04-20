<?php /* Template Name: Contacts */ ?>
<?php get_header(); ?>
<section id="contacts">
        <div class="contacts-block flex-direction">
            <div class="contact-block__item-left">
                <div class="contact-block__item-left-title">
                    <h2 class="main-title"><?php the_field('contact_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text"><?php the_field('contact_text');?></p>
                </div>
                <div class="contact-block__item-left-form">
                    <div class="blue-content__left-form">
                      <?php if(ICL_LANGUAGE_CODE=='en') : ?>
                          <?php echo do_shortcode('[contact-form-7 id="843" title="Contact Form"]');?>
                      <?php else : ?>
                        <?php echo do_shortcode('[contact-form-7 id="1006" title="Contact Form IL"]');?>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="contact-bottom-form flex-direction">
                    <div class="contact-phone-left flex-direction">
                        <div class="contact-block-i">
                            <?php $image = get_field('phone_image');?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $imgae['alt'];?>">
                        </div>
                        <div class="contact-block-i flex-column">
                        <?php if( have_rows('phone_numbers') ):
                                        while( have_rows('phone_numbers') ): the_row(); ?>
                            <a class="main-link" href="tel:<?php the_sub_field('number');?>"><?php the_sub_field('number');?></a>
                        <?php endwhile; endif;?> 
                        </div>
                    </div>
                    <div class="contact-email-right">
                        <div class="contact-email flex">
                                <?php $image = get_field('email_image');?>
                                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                <a class="main-link" href="mailto:<?php the_field('contact_email');?>"><?php the_field('contact_email');?></a>
                        </div>
                        <div class="contact-location flex">
                            <?php $image = get_field('location_image');?>
                            <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                           <p class="main-link"><?php the_field('location_text');?></p>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="contact-block__item-right">
            <div class="map-block">
              <?php
                 $gmap = get_field('contact_coordinates');
                //  var_dump($gmap);
                $lat = $gmap['lat'];
                $lng = $gmap['lng'];
                $address = $gmap['address'];
              ?>
<div id="maps">
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb3m5AkiYJXvL6-fzlygwI7hCHwFV0V4k"></script> -->

    <!-- <script type="text/javascript"> -->
    <!-- <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb3m5AkiYJXvL6-fzlygwI7hCHwFV0V4k"></script> -->
    <script type="text/javascript">
    // When the window has finished loading create our google map below
    // google.maps.event.addDomListener(window, 'load', google_maps_init);

    function google_maps_init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 9,

            zoomControl: false,
            scaleControl: false,
            mapTypeControl: false,
            fullscreenControl: false,
            streetViewControl: false,
            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(<?php echo $lat?>,<?php echo $lng?>), // New York 

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


        
// This example displays a marker at the center of Australia.
// When the user clicks the marker, an info window opens.
  const contentString =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<div id="bodyContent">' +
    "<p> <?php echo $address; ?>  " +
    "</p>" +
    "</div>" +
    "</div>";
  const infowindow = new google.maps.InfoWindow({
    content: contentString,
  });
 


        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('maps');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        //

        var iconBase = '<?php echo get_theme_mod('marker');?>';

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(<?php echo $lat;?>, <?php echo $lng;?>),
            map: map,
            icon: iconBase

        });

        marker.addListener("click", () => {
    infowindow.open(map, marker);
  });
  infowindow.open(map,marker);
      
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
            </div>
        </div>
</section>
<?php get_footer(); ?>
