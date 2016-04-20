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

    <div class="banner bg-r-overlay bg-fixed banner-sub" style="background-image: url('<?php echo $banner_bg; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_field('equipments_banner_title', 'option') ?></div>
        </div>
    </div>

    <div class="section section-sub section-tax-equip">
        <div class="container">
            <div class="tax-wrap">
                <div class="col-md-7">
                    <?php $term =	$wp_query->queried_object;
                    $category_image = get_field('category_image', $term);
                    // thumbnail
                    $category_size = 'post-img';
                    $category_img = $category_image['sizes'][ $category_size ]; ?>
                    <div class="tax-description">
                        <h3 class="grid-title secondary-grid-title"><?php echo $term->name; ?></h3>

                        <div class="description">
                            <?php the_field('category_description', $term) ?>
                        </div>
                    </div>
                </div>
                <div class="bg col-md-5 tax-img" style="background-image: url('<?php echo $category_img; ?>')"></div>
            </div>
        </div>
    </div>




<?php get_footer();