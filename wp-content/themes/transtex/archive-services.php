<?php
/**
 * Template Name: Services Page
 */
get_header();


    $banner_img = get_field('services_banner_background', 'option');
    // thumbnail
    $size = 'banner-img';
    $banner_bg = $banner_img['sizes'][ $size ];
    ?>

    <div class="banner bg-r-overlay bg-fixed banner-sub banner-<?php $post_type = get_post_type( $post->ID ); echo $post_type;?>" style="background-image: url('<?php echo $banner_bg; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_field('services_banner_title', 'option') ?></div>
        </div>
    </div>

    <div class="section section-sub section-grid">
        <div class="container">
            <div class="grid-services">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="text-left grid-item">
                    <h3 class="grid-title secondary-grid-title"><span class="services-icon"><?php the_post_thumbnail(); ?></span><?php the_title(); ?></h3>

                    <div class="description">
                        <?php the_content(); ?>
                    </div>

                    <a href="<?php the_field('button_link'); ?>" class="btn btn-primary"><?php the_field('button_name'); ?></a>
                </div>

                <?php endwhile;?>
                <?php endif; ?>

            </div>
        </div>
    </div>




<?php get_footer();
