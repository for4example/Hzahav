<?php /* Template Name: Page Template */ ?>
<?php get_header(); ?>

<?php if( have_rows('content') ):
      while ( have_rows('content') ) : the_row();
      if( get_row_layout() == 'search-block' ): 
?>
<!-- SEARCH CONTENT BLOCK  -->
    <section id="search-block">
    <div class="search-block">
                <div class="search-content flex-direction">
                    <div class="search-content__item-left">
                        <div class="search__title">
							  <?php $image = get_sub_field('search_upper_img');?>
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
<!--                             <p class="main-text"><?php the_sub_field('search_upper_title');?></p> -->
                            <h1 class="main-title"><?php the_sub_field('search_title');?></h1>
                            <p class="main-text"><?php the_sub_field('search_sub_title');?></p>
                        </div>
                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <div class="search__button">
                            <a href="/en/<?php the_sub_field('search_button_link');?>" class="button-color"><?php the_sub_field('search_button_title');?></a>
                        </div>
                    <?php else : ?>
                        <div class="search__button">
                            <a href="<?php the_sub_field('search_button_link');?>" class="button-color"><?php the_sub_field('search_button_title');?></a>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="search-content__item-right">
                        <div class="slick-controls flex-direction">
                            <div class="carousel-controls__prev"></div>
                            <hr>
                            <div class="carousel-controls__next"></div>
                        </div>
                        <div class="search-content__slider">
                            <?php if( have_rows('search_slider') ):
                                  while( have_rows('search_slider') ): the_row(); ?>
                                <?php $image = get_sub_field('slider__image');?>
                                <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                            <?php endwhile; endif; ?>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="search-box">
                    <form method="post">
                    <div class="search-box__content flex-direction">
                        <div class="search-box__item">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2><?php echo get_theme_mod('search-title-area');?></h2>
                            <?php else: ?>
                                <h2><?php echo get_theme_mod('search-title-area-il');?></h2>
                            <?php endif ;?>
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger area">
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                       <span>choose option</span> 
                                    <?php else: ?>
                                        <span>בחר באפשרות</span> 
                                   <?php endif ;?>
                                    </div>
                                    <div class="custom-options">
                                        <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <?php $select_en = get_field_object('block_area_select');
                                            foreach ($select_en['choices'] as $sel_en) {  ?>
                                            <span class="custom-option" data-value="tesla"><?php echo $sel_en;?></span>
                                        <?php } ?>
                                        <?php else : ?>
                                        <?php $select = get_field_object('block_area_select_il');
                                            foreach ($select['choices'] as $sel) {  ?>
                                            <span class="custom-option" data-value="tesla"><?php echo $sel;?></span>
                                        <?php } ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-box__item">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2><?php echo get_theme_mod('search-title-rel');?></h2>
                            <?php else: ?>
                                <h2><?php echo get_theme_mod('search-title-rel-il');?></h2>
                            <?php endif ;?>
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger religious">
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                       <span>choose option</span> 
                                    <?php else: ?>
                                        <span>בחר באפשרות</span> 
                                   <?php endif ;?>
                                    </div>
                                    <div class="custom-options">
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                    <?php $select_en = get_field_object('block_religious_select');
                                        foreach ($select_en['choices'] as $sel_en) {  ?>
                                           <span class="custom-option" data-value="tesla"><?php echo $sel_en;?></span>
                                    <?php } ?>
                                    <?php else: ?>
                                    <?php $select = get_field_object('block_religious_select_il');
                                        foreach ($select['choices'] as $sel) {  ?>
                                           <span class="custom-option" data-value="tesla"><?php echo $sel;?></span>
                                    <?php } ?>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-box__item">
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <h2><?php echo get_theme_mod('search-title-house');?></h2>
                            <?php else: ?>
                                <h2><?php echo get_theme_mod('search-title-house-il');?></h2>
                            <?php endif ;?>
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger house">
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                       <span>choose option</span> 
                                    <?php else: ?>
                                        <span>בחר באפשרות</span> 
                                   <?php endif ;?>
                                    </div>
                                    <div class="custom-options">
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                    <?php $select_en = get_field_object('block_house_select');
                                        foreach ($select_en['choices'] as $sel_en) {  ?>
                                           <span class="custom-option" data-value="tesla"><?php echo $sel_en;?></span>
                                    <?php } ?>
                                    <?php else: ?>
                                    <?php $select = get_field_object('block_house_select_il');
                                        foreach ($select['choices'] as $sel) {  ?>
                                           <span class="custom-option" data-value="tesla"><?php echo $sel;?></span>
                                    <?php } ?>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search__input">
                            <input type="submit" value="<?php if(ICL_LANGUAGE_CODE=='en'):?>Search<?php else: ?>לחפש<?php endif ;?>">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </section>

