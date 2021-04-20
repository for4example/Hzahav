<?php 
/**
 * Template Name: Search Page
 */
get_header();?>


<?php if( have_rows('content') ):
      while ( have_rows('content') ) : the_row();
      if( get_row_layout() == 'contact-grey-block' ): 
?>
 <section class="contact-block <?php if( get_sub_field('color_change') ) { echo 'blue-section'; }?>">
        <div class="container">
            <div class="content-grey">
                <div class="content-grey__title">
                    <h2 class="main-title-block <?php if( get_sub_field('color_change') ) { echo 'text-colored'; }?>"><?php the_sub_field('contact_grey_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block <?php if( get_sub_field('color_change') ) { echo 'text-colored'; }?>"><?php the_sub_field('contact_grey_subtitle');?></p>
                    <a href="<?php the_sub_field('contact_grey_link');?>" class="button-color"><?php the_sub_field('contact_grey_button_text');?></a>
                </div>
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "project-block"): ?>
<!-- PROJECT BLOCK -->
    <section id="project" class="<?php if( is_page_template('tmp-search.php') ){ echo 'single-search';} ?>">
        <div class="container">
            <div class="project-content">
                <div class="project-content__titles">
                    <h2 class="main-title-block"><?php the_sub_field('project_title');?></h2>
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
                                    <a class="content-block__link" href="<?php echo get_permalink();?>">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
                    <input type="submit" class="button-more" value="View more">
            </div>
        </div>
    </section>

<?php elseif(get_row_layout() == "search-project-block"): ?>
    <section id="search-project-single">
        <div class="container">
            <div class="search-single">
                <div class="search-single__title">
                    <h2 class="main-title"><?php the_sub_field('search-single_title');?></h2>
                    <p class="main-text"><?php the_sub_field('search-single_text');?></p>
                </div>
                <div class="search-single__box">
                <div class="search-box">
                    <div class="search-box__content flex-direction">
                        <div class="search-box__item">
                            <h2>Area</h2>
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger">
                                        <span>Tesla</span>
                                    </div>
                                    <div class="custom-options">
                                        <span class="custom-option selected" data-value="tesla">Tesla</span>
                                        <span class="custom-option" data-value="volvo">Volvo</span>
                                        <span class="custom-option" data-value="mercedes">Mercedes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-box__item">
                            <h2>Religious Character</h2>
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger">
                                        <span>Tesla</span>
                                    </div>
                                    <div class="custom-options">
                                        <span class="custom-option selected" data-value="tesla">Tesla</span>
                                        <span class="custom-option" data-value="volvo">Volvo</span>
                                        <span class="custom-option" data-value="mercedes">Mercedes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-box__item">
                            <h2>House size</h2>
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger">
                                        <span>Tesla</span>
                                    </div>
                                    <div class="custom-options">
                                        <span class="custom-option selected" data-value="tesla">Tesla</span>
                                        <span class="custom-option" data-value="volvo">Volvo</span>
                                        <span class="custom-option" data-value="mercedes">Mercedes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search-box__item">
                            <h2>Price starting</h2>
                            <div class="custom-select-wrapper">
                                <div class="custom-select">
                                    <div class="custom-select__trigger">
                                        <span>Tesla</span>
                                    </div>
                                    <div class="custom-options">
                                        <span class="custom-option selected" data-value="tesla">Tesla</span>
                                        <span class="custom-option" data-value="volvo">Volvo</span>
                                        <span class="custom-option" data-value="mercedes">Mercedes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search__input">
                            <input type="submit" value="Search">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; endwhile; endif; get_footer();?>