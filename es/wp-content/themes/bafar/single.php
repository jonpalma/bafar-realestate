<?php $page = 'single'; ?>
<?php include('header.php'); ?>

<div class="wrapper single">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner text-center">
        <div class="vertical-align">
            <h1 class="white"><span class="bold">Noticias</span></h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BUILD TO SUIT  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="spacing single-news" id="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-8">
                    <?php
                    if ( have_posts() ) {
                        the_post();
                    }
                    $gallery_array = CFS()->get('gallery_array');
                    if(!empty($gallery_array)) {
                    ?>
                    <div class="text-center">
                        <div class="fotorama" data-arrows="true" data-keyboard="true" data-width="100%" data-ratio="700/467" data-max-width="100%" data-nav="thumbs" data-fit="cover">
                            <?php 
                        foreach($gallery_array as $image) {
                            echo '<img src="'.$image['post_img'].'">';
                        }
                            ?>
                        </div>
                    </div>
                    <?php } else if( has_post_thumbnail () ) {
                    ?>
                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php echo get_the_title(); ?>" class="news-header img-responsive center-block">
                    <?php } ?>
                    <h1 class="blue header text-center"><?php echo get_the_title(); ?></h1>
                    <p class="text text-justify">
                        <?php echo the_content(); ?>
                    </p>
                    <?php
                    query_posts( 'showposts=10' );
                    if ( have_posts() ) {
                        while ( have_posts() ) { 
                            the_post();
                    ?>
                    <?php
                        }
                    }
                    wp_reset_query();
                    ?>
                    <nav id="post-entries">
                        <div class="row no-margin">
                            <div class="nav-prev fl col-xs-6"><?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' ); ?></div>
                            <div class="nav-next fr col-xs-6 text-right"><?php next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' ); ?></div>
                        </div>
                    </nav><!-- #post-entries -->
                </div>
                <div class="col-lg-3 col-sm-4 feed">
                    <?php get_sidebar('news'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>