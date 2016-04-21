<?php
get_header();

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img', false, '' );
if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>


    <div class="banner bg-r-overlay bg-fixed banner-sub banner-about" style="background-image: url('<?php echo $bg_img[0]; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_title(); ?></div>
        </div>
    </div>

    <div class="section section-sub section-single section-single-equipments">
        <div class="container">
            <div class="content">
                <div class="single-head">
                    <h2 class="title secondary-title"><?php the_title(); ?></h2>
                    <a href="#" class="btn btn-primary">View Technical Specifications</a>
                </div>

                <div class="description">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>


<?php endwhile;?>
<?php endif; ?>
<?php get_footer();