<?php elseif(get_row_layout() == "first-without"): ?>
<!-- FIRST SECTION WITHOUT SEARCH -->
    <section id="<?php if( get_sub_field('make_slider') ) { echo 'search-block'; } else { echo 'without'; }?>" class="<?php if( is_page() ) { echo 'with'; }?>">
    <?php if( get_sub_field('make_slider') ) { echo '<div class="search-block">'; } else { echo '<div class="search-block-without">'; }?>
    
                <div class="search-content flex-direction <?php if( get_sub_field('change_direction') ) { echo 'row-reverse'; }?>">
                    <div class="search-content__item-left">
                        <div class="search__title">
                            <h1 class="main-title"><?php the_sub_field('first_without_title');?></h1>
                            <p class="main-text"><?php the_sub_field('first_without_sub_title');?></p>
                        </div>
                        <div class="search__button">
                            <a href="<?php the_sub_field('first_without_button_link');?>" class="button-color"><?php the_sub_field('first_without_button_title');?></a>
                        </div>
                    </div>
                    <div class="search-content__item-right">
                        <div class="slick-controls flex-direction">
                            <div class="carousel-controls__prev"></div>
                            <hr>
                            <div class="carousel-controls__next"></div>
                        </div>
                        <div class="<?php if( get_sub_field('make_slider') ) { echo 'section-slider'; };?> flex-direction">
                            <?php $image_left = get_sub_field('first_without_image_left');?>
                            <?php $image_right = get_sub_field('first_without_image_right');?>
                            <img class="border" src="<?php echo $image_left['url'];?>" alt="<?php echo $image_left['alt'];?>">
                            <img class="border" src="<?php echo $image_right['url'];?>" alt="<?php echo $image_right['alt'];?>">
                        </div>
                    </div>
                </div>
            </div>
    </section>

<?php elseif(get_row_layout() == "about-us-block"): ?>
<?php if(get_sub_field('on_off_aboutus')): ?>
<!-- ABOUT US BLOCK  -->
    <section id="about-us">
        <div class="container">
            <div class="about-us__content flex">
                <div class="about-us__content-left">
                    <?php $image = get_sub_field('about_image');?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                </div>
                <div class="about-us__content-right">
                    <div class="about-us__content-title">
                        <h2 class="main-title"><?php the_sub_field('about_title');?></h2>
                        <hr class="main-line">
                        <p class="main-text"><?php the_sub_field('about_text');?></p>
                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                        <a class="colored-link" href="/en/<?php the_sub_field('about_link');?>"><?php the_sub_field('about_button');?></a>
                    <?php else : ?>
                        <a class="colored-link" href="<?php the_sub_field('about_link');?>"><?php the_sub_field('about_button');?></a>
                    <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>
