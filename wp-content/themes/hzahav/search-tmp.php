<?php /* Template Name: Search */
get_header();?>
<?php 

    $area = str_replace("_", " ", htmlspecialchars($_GET["area"]));
    $religious = str_replace("_", " ", htmlspecialchars($_GET["religious"]));
    $house = str_replace("_", " ", htmlspecialchars($_GET["house"]));
?>
    <section id="search-project-single">
        <div class="container">
            <div class="search-single">
                <div class="search-single__title">
                <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                    <h2 class="main-title"><?php echo get_theme_mod('search-text');?></h2>
                    <p class="main-text"><?php echo get_theme_mod('search-text-s');?></p>
                <?php else: ?>
                    <h2 class="main-title"><?php echo get_theme_mod('search-text-il');?></h2>
                    <p class="main-text"><?php echo get_theme_mod('search-text-s-il');?></p>
                <?php endif ;?>
                </div>
                <div class="search-single__box">
                <div class="search-box">
                    <form method="post">
                        <?php $front_page_id = get_option( 'page_on_front' );?>
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
                                        <?php $select_en = get_field_object('block_area_select', $front_page_id);
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
                                    <?php $select_en = get_field_object('block_religious_select', $front_page_id);
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
                                    <?php $select_en = get_field_object('block_house_select', $front_page_id);
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
            </div>
        </div>
    </section>

<!-- PROJECT BLOCK -->
<section id="project" class="<?php if(  is_page_template('search-tmp.php') ){ echo 'single-search';};?>">
        <div class="container">
            <div class="project-content">
                    <div class="project-content__blocks flex-direction wrap">
                    <?php 
                        if(ICL_LANGUAGE_CODE=='en'):
                            $areaf = 'block_area_select';
                            $relf = 'block_religious_select';
                            $housef = 'block_house_select';
                            else : 
                            $areaf = 'block_area_select_il';
                            $relf = 'block_religious_select_il';
                            $housef = 'block_house_select_il';
                            endif;
                                if ($area !== ' ' && $area) :               
                                $meta_query[] = array(
                                    'key'	 	=> $areaf,
                                    'value'	  	=> $area,
                                    'compare' 	=> 'LIKE',
                                );
                                endif;
                                if ($religious !== ' ' && $religious) :               
                                    $meta_query[] = array(
                                        'key'	  	=> $relf,
                                        'value'	  	=> $religious,
                                        'compare' 	=> 'LIKE',
                                    );
                                endif;  
                                if ($house !== ' ' && $house) :            
                                    $meta_query[] = array(
                                        'key'	 	=> $housef,
                                        'value'	  	=> $house,
                                        'compare' 	=> 'LIKE',
                                    );
                                    endif;
                        $args = array(
                        'post_type'=> 'project',
                        'posts_per_page' => 9,
                        'order'    => 'ASC',
                        'meta_query' => $meta_query,
                        );     
                        // var_dump($args);         
                        $the_query = new WP_Query( $args );     
                        if($the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : 
                        $the_query->the_post();
                    ?>
                        <div class="project-content__block-item">
                            <div class="block-image">
                                <a href="<?php echo get_permalink();?>">
                                <?php $image = get_field('block_top_image');?>
                                <img class="sircle-img" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                <img class="pr-img" src="<?php echo get_the_post_thumbnail_url();?>" alt="img">
                                </a>
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
                                    <a class="content-block__link" href="<?php echo get_permalink();?>">Find out more</a>
                                </div>
                              
                            </div>
                        </div>
                        
                        <?php endwhile; else : ?>
                            <?php if (ICL_LANGUAGE_CODE=='en'): ?>
                                <h2 class="main-title <?php echo 'search-title';?>"><?php echo get_theme_mod('title-result');?></h2>
                                <a href="/en/projects/" class="button-more"><?php echo get_theme_mod('title-result-b');?></a>
                            <?php else : ?>
                                <h2 class="main-title <?php echo 'search-title';?>"><?php echo get_theme_mod('title-result-il');?></h2>
                                <a href="/projects/" class="button-more"><?php echo get_theme_mod('title-result-b-il');?></a>
                            <?php endif;?>
                      <?  endif; wp_reset_query(); ?>
                    </div>
                    <script>
  var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  var posts = '<?php echo serialize($the_query->query_vars); ?>';
  var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
  var max_page = '<?php echo $the_query->max_num_pages; ?>';
  </script>
                    <?php
// don't display the button if there are not enough posts
if (  $the_query->max_num_pages > 1 )
	echo '<input type="submit" class="button-load-more misha_loadmore" value="View more">'; // you can use <a> as well
?>     
            </div>
        </div>
    </section>

    <section class="contact-block blue-section">
        <div class="container">
            <div class="content-grey">
            <?php if (ICL_LANGUAGE_CODE=='en'): ?>
                <div class="content-grey__title">
                    <h2 class="main-title-block text-colored"><?php echo get_theme_mod('section-contact');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block text-colored"><?php echo get_theme_mod('section-contact-sub');?></p>
                    <a href="<?php echo get_theme_mod('section-contact-link');?>" class="button-color"><?php echo get_theme_mod('section-contact-button');?></a>
                </div>
            <?php else : ?>
                <div class="content-grey__title">
                    <h2 class="main-title-block text-colored"><?php echo get_theme_mod('section-contact-il');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block text-colored"><?php echo get_theme_mod('section-contact-sub-il');?></p>
                    <a href="<?php echo get_theme_mod('section-contact-link-il');?>" class="button-color"><?php echo get_theme_mod('section-contact-button-il');?></a>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer();?>