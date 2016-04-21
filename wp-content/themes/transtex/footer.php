<footer>
    <div class="section footer">
        <div class="container">
            <div class="grid-footer">
                <div class="row">

                    <?php
                    $post_type = 'equipments';
                    $taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );
                    $cntr = 0;

                    foreach( $taxonomies as $taxonomy ) :
                    $terms = get_terms( $taxonomy );

                    foreach( $terms as $term ) :
                    ?>
                    <div class="col-md-4">
                        <div class="grid-item">
                            <a href="<?php echo get_term_link( $term ); ?>" class="grid-title"><?php echo $term->name; ?></a>

                            <ul class="footer-list">
                                <?php
                                $args = array(
                                    'post_type'   => $post_type,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'equipments_category',
                                            'field' => 'slug',
                                            'terms' => $term->slug
                                        )
                                    )
                                );
                                query_posts($args);
                                while ( have_posts() ) : the_post();
                                ?>

                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                                <?php endwhile; wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>


                    <?php  $cntr++;	endforeach;	endforeach;	?>

<!--                    <div class="col-md-4">-->
<!--                        <div class="grid-item">-->
<!--                            <h3 class="grid-title">GAS Processing</h3>-->
<!---->
<!--                            <ul class="footer-list">-->
<!--                                <li><a href="#"> Refrigeration Plants</a></li>-->
<!--                                <li><a href="#">JT Plants</a></li>-->
<!--                                <li><a href="#">NGL Storage Tanks</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-md-4">-->
<!--                        <div class="grid-item">-->
<!--                            <h3 class="grid-title">PRODUCTION EQUIPMENT</h3>-->
<!---->
<!--                            <ul class="footer-list">-->
<!--                                <li><a href="#"> Dehydration Units</a></li>-->
<!--                                <li><a href="#"> Aerial Coolers</a></li>-->
<!--                                <li><a href="#">Stabilizers</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>
            </div>

            <div class="copyright-wrap">
                <p>© 2016 Copyright - TransTex Treating</p>
                <ul class="list-inline footer-menu">
                    <li><a href="#">Privacy Policy </a></li>
                    <li><a href="#">Terms </a></li>
                    <li><a href="#"> Contact Us</a></li>
                </ul>
                <ul class="list-inline social-media">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-youtube"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<?php wp_footer(); ?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