<?php elseif(get_row_layout() == "our-stats-block"): ?>
<!-- OUR STATS BLOCK -->
    <section id="our-stats">
        <div class="container">
            <div class="our-stats__content">
                <div class="our-stats__top-title">
                    <h2 class="main-title-block"><?php the_sub_field('stats_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block"><?php the_sub_field('our_subtitle');?></p>
                </div>
                <div class="our-stats__blocks flex-direction">
                <?php if( have_rows('our_blocks') ):
                        while( have_rows('our_blocks') ): the_row(); ?>
                    <div class="our-stats__block-item">
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

<?php elseif(get_row_layout() == "project-block"): ?>
<!-- PROJECT BLOCK -->
    <section id="project">
        <div class="container">
            <div class="project-content">
                <div class="project-content__titles">
                    <h2 class="main-title-block"><?php the_sub_field('project_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block"><?php the_sub_field('project_subtitle');?></p>
                </div>
                    <div class="project-content__blocks flex-direction wrap">
                    <?php 
                        $args = array(
                        'post_type'=> 'project',
                        'posts_per_page' => 9,
                        'order'    => 'ASC'
                        );              
                        $the_query = new WP_Query( $args );
                        if($the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : 
                        $the_query->the_post();
                    ?>
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
                                    <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                        <img src="<?php echo get_theme_mod('price');?>" alt="price">
                                    <?php else: ?>
                                        <img src="<?php echo get_theme_mod('price-il');?>" alt="price">
                                    <?php endif; ?>
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
                    <?php if (is_front_page()) { ?>
                        <a href="<?php the_sub_field('project_link');?>" class="button-more"><?php the_sub_field('project_button');?></a>
                    <?php } else { ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var posts = '<?php echo serialize($the_query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_page = '<?php echo $the_query->max_num_pages; ?>';
                    </script>
                    <?php
                        if (  $the_query->max_num_pages > 1)
                            echo '<input type="submit" class="button-load-more misha_loadmore" value="Load more">';
                    } ?>    
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
                    <?php else : ?>
                        <a href="<?php the_sub_field('contact_grey_link');?>" class="button-color"><?php the_sub_field('contact_grey_button_text');?></a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "blog-block"): ?>
<?php if(get_sub_field('on_off_blog')):?>
<!-- BLOG -->
    <section id="blog">
        <div class="container">
            <div class="blog-content">
                <div class="blog-content__title">
                    <h2 class="main-title-block"><?php the_sub_field('blog_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block"><?php the_sub_field('blog_desc');?></p>
                </div>
                <div class="blog-content__blocks">
                <?php if( have_rows('content_blocks') ):
                        while( have_rows('content_blocks') ): the_row(); ?>
                    <div class="blog-content__blocks-item flex-direction">
                        <div class="blog-content__blocks-item-title">
                            <a href="<?php the_sub_field('block_l');?>" class="blog-link"><?php the_sub_field('block_t');?></a>
                            <p class="blog-text"><?php the_sub_field('block_s_t');?></p>
                            <a href="<?php the_sub_field('block_l');?>" class="colored-link"><?php the_sub_field('block_b');?></a>
                        </div>
                        <div class="blog-content__block-item-image">
                            <?php $image = get_sub_field('block_i');?>
                            <img class="blog-img border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php elseif(get_row_layout() == "articles-block"): ?>
<?php if(get_sub_field('on_off_article')): ?>
<!-- ARTICLES BLOCK -->
    <section id="articles">
        <div class="container">
            <div class="articles-content">
                <div class="articles-content__title">
                    <h2 class="main-title-block"><?php the_sub_field('article_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block"><?php the_sub_field('article_desc');?></p>
                </div>
                <div class="articles-content__blocks">
                    <div class="article-parent">
                        <?php 
                            $args = array(
                            'post_type'=> 'articles',
                            'order'    => 'DESC',
                            'posts_per_page' => 4
                            );              
                            $the_query = new WP_Query( $args );
                            $i = 0;
                            if($the_query->have_posts() ) : 
                            while ( $the_query->have_posts() ) : 
                                $i ++;
                            $the_query->the_post();
                            
                        ?>
                        <div class="div<?php echo $i;?> arcticels-i">
                             <div class="articles-item flex-direction">
                                 <div class="articles-item__image">
                                   <a href="<?php echo get_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="img"></a> 
                                 </div>
                                 <div class="articles-item__content">
                                   <a class="blog-link" href="<?php echo get_permalink();?>"><?php the_title();?></a>
                                   <p class="main-text"><?php the_excerpt();?></p>
                                   <a href="<?php echo get_permalink();?>" class="colored-link">Read more</a>
                                 </div>
                             </div>        
                        </div>
                    <?php endwhile; endif;  wp_reset_query(); ?>
                    </div>
                </div>
                <?php if (is_front_page()) { ?>
                <?php if (ICL_LANGUAGE_CODE=='en'): ?>
                        <a href="/en/<?php the_sub_field('article_link');?>" class="button-more"><?php the_sub_field('article_button');?></a>
                <?php else : ?>
                    <a href="<?php the_sub_field('article_link');?>" class="button-more"><?php the_sub_field('article_button');?></a>
                <?php endif; } else { ?>
                    <script>
  var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  var posts = '<?php echo serialize($the_query->query_vars); ?>';
  var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
  var max_page = '<?php echo $the_query->max_num_pages; ?>';
  </script>
                    <?php
// don't display the button if there are not enough posts
if (  $the_query->max_num_pages > 1 )
	echo '<input type="submit" class="button-load-more misha_loadmore" value="Load more">'; // you can use <a> as well
                    } ?>
                    
            </div>
        </div>
    </section>
<?php endif; ?>
<?php elseif(get_row_layout() == "media-block"): ?>
<!-- MEDIA BLOCK -->
    <section id="media">
        <div class="container">
            <div class="media-content">
                <div class="media-content__title">
                    <h2 class="main-title-block"><?php the_sub_field('media_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block"><?php the_sub_field('media_desc');?></p>
                </div>
                <div class="media-content__blocks">
                    <div class="parent">
                    <?php 
                            $args = array(
                                'posts_per_page' => 6,
                                'order'    => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'post_format',
                                        'field' => 'slug',
                                        'terms' => array( 'post-format-image' )
                                    )
                                )
                            );
                            $the_query = new WP_Query( $args );
                            $i = 0;
                            if($the_query->have_posts() ) : 
                            while ( $the_query->have_posts() ) : 
                            $i ++;
                            $the_query->the_post();
                        ?>
                           
                            <div class="div<?php echo $i;?> media-block-i"> 
                                <a href="<?php echo get_permalink();?>">
                                <div class="media-content-item" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')">
                                    <div class="media-content-item__title flex-base">
                                        <div class="media-content-item__bg flex-base">
                                            <p class="blog-link"><?php the_title();?></p>
                                            <span class="date"><?php echo get_the_date();?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                                
                            </div>
                        <?php endwhile; endif;  wp_reset_query(); ?>
                    </div>
                    <?php if (is_front_page()) { ?>
                    <?php if (ICL_LANGUAGE_CODE=='en'): ?>
                        <a href="/en/<?php the_sub_field('media_link');?>" class="button-more"><?php the_sub_field('media_button');?></a>
                    <?php else : ?>
                        <a href="<?php the_sub_field('media_link');?>" class="button-more"><?php the_sub_field('media_button');?></a>
                   <?php endif; } else { ?>
                    <script>
  var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  var posts = '<?php echo serialize($the_query->query_vars); ?>';
  var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
  var max_page = '<?php echo $the_query->max_num_pages; ?>';
  </script>
                    <?php
// don't display the button if there are not enough posts
if (  $the_query->max_num_pages > 1 )
	echo '<input type="submit" class="button-load-more misha_loadmore" value="Load more">'; // you can use <a> as well
                    } ?>
                    
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "partners-block"): ?>
<!-- PARTNERS BLOCK -->
    <section id="partners" class="<?php if( get_sub_field('color_change_partner') ) { echo 'blue-section'; }?><?php if( get_sub_field('color_change_partner_grey') ) { echo 'grey-section'; }?>">
        <div class="container">
            <div class="partners-content">
                <div class="partners-title">
                <?php if (ICL_LANGUAGE_CODE=='en'): ?>
                    <h2 class="main-title-block"><?php echo get_theme_mod('pr-title');?></h2>
                <?php else: ?>
                    <h2 class="main-title-block"><?php echo get_theme_mod('pr-title-il');?></h2>
                <?php endif; ?>
                    <hr class="main-line">
                </div>
                <div class="partners-image flex-direction">
                <?php if( have_rows('partners_image') ):
                        while( have_rows('partners_image') ): the_row(); ?>
                        <?php $image = get_sub_field('part_image');?>
                    <div class="partners-image__item">
                        <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                    </div>
                <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "about-project-block"): ?>
<!-- ABOUT OUR PROJECTS -->
    <section id="about-project">
        <div class="container">
            <div class="about-project__content flex">
                <div class="about-project__content-left">
                    <div class="about-project__content-images flex">
                        <?php $image_left = get_sub_field('about_image_left');?>
                        <!-- <?php $image_right = get_sub_field('about_image_right');?> -->
                        <img src="<?php echo $image_left['url'];?>" alt="<?php echo $image_left['alt'];?>">
                        <!-- <img src="<?php echo $image_right['url'];?>" alt="<?php echo $image_right['alt'];?>"> -->
                    </div>
                </div>
                <div class="about-project__content-right">
                    <div class="about-project__content-title">
                        <h2 class="main-title"><?php the_sub_field('about_project_title');?></h2>
                        <hr class="main-line">
                        <p class="main-text"><?php the_sub_field('about_project_text');?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "about-info"): ?>
