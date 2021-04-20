<?php get_header();?>
<section id="the-content">
    <div class="container">
        <div class="the-content-text">
            <h2 class="main-title"><?php the_title();?></h2>
            <?php the_content();?>
        </div>
    </div>
</section>
<?php get_footer();?>