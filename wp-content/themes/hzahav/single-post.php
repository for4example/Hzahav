<?php get_header(); ?>
<section id="without" class="without-single <?php if( is_single() ){ echo 'single-post-type'; }?>">
        <div class="single-project-without">
                <div class="search-content flex-direction">
                    <div class="search-content__item-left">
                        <div class="search__title">
                            <h1 class="main-title"><?php the_title()?></h1>
                            <p class="main-text"><?php the_excerpt();?></p>
                        </div>
                    </div>
                    <div class="single-project-slider">
                        <div class="single-project-slider__content flex-direction">
                            <img class="border" src="<?php echo get_the_post_thumbnail_url();?>" alt="image">
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php if( get_field('contact_grey_on') )  { ?>
    <section class="contact-block <?php if( get_field('color_on_change') ) { echo 'blue-section'; }?>">
        <div class="container">
            <div class="content-grey">
                <div class="content-grey__title">
                    <h2 class="main-title-block <?php if( get_field('color_on_change') ) { echo 'text-colored'; }?>"><?php the_field('contact_on_title');?></h2>
                    <hr class="main-line">
                    <p class="main-text-block <?php if( get_field('color_on_change') ) { echo 'text-colored'; }?>"><?php the_field('contact_on_sub_title');?></p>
                    <a href="<?php the_field('contact_on_link');?>" class="button-color"><?php the_field('contact_button_on');?></a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php 
$format = get_post_format();
if($format == 'image'){ ?>
    <section id="main-content" class="main-content <?php if( is_single() ){ echo 'single-post-image'; }?>"">
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
                                    <?php if( have_rows('about_content_image') ):
                                        while( have_rows('about_content_image') ): the_row(); ?>
                                        <?php $image = get_sub_field('about_content_im');?>
                                        <img class="border" src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
                                    <?php endwhile; endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                            </div>
                        </div>
                    <?php endwhile;?>
            </div>
        </div>
    </div>
</section>
<?php } else { ?>

<!-- BLOG CONTENT -->
<section id="blog-content">
    <div class="container">
        <div class="blog-single-post">
            <?php the_content();?>
            <div class="blog-author">
                <div class="blog-author__content">
                    <!-- <div class="blog-author__img">
                        <?php
                            $get_author_id = get_the_author_meta('ID');
                            $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));
                        ?>
                        <img src="<?php echo $get_author_gravatar;?>" alt="">
                    </div> -->
                    <div class="blog-author__titles">
                        <div class="blog-author__dates flex-direction">
                        <!-- <?php $author_id=$post->post_author; ?>
                            <h2><?php the_author_meta( 'user_nicename' , $author_id );?></h2> -->
                            <span><?php echo get_the_date('F j Y');?></span>
                        </div>
                        <!-- <p><?php the_author_meta('user_description', $author_id);?></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php if( have_rows('content') ):
      while ( have_rows('content') ) : the_row(); 
      if(get_row_layout() == "contact-grey-block"): ?>
<!-- CONTACT GREY BLOCK -->
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

<!-- MORE POSTS -->
<?php elseif(get_row_layout() == "more-posts") : ?>
    <section id="project" class="project-more <?php if( is_single() ){ echo 'single-post-type'; }?>">
        <div class="container">
            <div class="project-content">
                <div class="project-content__titles">
                    <h2 class="main-title-block"><?php the_sub_field('more_title');?></h2>
                </div>
                    <div class="project-content__blocks flex wrap">
                    <?php 
                        $term = get_queried_object();
                        $term_type = $term->post_type;
                            $args = array(
                            'post_type'=> $term_type,
                            'order'    => 'DESC',
                            'posts_per_page' => 4
                            );              
                            $the_query = new WP_Query( $args );
                            if($the_query->have_posts() ) : 
                            while ( $the_query->have_posts() ) : 
                            $the_query->the_post();
                    ?>
                        <div class="project-content__block-item">
                            <div class="block-image">
                                <img class="border" src="<?php echo get_the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="block-content">
                                <div class="block-content-main">
                                    <div class="block-title">
                                        <a href="<?php echo get_permalink();?>"><?php the_title();?></a>
                                        <p><?php the_excerpt();?></p>
                                    </div>
                                    <a class="colored-link" href="<?php echo get_permalink();?>">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
            </div>
        </div>
    </section>

    
<!-- MORE MEDIA POSTS -->
<?php elseif(get_row_layout() == "more-media") : ?>
    <section id="project" class="project-more <?php if( is_single() ){ echo 'single-post-type'; }?>">
        <div class="container">
            <div class="project-content">
                <div class="project-content__titles">
                    <h2 class="main-title-block"><?php the_sub_field('more_title_media');?></h2>
                </div>
                    <div class="project-content__blocks flex wrap">
                    <?php 
                        $term = get_queried_object();
                        $term_type = $term->post_type;
                            $args = array(
                            'post_type'=> $term_type,
                            'order'    => 'DESC',
                            'posts_per_page' => 4,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'post_format',
                                    'field'    => 'slug',
                                    'terms'    => array( 'post-format-image' ),
                                ),
                            )
                            );              
                            $the_query = new WP_Query( $args );
                            if($the_query->have_posts() ) : 
                            while ( $the_query->have_posts() ) : 
                            $the_query->the_post();
                    ?>
                        <div class="project-content__block-item">
                            <div class="block-image">
                                <img class="border" src="<?php echo get_the_post_thumbnail_url();?>" alt="img">
                            </div>
                            <div class="block-content">
                                <div class="block-content-main">
                                    <div class="block-title">
                                        <a href="<?php echo get_permalink();?>"><?php the_title();?></a>
                                        <p><?php the_excerpt();?></p>
                                    </div>
                                    <a class="colored-link" href="<?php echo get_permalink();?>">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; endif; wp_reset_query(); ?>
                    </div>
            </div>
        </div>
    </section>
    
    

<?php endif; endwhile; endif; get_footer(); ?>