<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ) . ' - '. get_bloginfo( 'description' ) . ' | ' . get_the_title();  ?></title>
    <?php
     wp_head(); 
    ?>
</head>
<body <?php body_class();?>>
<!-- <div id="preloader">
    <div class="loader"
    <?php if (ICL_LANGUAGE_CODE=='en') : ?>
    style="background-image: url('<?php echo get_theme_mod('pr-image');?>'"
    <?php else : ?>
    style="background-image: url('<?php echo get_theme_mod('pr-image-il');?>'"
    <?php endif; ?>
    ></div>
</div> -->
<!-- START HEADER -->
<header id="header">
    <div class="container">
        <div class="main-header flex-direction">
            <div class="menu-left flex-direction">
                <div class="burger-menu">
                        <div class="burger-button"></div>
                </div>
                
                <div class="logo">
                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('logo');?>" alt="logo"></a>
                    <?php else: ?>
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('logo-il');?>" alt="logo"></a>
                    <?php endif; ?>
                </div>    
                <div class="main-menu flex-direction">
                        <?php
                            wp_nav_menu( [
                            'theme_location'  => '',
                            'menu'            => '', 
                            'container'       => 'ul', 
                            'container_class' => '', 
                            'container_id'    => '',
                            'menu_class'      => 'menu'
                            ] );
                        ?>
                </div>
            </div>  
           <div class="menu-right flex-direction">
               <div class="lang">
                   <?php do_action('wpml_add_language_selector');?>
                   <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <a class="search-b" href="/en<?php echo get_theme_mod('logo-s-link');?>"><img src="<?php echo get_theme_mod('logo-s');?>" alt="search"></a>
                    <?php else: ?>
                        <a class="search-b" href="<?php echo get_theme_mod('logo-s-link');?>"><img src="<?php echo get_theme_mod('logo-s');?>" alt="search"></a>
                    <?php endif;?>
                </div>
               <?php if(ICL_LANGUAGE_CODE=='en'): ?>
			   <a class="ph main-text" href="tel:<?php echo get_theme_mod('ph-en');?>"><img src="<?php echo get_theme_mod('logo-ph');?>" alt="phone"><?php echo get_theme_mod('ph');?></a>
               <?php else: ?>
			   <a class="ph main-text" href="tel:<?php echo get_theme_mod('ph-il');?>"><img src="<?php echo get_theme_mod('logo-ph');?>" alt="phone"><?php echo get_theme_mod('ph-show');?></a>
                <?php endif; ?>
               <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                   <a href="/en<?php echo get_theme_mod('l-text');?>" class="button-color"><?php echo get_theme_mod('b-text-en');?></a>
                   <?php else: ?>
                    <a href="<?php echo get_theme_mod('l-text');?>" class="button-color"><?php echo get_theme_mod('b-text');?></a>
                   <?php endif;?>
           </div>
        </div>
    </div>
</header>
<!-- END HEADER -->