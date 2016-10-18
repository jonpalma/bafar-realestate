<?php get_header(); ?>

<div class="wrapper real-estate">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner text-center">
        <div class="vertical-align">
            <h1 class="white"><span class="bold">Real</span> Estate</h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PROPERTY SPECIFICATIONS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="property spacing" id="property">
        <div class="container">
            <div class="text-center">
                <h1 class="gray header margin-bottom"><?php echo CFS() -> get('property_title'); ?></h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <ul class="nav tabs">
                        <li class="title">Cities</li>
                        <li class="active"><a href="#0" data-toggle="tab">Chihuahua</a><img class="icon" src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua-icon.png"></li>
                        <li><a href="#1" data-toggle="tab">Juarez City</a><img class="icon" src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez-icon.png"></li>
                        <li><a href="#2" data-toggle="tab">Monterrey</a><img class="icon" src="<?php echo bloginfo('template_url'); ?>/img/real-estate/monterrey-icon.png"></li>
                        <li><a href="#3" data-toggle="tab">Guadalajara</a><img class="icon" src="<?php echo bloginfo('template_url'); ?>/img/real-estate/guadalajara-icon.png"></li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <div id="my-tab-content" class="tab-content">

                        <?php
                        $cities_array = CFS() -> get('cities_array');
                        $city_counter = 0;
                        $grid_counter = 0;
                        foreach( $cities_array as $city ) {
                        ?>
                        <div class="tab-pane <?php if( $city_counter == 0 ) echo 'active'; ?>" id="<?php echo $city_counter; ?>">
                            <?php
                            foreach( $city['properties_array'] as $property ) {
                            ?>
                            <div id="grid-gallery<?php echo $grid_counter; ?>" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="col-sm-6 job">
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
                                                <a class="center-block text-center pdf-btn" href="<?php echo $property['pdf']; ?>" target="_blank">PDF</a>
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
                            }
                            ?>
                        </div>
                        <?php 
                            $city_counter++;
                        }
                        echo '<div id="grid_number" class="hidden">'.$grid_counter.'</div>';
                        $GLOBALS[ 'grid_number' ] = $grid_counter;
                        ?>
                        <!--
                        <div class="tab-pane active" id="0">
                            <div id="grid-gallery" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="col-sm-6 job">
                                            <li>
                                                <figure>
                                                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua/1.jpg" alt="Photo" class="center-block img-responsive">
                                                </figure>
                                            </li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <h3 class="text-center title">Chihuahua City</h3>
                                            <div class="job-info">
                                                <p><span class="blue">Customer:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Building Type:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Size:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Beneficial Occupancy:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Substantial Completion:</span>Fusce condimentum.</p>
                                                <p><span class="blue">General Contractor:</span>Fusce condimentum.</p>
                                                <a class="center-block text-center pdf-btn" href="pdf/dummy.pdf" target="_blank">PDF</a>
                                            </div>
                                        </div>
                                    </ul>
                                </section>
                                <section class="slideshow">
                                    <ul>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua/full/1.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua/full/2.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua/full/3.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua/full/4.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua/full/5.jpg" class="vertical-align"></figure></li>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">Navega con el teclado</div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-pane" id="1">
                            <div id="grid-gallery4" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="col-sm-6 job">
                                            <li>
                                                <figure>
                                                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez/1.jpg" alt="Photo" class="center-block img-responsive">
                                                </figure>
                                            </li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <h3 class="text-center title">Juarez City</h3>
                                            <div class="job-info">
                                                <p><span class="blue">Customer:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Building Type:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Size:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Beneficial Occupancy:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Substantial Completion:</span>Fusce condimentum.</p>
                                                <p><span class="blue">General Contractor:</span>Fusce condimentum.</p>
                                                <a class="center-block text-center pdf-btn" href="pdf/dummy.pdf" target="_blank">PDF</a>
                                            </div>
                                        </div>
                                    </ul>
                                </section>
                                <section class="slideshow">
                                    <ul>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez/full/1.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez/full/2.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez/full/3.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez/full/4.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez/full/5.jpg" class="vertical-align"></figure></li>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">Navega con el teclado</div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-pane" id="2">
                            <div id="grid-gallery5" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="col-sm-6 job">
                                            <li>
                                                <figure>
                                                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/1.jpg" alt="Photo" class="center-block img-responsive">
                                                </figure>
                                            </li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <h3 class="text-center title">Monterrey</h3>
                                            <div class="job-info">
                                                <p><span class="blue">Customer:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Building Type:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Size:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Beneficial Occupancy:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Substantial Completion:</span>Fusce condimentum.</p>
                                                <p><span class="blue">General Contractor:</span>Fusce condimentum.</p>
                                                <a class="center-block text-center pdf-btn" href="pdf/dummy.pdf" target="_blank">PDF</a>
                                            </div>
                                        </div>
                                    </ul>
                                </section>
                                <section class="slideshow">
                                    <ul>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/1.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/2.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/3.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/4.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/5.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/6.jpg" class="vertical-align"></figure></li>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">Navega con el teclado</div>
                                </section>
                            </div>
                            <div id="grid-gallery6" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="col-sm-6 job">
                                            <li>
                                                <figure>
                                                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/2.jpg" alt="Photo" class="center-block img-responsive">
                                                </figure>
                                            </li>
                                            <li></li>
                                            <h3 class="text-center title">Monterrey</h3>
                                            <div class="job-info">
                                                <p><span class="blue">Customer:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Building Type:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Size:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Beneficial Occupancy:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Substantial Completion:</span>Fusce condimentum.</p>
                                                <p><span class="blue">General Contractor:</span>Fusce condimentum.</p>
                                                <a class="center-block text-center pdf-btn" href="pdf/dummy.pdf" target="_blank">PDF</a>
                                            </div>
                                        </div>
                                    </ul>
                                </section>
                                <section class="slideshow">
                                    <ul>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/7.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/mty/full/8.jpg" class="vertical-align"></figure></li>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">Navega con el teclado</div>
                                </section>
                            </div>
                        </div>
                        <div class="tab-pane" id="3">
                            <div id="grid-gallery7" class="grid-gallery">
                                <section class="grid-wrap">
                                    <ul class="grid">
                                        <div class="col-sm-6 job">
                                            <li>
                                                <figure>
                                                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/gdl/1.jpg" alt="Photo" class="center-block img-responsive">
                                                </figure>
                                            </li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <h3 class="text-center title">Guadalajara</h3>
                                            <div class="job-info">
                                                <p><span class="blue">Customer:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Building Type:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Size:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Beneficial Occupancy:</span>Fusce condimentum.</p>
                                                <p><span class="blue">Substantial Completion:</span>Fusce condimentum.</p>
                                                <p><span class="blue">General Contractor:</span>Fusce condimentum.</p>
                                                <a class="center-block text-center pdf-btn" href="pdf/dummy.pdf" target="_blank">PDF</a>
                                            </div>
                                        </div>
                                    </ul>
                                </section>
                                <section class="slideshow">
                                    <ul>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/gdl/full/1.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/gdl/full/2.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/gdl/full/3.jpg" class="vertical-align"></figure></li>
                                        <li><figure><img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/gdl/full/4.jpg" class="vertical-align"></figure></li>
                                    </ul>
                                    <nav>
                                        <span class="icon nav-prev"></span>
                                        <span class="icon nav-next"></span>
                                        <span class="icon nav-close"></span>
                                    </nav>
                                    <div class="info-keys icon">Navega con el teclado</div>
                                </section>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BUILD TO SUIT  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="parallax-container suit" id="suit">
        <div class="parallax"><img src="<?php echo bloginfo('template_url'); ?>/img/parallax/real-estate.jpg" alt=""></div>
        <div class="container light-spacing">
            <div class="text-center">
                <h1 class="white header text-center">Build to suit</h1>
            </div>
            <p class="white"><span class="left-text">Lease agreement execution</span> <span class="responsive-line"></span><span class="bar"></span> Month 0</p>
            <p class="white"><span class="left-text">Desing Phase</span> <span class="responsive-line"></span><span class="bar"></span> Month 1</p>
            <p class="white"><span class="left-text">Construction</span> <span class="responsive-line"></span><span class="bar"></span> Month 5</p>
            <p class="white"><span class="left-text">Beneficial Occupancy</span> <span class="responsive-line"></span><span class="bar"></span> Month 5</p>
            <p class="white"><span class="left-text">Substantial Completion</span> <span class="responsive-line"></span><span class="bar"></span> Month 6</p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LOCATIONS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="locations spacing" id="locations">
        <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/left-line.png" class="diagonal">
        <div class="container text-center">
            <h1 class="blue header"><?php echo CFS() -> get('locations_title'); ?></h1>
            <p class="text light-spacing-bottom">
                <?php echo CFS() -> get('locations_text'); ?>
            </p>
            <div class="row no-margin">
                <div class="col-sm-3 col-xs-6 light-spacing-bottom">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/chihuahua.png" alt="Chihuahua" class="img-responsive center-block">
                    <h4 class="blue">Chihuahua</h4>
                </div>
                <div class="col-sm-3 col-xs-6 light-spacing-bottom">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/juarez.png" alt="Juárez City" class="img-responsive center-block">
                    <h4 class="blue">Juárez City</h4>
                </div>
                <div class="col-sm-3 col-xs-6 light-spacing-bottom">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/monterrey.png" alt="Monterrey" class="img-responsive center-block">
                    <h4 class="blue">Monterrey</h4>
                </div>
                <div class="col-sm-3 col-xs-6 light-spacing-bottom">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/guadalajara.png" alt="Guadalajara" class="img-responsive center-block">
                    <h4 class="blue">Guadalajara</h4>
                </div>
            </div>
        </div>
        <img src="<?php echo bloginfo('template_url'); ?>/img/real-estate/right-line.png" class="diagonal">
    </div>
</div>

<?php get_footer(); ?>