<!-- ABOUT INFO -->
    <section id="about-info">
        <div class="container">
            <div class="about-info__content">
                <div class="about-info__content-title">
                    <h2 class="main-title"><?php the_sub_field('about_info_main');?></h2>
                    <hr class="main-line">
                </div>
                <div class="about-info__main-content">
                    <div class="about-info__main-content-block flex">
                        <div class="about-info__block-image">
                            <?php $image = get_sub_field('about_info_image_left');?>
                            <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                        </div>
                        <div class="about-info__block-title">
                            <h2 class="main-title"><?php the_sub_field('about_info_project_title');?></h2>
                            <p class="main-text"><?php the_sub_field('about_info_project_text');?></p>
                        </div>
                    </div>
                    <div class="about-info__main-content-block flex-reverse">
                        <div class="about-info__block-image two-img flex">
                            <?php $image_left = get_sub_field('about_info_image_left_copy');?>
                            <?php $image_right = get_sub_field('about_info_image_right');?>
                            <img class="border" src="<?php echo $image_left['url'];?>" alt="<?php echo $image_left['alt'];?>">
                            <img class="border" src="<?php echo $image_right['url'];?>" alt="<?php echo $image_right['alt'];?>">
                        </div>
                        <div class="about-info__block-title">
                            <h2 class="main-title"><?php the_sub_field('about_info_project_title');?></h2>
                            <p class="main-text"><?php the_sub_field('about_info_project_text');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "our-team"): ?>
