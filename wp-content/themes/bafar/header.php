<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bafar Real Estate is a leading provider of Industrial Real Estate in Mexico, with over 400,00 sqm of leased space and land for development in the main Industrial cities in Mexico">
        <meta name="keywords" content="Bafar,Bafar Real Estate,Leased Space,Land,Industrial Cities,Industry,Facilities,Manufacturing,Logistics,Office Space,Stock Exchange,BTS,Warehousing">
        <meta name="author" content="Mixen">
        <title>Bafar Real Estate</title>
        <link rel="icon" href="<?php echo bloginfo('template_url'); ?>/img/icon.ico">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/scrolling-nav.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/fotorama.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/grid-gallery/component.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css">
        <script src="<?php echo bloginfo('template_url'); ?>/js/grid-gallery/modernizr.custom.js"></script>
        <script type="text/javascript">
            setTimeout(function(){
                var a=document.createElement("script");
                var b=document.getElementsByTagName("script")[0];
                a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0020/7404.js?"+Math.floor(new Date().getTime()/3600000);
                a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
        </script>
    </head>
    <body>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-81850810-1', 'auto');
            ga('send', 'pageview');

        </script>
        <nav class="navbar navbar-default navbar-fixed-top <?php if(is_front_page()) { echo 'index'; } ?>">
            <div class="container-fluid container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php if(!is_front_page()) { echo 'index'; } else { echo '#inicio'; } ?>"></a>
                </div>

                <div class="collapse navbar-collapse pull-right" id="bs-collapse">
                    <?php global $post; ?>
                    <?php 
                    if(is_front_page()) {
                        wp_nav_menu( array(
                            'theme_location'    => 'menu_index',
                            'container'     => false,
                            'menu_class'        => 'nav navbar-nav',
                            'echo'          => true,
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                            'depth'         => 10,
                            'container_class'   => 'vertical-align',
                            'walker'        => new themeslug_walker_nav_menu
                        ) );
                    } else if($post->ID == 8) {
                        wp_nav_menu( array(
                            'theme_location'    => 'menu_buildings',
                            'container'     => false,
                            'menu_class'        => 'nav navbar-nav',
                            'echo'          => true,
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                            'depth'         => 10,
                            'container_class'   => 'vertical-align',
                            'walker'        => new themeslug_walker_nav_menu
                        ) );
                    } else {
                        wp_nav_menu( array(
                            'theme_location'    => 'menu',
                            'container'     => false,
                            'menu_class'        => 'nav navbar-nav',
                            'echo'          => true,
                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                            'depth'         => 10,
                            'container_class'   => 'vertical-align',
                            'walker'        => new themeslug_walker_nav_menu
                        ) );
                    }

                    echo '<div class="hidden">'.$post->ID.'</div>';

                    ?>  
                </div>
            </div>
        </nav>