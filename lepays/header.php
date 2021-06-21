<!--PAGE AFFICHAGE DU HAUT DE LA PAGE-->

<!DOCTYPE html>
  <html <?php language_attributes();?>>
    <head id="tete">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" /><?php wp_head();?>
      
    </head>
    <body <?php body_class();?>>
      <header class="header" style="background-color: red;">
       
          <nav class="navbar navbar-primary">
            <div class=" col-12">
                  <a href="<?php echo home_url( '/' ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>./images/logo1.jpg" width="75" height="75" alt="Accueil" >
                  </a>
            </div>
              <div class="col-12  d-flex">
              <div class="col-3">
              </div>
              <div class="col-6 ">
                <div class="row">
                  <div class="col-6">
                    <?php wp_nav_menu();?>
                  </div>
                  <div class="col-12">
                  </div>
                </div>
              </div>
              <div class="col-3">
              </div>
            </div> 
            <form class="col-12 d-block d-md-flex">
              <div class="col-md-4 col-12"></div>
              <div class="cher">
                <?php get_search_form();?>
              </div>
            </form>
          </nav>
          
      </header><?php wp_body_open();?>