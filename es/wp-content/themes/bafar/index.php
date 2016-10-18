<?php get_header(); ?>

<div class="wrapper">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner text-center" id="index">
        <div class="vertical-align">
            <h1 class="white"><span class="bold">Bafar</span> Real Estate</h1>
            <div id="text-carousel" class="carousel slide container" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#text-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#text-carousel" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h2 class="white vertical-align">
                            Bafar Real Estate es un desarrollador líder de bienes raíces industriales en México con más de 400,000 metros cuadrados arrendados y reservas de terreno en las principales ciudades industriales.
                        </h2>
                    </div>
                    <div class="item">
                        <h2 class="white vertical-align">
                            Somos parte de Grupo Bafar – una de las compañías Mexicanas líderes – con más de 30 años de experiencia y ventas anuales por $825 millones de dólares en 2015.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* ABOUT US  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="about-us spacing" id="about-us">
        <img src="<?php echo bloginfo('template_url'); ?>/img/forms/diagonal-left.png" class="diagonal">
        <div class="container text-center">
            <div class="col-lg-8 col-md-10 col-sm-10">
                <h1 class="gray header"><?php echo CFS() -> get('about_title'); ?></h1>
                <p class="text text-center text-justify">
                    <?php echo CFS() -> get('about_text'); ?>
                </p>
                <div class="modal fade" id="net-sales" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <img class="img-responsive" src="<?php echo bloginfo('template_url'); ?>/img/index/graphs/netsales.jpg" alt="Net Sales Graph">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="ebitda" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <img class="img-responsive" src="<?php echo bloginfo('template_url'); ?>/img/index/graphs/ebitda.jpg" alt="Net Sales Graph">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="hidden-xs bg" src="<?php echo bloginfo('template_url'); ?>/img/index/about-us.png">
        </div>
        <img src="<?php echo bloginfo('template_url'); ?>/img/forms/diagonal-right.png" class="diagonal">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* AVAILABLE BUILDINGS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="available spacing" id="available">
        <img src="<?php echo bloginfo('template_url'); ?>/img/index/available.png" alt="" class="background vertical-align">
        <div class="container text-center">
            <h1 class="white header no-margin"><?php echo CFS() -> get('available_title'); ?></h1>
            <!--
<p class="white text text-justify-center light-spacing-bottom">
<?php echo CFS() -> get('available_text'); ?>
</p>-->
            <div class="row no-margin">
                <!--
<div class="col-sm-3 col-xs-6 light-spacing-bottom">
<img src="<?php echo bloginfo('template_url'); ?>/img/index/chihuahua.png" alt="Chihuahua" class="img-responsive center-block">
<h4 class="white">Chihuahua</h4>
<a href="buildings#0" class="center-block white-btn btn">More info</a>
</div>
<div class="col-sm-3 col-xs-6 light-spacing-bottom">
<img src="<?php echo bloginfo('template_url'); ?>/img/index/juarez.png" alt="Juárez City" class="img-responsive center-block">
<h4 class="white">Juárez City</h4>
<a href="buildings#1" class="center-block white-btn btn">More info</a>
</div>
<div class="col-sm-3 col-xs-6 light-spacing-bottom">
<img src="<?php echo bloginfo('template_url'); ?>/img/index/monterrey.png" alt="Monterrey" class="img-responsive center-block">
<h4 class="white">Monterrey</h4>
<a href="buildings#2" class="center-block white-btn btn">More info</a>
</div>
<div class="col-sm-3 col-xs-6 light-spacing-bottom">
<img src="<?php echo bloginfo('template_url'); ?>/img/index/guadalajara.png" alt="Guadalajara" class="img-responsive center-block">
<h4 class="white">Guadalajara</h4>
<a href="buildings#3" class="center-block white-btn btn">More info</a>
</div>
-->
                <div class="row no-margin">
                    <div class="col-md-9 col-sm-8">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/index/map.png" alt="Mapa" class="img-responsive center-block">
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <ul class="cities">
                            <li class="title">Ciudades</li>
                            <li>Chihuahua</li>
                            <li>Juárez</li>
                            <li>Monterrey</li>
                            <li>Guadalajara</li>
                            <li>Querétaro</li>
                            <li>Guanajuato</li>
                            <li>Durango</li>
                            <li>Reynosa</li>
                            <li>Mexicali</li>
                            <li>Tijuana</li>
                            <li>Michoacán</li>
                            <li>Entre Otras</li>
                        </ul>
                    </div>
                </div>
                <a href="buildings#property" class="center-block white-btn btn">Ver Proyectos</a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NEWS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="news spacing" id="news">
        <div class="container text-center">
            <h1 class="gray header"><?php echo CFS() -> get('news_title'); ?></h1>
            <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    if ( have_posts() ) {
                        the_post();
                    }
                    ?>									  
                    <?php
                    query_posts( 'showposts=10' );
                    if ( have_posts() ) {
                        while ( have_posts() ) { 
                            the_post();
                            if($counter == 0) {
                                echo '<div class="item active">';
                            } else {
                                echo '<div class="item">';
                            }
                    ?>
                    <div class="carousel-caption">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="row no-padding no-margin">
                                <div class="img-container">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php echo get_the_title(); ?>" >
                                </div>
                                <div class="col-sm-8 no-padding">
                                    <div class="news-container">
                                        <h1 class="white header">
                                            <?php 
                            if ( strlen($post->post_title) > 50) { 
                                echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . ' [...]'; 
                            } else {
                                the_title();
                            } 
                                            ?>
                                        </h1>
                                        <p class="text white">
                                            <?php echo get_the_excerpt(); ?>
                                        </p>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/index/news/arrow.png" class="arrow hidden-xs">
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                            echo '</div>';
                            $counter++;
                        }
                    }
                    wp_reset_query();
                    ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACT US  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contact" id="contact">
        <div class="contact-form">
            <div class="container text-center">
                <h1 class="white header"><?php echo CFS() -> get('contact_title'); ?></h1>
                <p class="text white">
                    Guillermo Medrano<br>
                    Teléfono: (614)511.5093<br>
                    Email: <a href="mailto:gmedrano@bafar.com.mx">gmedrano@bafar.com.mx</a>
                </p>
                <div class="row no-margin">
                    <?php echo do_shortcode('[contact-form-7 id="88" title="Contact form"]'); ?>
                </div>
            </div>
        </div>
        <div class="googleMap" id="googleMap" position="real-estate"></div>
    </div>
</div>

<?php get_footer(); ?>