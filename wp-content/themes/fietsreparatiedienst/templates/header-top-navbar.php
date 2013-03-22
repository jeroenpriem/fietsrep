<div class="navbar navbar-fixed-top">  
  <div class="container">
    <button data-target=".nav-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="<?php echo home_url(); ?>/" class="navbar-brand"> <img src="http://www.gouwestad.com/fietsreparatiedienst/assets/img/logo.png" alt="logo"/></a>
    <div class="nav-collapse collapse">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav center'));
      endif;
      ?>
    </div>
  </div>
</div>
     

