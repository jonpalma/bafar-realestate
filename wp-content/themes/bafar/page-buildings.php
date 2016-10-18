<?php get_header(); ?>

<div class="wrapper real-estate">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner text-center">
        <div class="vertical-align">
            <h1 class="white"><span class="bold">Buildings</span></h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROPERTY SPECIFICATIONS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="property spacing" id="property">
        <div class="container">
            <div class="text-center">
                <h1 class="gray header margin-bottom"><?php echo CFS() -> get('property_title'); ?></h1>
            </div>
            <div class="row no-margin">
                <div class="col-sm-12 city-nav">
                    <ul class="nav tabs">
                        <li class="title">Cities</li>
                        <li class="active"><a href="#0" data-toggle="tab">All Projects</a></li>
                        <li><a href="#1" data-toggle="tab">Chihuahua</a></li>
                        <li><a href="#2" data-toggle="tab">Juárez</a></li>
                        <li><a href="#3" data-toggle="tab">Monterrey</a></li>
                        <li><a href="#4" data-toggle="tab">Guadalajara</a></li>
                        <li><a href="#5" data-toggle="tab">Querétaro</a></li>
                    </ul>
                </div>
                <div class="row no-margin">
                    <div id="my-tab-content" class="tab-content">
                        <?php
                        $cities_array = CFS() -> get('cities_array');
                        $city_counter = 0;
                        $grid_counter = 0;
                        $arrayEnd = count($cities_array);
                        ?>

                        <div class="tab-pane active" id="<?php echo $city_counter; ?>">
                            <?php 
                            foreach( $cities_array as $city ) {
                                foreach( $city['properties_array'] as $property ) {
                                    if($grid_counter == 0 || $grid_counter%3 == 0) {
                                        echo '<div class="row no-margin">';
                                    }
                            ?>
                            <div id="grid-gallery<?php echo $grid_counter; ?>" class="grid-gallery col-sm-4">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="job">
                                            <?php 
                                    $gallery_counter = 0;
                                    foreach( $property['gallery_array'] as $gallery ) {
                                        if( $gallery_counter == 0 ) {
                                            ?>
                                            <li>
                                                <figure>
                                                    <img src="<?php echo $property['thumb_img']; ?>" alt="Photo" class="center-block">
                                                </figure>
                                            </li>
                                            <?php
                                        } else {
                                            ?>
                                            <li></li>
                                            <?php
                                        }
                                        $gallery_counter++;
                                    }
                                            ?>
                                            <h3 class="text-center title"><?php echo $property['property_title']; ?></h3>
                                            <div class="job-info">
                                                <?php echo $property['property_text']; ?>
                                                <!--<a class="center-block text-center pdf-btn" href="<?php echo $property['pdf']; ?>" target="_blank">PDF</a>-->
                                            </div>
                                        </div>
                                    </ul>
                                </section>
                                <section class="slideshow">
                                    <ul>
                                        <?php 
                                    foreach( $property['gallery_array'] as $gallery ) {
                                        ?>
                                        <li><figure><img src="<?php echo $gallery['property_img']; ?>" class="vertical-align"></figure></li>
                                        <?php
                                    }
                                        ?>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">Navega con el teclado</div>
                                </section>
                            </div>
                            <?php
                                    $grid_counter++;
                                    if( $grid_counter%3 == 0 || ( $property == end($city['properties_array']) && ($city_counter+1) == $arrayEnd ) ) {
                                        echo '</div>';
                                    }
                                }
                                $city_counter++;
                            }
                            ?>
                        </div>


                        <?php
                        $city_counter = 1;
                        foreach( $cities_array as $city ) {
                            $counter = 0;
                        ?>
                        <div class="tab-pane <?php if( $city_counter == 0 ) echo 'active'; ?>" id="<?php echo $city_counter; ?>">
                            <?php
                            foreach( $city['properties_array'] as $property ) {
                                if($counter == 0 || $counter%3 == 0) {
                                    echo '<div class="row no-margin">';
                                }
                            ?>
                            <div id="grid-gallery<?php echo $grid_counter; ?>" class="grid-gallery col-sm-4">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="job">
                                            <?php 
                                $gallery_counter = 0;
                                foreach( $property['gallery_array'] as $gallery ) {
                                    if( $gallery_counter == 0 ) {
                                            ?>
                                            <li>
                                                <figure>
                                                    <img src="<?php echo $property['thumb_img']; ?>" alt="Photo" class="center-block">
                                                </figure>
                                            </li>
                                            <?php
                                    } else {
                                            ?>
                                            <li></li>
                                            <?php
                                    }
                                    $gallery_counter++;
                                }
                                            ?>
                                            <h3 class="text-center title"><?php echo $property['property_title']; ?></h3>
                                            <div class="job-info">
                                                <?php echo $property['property_text']; ?>
                                                <!--<a class="center-block text-center pdf-btn" href="<?php echo $property['pdf']; ?>" target="_blank">PDF</a>-->
                                            </div>
                                        </div>
                                    </ul>
                                </section>
                                <section class="slideshow">
                                    <ul>
                                        <?php 
                                foreach( $property['gallery_array'] as $gallery ) {
                                        ?>
                                        <li><figure><img src="<?php echo $gallery['property_img']; ?>" class="vertical-align"></figure></li>
                                        <?php
                                }
                                        ?>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">Navega con el teclado</div>
                                </section>
                            </div>
                            <?php
                                $grid_counter++;
                                $counter++;
                                if( $counter%3 == 0 || $property == end($city['properties_array']) ) {
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                        <?php 
                            $city_counter++;
                        }
                        echo '<div id="grid_number" class="hidden">'.$grid_counter.'</div>';
                        $GLOBALS[ 'grid_number' ] = $grid_counter;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LOCATIONS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--<div class="locations light-spacing" id="locations">-->
    <div class="parallax-container suit" id="locations">
        <div class="parallax"><img src="<?php echo bloginfo('template_url'); ?>/img/parallax/real-estate.jpg" alt=""></div>
        <div class="container light-spacing text-center">
            <h1 class="white header"><?php echo CFS() -> get('locations_title'); ?></h1>
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/map.png" alt="Mapa" class="img-responsive center-block">
                </div>
                <div class="col-sm-3 col-sm-4">
                    <ul class="cities">
                        <li class="title">Cities</li>
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
                        <li>Among Others</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BUILD TO SUIT  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="suit" id="suit">
        <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/left-line.png" class="diagonal">
        <div class="container spacing">
            <div class="text-center">
                <h1 class="blue header text-center">Build to suit</h1>
            </div>
            <p class="text blue text-justify-center">
                <?php echo CFS() -> get('build_text'); ?>
            </p>
            <!--
<p class="blue"><span class="left-text">Lease agreement execution</span> <span class="responsive-line"></span><span class="bar"></span> Month 0</p>
<p class="blue"><span class="left-text">Desing Phase</span> <span class="responsive-line"></span><span class="bar"></span> Month 1</p>
<p class="blue"><span class="left-text">Construction</span> <span class="responsive-line"></span><span class="bar"></span> Month 5</p>
<p class="blue"><span class="left-text">Beneficial Occupancy</span> <span class="responsive-line"></span><span class="bar"></span> Month 5</p>
<p class="blue"><span class="left-text">Substantial Completion</span> <span class="responsive-line"></span><span class="bar"></span> Month 6</p>
-->
            <img class="big img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/real-estate/timeline-big.jpg" alt="Timeline">
            <img class="small img-responsive center-block" src="<?php echo bloginfo('template_url'); ?>/img/real-estate/timeline-small.jpg" alt="Timeline">
        </div>
        <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/right-line.png" class="diagonal">
    </div>
</div>

<?php get_footer(); ?>