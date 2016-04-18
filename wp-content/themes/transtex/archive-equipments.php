<?php
/**
 * Template Name: Equipments Page
 */
get_header();

$banner_img = get_field('equipments_banner_background', 'option');
    // thumbnail
    $size = 'banner-img';
    $banner_bg = $banner_img['sizes'][ $size ];
?>

    <div class="banner bg-r-overlay banner-sub banner-<?php $post_type = get_post_type( $post->ID ); echo $post_type;?>" style="background-image: url('<?php echo $banner_bg; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_field('equipments_banner_title', 'option') ?></div>
        </div>
    </div>

    <div class="section section-sub section-grid">
        <div class="container">
            <div class="grid-equipment">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $post_bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-img', false, '' ); ?>
                    <div class="grid-item">
                        <div class="bg col-md-5 grid-img" style="background-image: url('<?php echo $post_bg[0]; ?>')"></div>
                        <div class="col-md-7">
                            <div class="grid-desription">
                                <h3 class="grid-title secondary-grid-title"><?php the_title(); ?></h3>

                                <div class="description">
                                    <p><?php the_excerpt(); ?></p>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
                <?php endif; ?>

            </div>
        </div>
    </div>




<?php get_footer();