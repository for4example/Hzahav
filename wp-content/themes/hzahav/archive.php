
<?php /* Template Post Type: Post */ 
get_header(); ?>
<!-- TOP -->

<section id="without" class="without-news <?php if( is_archive() ) { echo 'with'; }?>">
    <?php 
        global $post;
        $cat = get_the_category();
        $term = get_queried_object();
        $cat_name = $cat[0]->name;

        $cat_desc = $cat[0]->description;
        $image_left = get_field('category_image', 'category_'. $term->term_id);
        $image_right = get_field('category_image_right', 'category_'. $term->term_id);
        if( get_field('change_direction_category', 'category_'. $term->term_id)){
            $changed = 'row-reverse';
        }
        // var_dump($term);
    ?>
        <div class="container">
        <div class="search-block-without">
                <div class="search-content flex-direction <?php echo $changed; ?>">
                    <div class="search-content__item-left">
                        <div class="search__title">
                            <h1 class="main-title"><?php echo $cat_name; ?></h1>
                            <p class="main-text"><?php echo $cat_desc;?></p>
                        </div>
                    </div>
                    <div class="search-content__item-right">
                        <div class="search-content__slider flex-direction">
                            <img class="border" src="<?php echo $image_left['url'];?>" alt="<?php echo $image_left['alt'];?>">
                            <img class="border" src="<?php echo $image_right['url'];?>" alt="<?php echo $image_right['alt'];?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- SEARCH CONTENT BLOCK  -->
<!-- CONTACT GREY BLOCK -->
<?php if( get_field('on_off_news_contact', 'category_'. $term->term_id)) {?>
    <section class="contact-block <?php if( get_sub_field('color_change') ) { echo 'blue-section'; }?>">
        <div class="container">
            <div class="content-grey">
                <div class="content-grey__title">
                    <h2 class="main-title-block"><?php the_field('category_contact_title', 'category_'. $term->term_id);?></h2>
                    <hr class="main-line">
                    <p class="main-text-block <?php if( get_sub_field('color_change') ) { echo 'text-colored'; }?>"><?php the_field('category_text', 'category_'. $term->term_id);?></p>
                    <input type="submit" class="button-more" value="<?php the_field('category_button', 'category_'. $term->term_id);?>">
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- CONTACT GREY BLOCK -->
<!-- BLOGS -->
    <section id="main-news">
        <div class="container">
            <div class="news-blogs">
                <div class="news-blogs__items">
                    <div class="parent">
                    <?php query_posts('posts_per_page=6'); ?>
                    <?php 
                        $args = array(
                        'post_type'=> 'post',
                        'posts_per_page' => 6,
                        'cat'    => '9',
                        'order'    => 'DESC'
                        );             
                        $i=0; 
                        $the_query = new WP_Query( $args );
                        if($the_query->have_posts() ) : 
                        while ( $the_query->have_posts() ) : 
                            
                        $the_query->the_post();
                        $i++;

                    ?>
                        <div class="div<?php echo $i?> news-flex">
                            <div class="news-content-block flex-direction">
                                <div class="news-content-block__content">
                                    <div class="news-content-block__title">
                                        <a class="main-title-blog" href="<?php echo get_permalink();?>"><?php the_title()?></a> 
                                        <p class="main-text-blog"><?php the_excerpt();?></p>
                                    </div>
                                    <div class="news-content-block__links flex-direction">
                                        <a class="colored-link" href="<?php echo get_permalink();?>">Read More</a> 
                                        <span class="date"><?php echo get_the_date();?></span>
                                    </div>
                                </div>
                                <div class="news-content-block__image">
                                <a href="<?php echo get_permalink();?>">
                                    <img class="fit" src="<?php echo get_the_post_thumbnail_url();?>" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; else : ?>
                        <p>Записей нет.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <input type="submit" class="button-load-more misha_loadmore" value="Load more">
            </div>
        </div>
    </section>
<!-- BLOGS -->
<!-- CONTACT GREY BLOCK -->
<?php if( get_field('on_off_news_contact_blue', 'category_'. $term->term_id)) {?>
    <section class="contact-block blue-section">
        <div class="container">
            <div class="content-grey">
                <div class="content-grey__title">
                    <h2 class="main-title-block text-colored"><?php the_field('category_title_blue', 'category_'. $term->term_id);?></h2>
                    <hr class="main-line">
                    <p class="main-text-block text-colored"><?php the_field('category_text_blue', 'category_'. $term->term_id);?></p>
                    <input type="submit" class="button-more" value="<?php the_field('category_blue_button', 'category_'. $term->term_id);?>">
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- CONTACT GREY BLOCK -->


<?php get_footer(); ?>