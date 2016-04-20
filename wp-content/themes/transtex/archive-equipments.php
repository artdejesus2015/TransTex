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

    <div class="banner bg-r-overlay bg-fixed banner-sub banner-<?php $post_type = get_post_type( $post->ID ); echo $post_type;?>" style="background-image: url('<?php echo $banner_bg; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_field('equipments_banner_title', 'option') ?></div>
        </div>
    </div>

    <div class="section section-sub section-grid">
        <div class="container">
            <div class="grid-equipment">
                <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'equipments_category',
                        'hide_empty' => false,
                    ));

                    foreach ( $categories as $i => $term ):
                        $category_image = get_field('category_image', $term);
                        // thumbnail
                        $category_size = 'post-img';
                        $category_img = $category_image['sizes'][ $category_size ];
                        ?>


                        <div class="grid-item">
                            <div class="bg col-md-5 grid-img" style="background-image: url('<?php echo $category_img; ?>')"></div>
                            <div class="col-md-7">
                                <div class="grid-desription">
                                    <h3 class="grid-title secondary-grid-title"><?php echo $term->name; ?></h3>

                                    <div class="description">
                                        <?php
                                        $content = get_field('category_description', $term);
                                        $trimmed_content = wp_trim_words( $content, 70, '...' );?>
                                        <p><?php echo $trimmed_content; ?></p>
                                    </div>

                                    <a href="<?php echo get_term_link( $term ); ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>




<?php get_footer();