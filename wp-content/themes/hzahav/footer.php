<!-- START FOOTER -->
<?php if( get_sub_field('color_change') ) { echo 'blue-section'; } ?>
<?php if( is_search() ){
	$search = 'footer-colored';
} ?>
<footer id="footer" class="<?php echo $search; ?><?php if( get_field('footer_color') ) { echo 'grey-section'; } ?>
 <?php if( is_archive() ){ echo 'test'; }?>">
  <div class="container">
    <div class="footer-content flex-direction">
      <div class="menu-left flex-direction">
          <div class="logo">
          <?php if(ICL_LANGUAGE_CODE=='en'): ?>
                <a href="<?php echo home_url();?>"><img src="<?php 
                    if(get_field('footer_color')){
                      echo get_theme_mod('logo');
                    }
                    elseif(is_search()){
                      echo get_theme_mod('logo');
                    }
                    else echo get_theme_mod('logo-f');
                  ?>" alt="logo"></a>
                    <?php else: ?>
                      <a href="<?php echo home_url();?>"><img src="<?php 
                        if(get_field('footer_color')){
                          echo get_theme_mod('logo-il');
                        }
                        elseif(is_search()){
                          echo get_theme_mod('logo-il');
                        }
                        else echo get_theme_mod('logo-f-rtl');
                      ?>" alt="logo"></a>
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
                      'menu_class'      => 'menu flex-direction'
                      ] );
                  ?>
          </div>
      </div> 
      <div class="menu-right">
          <div class="social-links flex-direction">
                <a href="<?php echo get_theme_mod('google-link');?>"><img src="<?php echo get_theme_mod('f-img-1');?>" alt="instagram"></a>
                <a href="<?php echo get_theme_mod('facebook-link');?>"><img src="<?php echo get_theme_mod('f-img-3');?>" alt="facebook"></a>
          </div>                
      </div>
    </div>
  </div>
</footer>
<!-- END FOOTER -->
<!-- SCRIPTS -->
  <?php wp_footer(); ?>
</body>
</html>