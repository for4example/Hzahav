<?php get_header();?>
<section id="error">
    <div class="container">
        <div class="error-page">
            <h2 class="main-title"><?php echo get_theme_mod('error-text');?></h2>
            <p class="main-text"><?php echo get_theme_mod('error-text-f');?></p>
            <a href="<?php echo home_url();?>" class="button-more">Back to Home</a>
        </div>
    </div>
</section>
<?php get_footer();?>