<!-- OUR TEAM -->
    <section id="our-team">
        <div class="container">
            <div class="main-team">
                <div class="our-team__content">
                    <div class="our-team__content-title">
                        <h2 class="main-title"><?php the_sub_field('our_title');?></h2>
                        <hr class="main-line">
                    </div>
                    <div class="our-team__content-blocks flex-direction wrap">
                    <?php if( have_rows('our_info') ):
                        while( have_rows('our_info') ): the_row(); ?>
                        <div class="our-team__content-blocks-item">
                            <div class="our-team__item">
                                <div class="our-team__item-image">
                                <?php $image = get_sub_field('our_img');?>
                                    <img class="team-border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                </div>
                                <div class="our-team__item-content">
                                    <h2 class="main-text"><?php the_sub_field('our_t');?></h2>
                                    <hr class="main-line">
                                    <p class="main-text"><?php the_sub_field('our_sub');?></p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php elseif(get_row_layout() == "our-clients"): ?>
<!-- OUR TEAM -->
    <section id="our-team">
        <div class="container">
            <div class="our-team__content">
                <div class="our-team__content-title">
                    <h2 class="main-title"><?php the_sub_field('our_title');?></h2>
                    <hr class="main-line">
                </div>
                <div class="our-team__content-blocks flex-direction wrap">
 				<?php 
                        $args = array(
                        'post_type'=> 'clients',
                        'posts_per_page' => 9,
                        'order'    => 'ASC'
                        );              
                        $the_query = new WP_Query( $args );
                        if($the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : 
                        $the_query->the_post();
                    ?>
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
                <?php endwhile; endif; wp_reset_query(); ?>
                </div>
                <?php if (is_front_page()) { ?>
                        <a href="<?php the_sub_field('our_link');?>" class="button-more"><?php the_sub_field('our_button');?></a>
                    <?php } else { ?>
                    <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var posts = '<?php echo serialize($the_query->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_page = '<?php echo $the_query->max_num_pages; ?>';
                    </script>
                    <?php
                        if (  $the_query->max_num_pages > 1)
                            echo '<input type="submit" class="button-load-more misha_loadmore" value="Load more">';
                    } ?>    
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "all-projects"): ?>
<!-- ABOUT PROJECTS -->
    <section id="projects">
        <div class="container">
            <div class="projects-content">
                <div class="projects-content__blocks">
                <?php if( have_rows('project_blocks') ):
                      while( have_rows('project_blocks') ): the_row(); ?>
                    <div class="projects-content__blocks-item flex-direction">
                        <div class="project-blocks__title">
                            <h2 class="main-title"><?php the_sub_field('project_title');?></h2>
                            <hr class="main-line">
                            <p class="main-text"><?php the_sub_field('project_text');?></p>
                            <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                                <a href="/en/<?php the_sub_field('project_link');?>" class="button-color"><?php the_sub_field('project_button');?></a>
                            <?php else : ?>
                                <a href="<?php the_sub_field('project_link');?>" class="button-color"><?php the_sub_field('project_button');?></a>
                            <?php endif; ?>
                            </div>
                        <div class="project-blocks__item">
                            <div class="parent flex-direction">
                                <div class="left-image-block project-i-blocks"> 
                                <?php if( have_rows('project_first_images') ):
                                     while( have_rows('project_first_images') ): the_row(); ?>
                                <?php $image = get_sub_field('l_image');?>
                                    <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                    <?php endwhile; endif;?>
                                </div>
                                <div class="right-image-block project-i-blocks"> 
                                <?php if( have_rows('project_second_images') ):
                                     while( have_rows('project_second_images') ): the_row(); ?>
                                <?php $image = get_sub_field('r_image');?>
                                    <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                    <?php endwhile; endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "more-posts") : ?>
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
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="img">
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

