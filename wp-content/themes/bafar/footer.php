        <footer>
            <div class="footer-top text-center">
                <img src="<?php echo bloginfo('template_url'); ?>/img/logo-footer.png" alt="Bafar Real Estate" class="center-block">
            </div>
            <div class="footer-rights">
                <p class="white text-center">All rights reserved Bafar Real Estate <?php echo date('Y'); ?> | Design by: <a href="http://mixen.mx"><img src="http://mixen.mx/firma/logo-mixen.png" alt="Agencia Mixen"> mixen.mx</a></p>
            </div>
        </footer>

        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.12.0.min.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/smoothscroll.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/Google-Maps.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/scrolling-nav.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/parallax.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/fotorama.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/grid-gallery/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/grid-gallery/classie.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/grid-gallery/masonry.pkgd.min.js"></script>
        <script src="<?php echo bloginfo('template_url'); ?>/js/grid-gallery/cbpGridGallery.js"></script>
        <?php
            $grid_counter = $GLOBALS[ 'grid_number' ];
            for ($i = 0; $i < $grid_counter; $i++) {
                echo '<script>';
                echo 'new CBPGridGallery( document.getElementById( "grid-gallery'.$i.'" ) );';
                echo '</script>';
            }
        ?>
        <script src="<?php echo bloginfo('template_url'); ?>/js/app.js"></script>
    </body>
</html>