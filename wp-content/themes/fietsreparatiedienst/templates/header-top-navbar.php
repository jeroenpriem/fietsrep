<header>
    <div class="header">
    </div>
    <div class="container">
      <div class="row-fluid clearfix">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <a class="brand" href="<?php echo home_url(); ?>/">
            <img src="http://www.gouwestad.com/fietsreparatiedienst/assets/img/logo.png" alt="logo"/>
            </a>
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <nav class="nav-collapse" role="navigation">
                <?php
                  if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav center'));
                  endif;
                ?>
              </nav>
            </div>
          </div>
      </div>       
    
    </div>         
        <div class="row-fluid clearfix">
          <div class="span3">
          </div>
          <div class="span6">
            <h1>Fiets kapot?</h1>
              <p>Zoek hier de dichtstbijzijnde fietsenmaker</p>
              <a href="#" class="btn btn-large btn-primary btn-block" id="zoekform-link"> Zoeken</a>
          <div class="span3">
          </div>
          </div>
        </div>
    </div>
  </header>