<?php elseif(get_row_layout() == "more-media") : ?>
<!-- MORE MEDIA POSTS -->
    <section id="media" class="project-more">
        <div class="container">
        <div class="media-content">
                <div class="media-content__title">
                    <h2 class="main-title-block"><?php the_sub_field('more_title_media');?></h2>
                </div>
                <div class="media-content__blocks">
                    <div class="parent">
                    <?php 
                            $args = array(
                                'posts_per_page' => 6,
                                'order'    => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'post_format',
                                        'field' => 'slug',
                                        'terms' => array( 'post-format-image' )
                                    )
                                )
                            );
                            $the_query = new WP_Query( $args );
                            $i = 0;
                            if($the_query->have_posts() ) : 
                            while ( $the_query->have_posts() ) : 
                            $i ++;
                            $the_query->the_post();
                        ?>
                        <div class="div<?php echo $i;?> media-block-i"> 
                            <div class="media-content-item" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')">
                                    <div class="media-content-item__title flex-base">
                                        <div class="media-content-item__bg flex-base">
                                            <a href="<?php echo get_permalink();?>" class="blog-link"><?php the_title();?></a>
                                            <span class="date"><?php echo get_the_date();?></span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <?php endwhile; endif;  wp_reset_query(); ?>
                    </div>
                    <input type="submit" class="button-more" value="<?php the_sub_field('more_media_button');?>">
                </div>
            </div>
        </div>
    </section>

<?php endif;  endwhile;  endif; get_footer(); ?>
