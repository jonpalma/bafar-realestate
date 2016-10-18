<?php include('header.php'); ?>

<div class="wrapper news">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner text-center" id="news">
        <div class="vertical-align">
            <h1 class="white"><span class="bold">News</span></h1>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BUILD TO SUIT  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="news-container spacing" id="news-container">
        <div class="container">
            <?php
            // set up or arguments for our custom query
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
            $query_args = array(
                'post_type' => 'post',
                'posts_per_page' => 15,
                'paged' => $paged
            );
            // create a new instance of WP_Query
            $the_query = new WP_Query( $query_args );
            ?>

            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop 
            if($counter == 0 || $counter%3 == 0) {
                echo '<div class="row">';
            }
            ?>
            <div class="col-sm-4">
                <a href="<?php echo get_the_permalink(); ?>">
                    <div class="img-container">
                        <img class="center-block vert-hor-align" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <h3>
                        <?php
                        if ( strlen($post->post_title) > 50) { 
                            echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . ' [...]'; 
                        } else {
                            the_title();
                        }
                        ?>
                    </h3>
                </a>
            </div>
            <?php 
            $counter++;
            if( $counter%3 == 0 || $counter == $the_query->post_count ) {
                echo '</div>';
            }
            endwhile; 
            ?>

            <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
            <nav class="prev-next-posts" id="post-entries">
                <div class="row no-margin">
                    <div class="prev-posts-link col-sm-6 text-left">
                        <?php echo get_next_posts_link( '<span class="meta-nav">←</span>Older Entries', $the_query->max_num_pages ); // display older posts link ?>
                    </div>
                    <div class="next-posts-link col-sm-6 text-right">
                        <?php echo get_previous_posts_link( 'Newer Entries<span class="meta-nav">→</span>' ); // display newer posts link ?>
                    </div>
                </div>
            </nav>
            <?php } ?>

            <?php else: ?>
            <article>
                <h1>Sorry...</h1>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            </article>
            <?php endif;?>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>