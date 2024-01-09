<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>



  <header>
    <div class="top pb-2 pt-2">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <?php 
                    if(has_custom_logo()){
                        the_custom_logo() ;
                    }else { ?>
                    <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><span> <?php bloginfo('name'); ?> </span></a>
                    <?php } ?>
                </div>
                <div class="col-6">
                    
                </div>
                <div class="col-3">

                        <?php get_search_form(); ?>

                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary pt-3 pb-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <?php 
                        wp_nav_menu(array('theme_location'  =>  'ablog_main_menu' ));
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
