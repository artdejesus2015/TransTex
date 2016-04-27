<?php
get_header();

$banner_img = get_field('equipments_banner_background', 'option');
// thumbnail
$size = 'banner-img';
$banner_bg = $banner_img['sizes'][ $size ];
?>

    <div class="banner bg-r-overlay bg-fixed banner-sub animatedParent" style="background-image: url('<?php echo $banner_bg; ?>')">
        <div class="banner_container">
            <div class="banner-caption animated fadeInDownShort"><?php the_field('equipments_banner_title', 'option') ?></div>
        </div>
    </div>

    <div class="section section-sub section-tax-equip">
        <div class="container">
            <div class="tax-wrap animatedParent">
                <?php $term =	$wp_query->queried_object;
                $category_image = get_field('category_image', $term);
                // thumbnail
                $category_size = 'post-img';
                $category_img = $category_image['sizes'][ $category_size ]; ?>

                <div class="bg col-md-5 col-md-push-7 tax-img animated fadeInUpShort">
                    <img src="<?php echo $category_img; ?>">
                </div>

                <div class="col-md-7 col-md-pull-5">

                    <div class="tax-description">
                        <h3 class="grid-title secondary-grid-title animated fadeInDownShort"><?php echo $term->name; ?></h3>

                        <div class="description animated fadeInUpShort">
                            <?php the_field('category_description', $term) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tax-others animatedParent">
                <h2 class="title secondary-title animated fadeInDownShort">Natural <?php echo $term->name; ?> Solutions</h2>

                <div class="grid grid-box grid-tax animated fadeInUpShort">
                    <div class="row">

                        <?php
                        $args = array(
                            'post_type'   => 'equipments',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'equipments_category',
                                    'field' => 'slug',
                                    'terms' => $term->slug
                                )
                            )
                        );
                        query_posts($args);
                        ?>
                        <?php while ( have_posts() ) : the_post();
                            $post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post_img', false, '' );?>
                            <div class="col-md-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo  $post_img[0]; ?>')">
                                        <h3 class="title grid-title"><?php the_title(); ?></h3>
                                        <div class="grid-caption">
                                            <h3 class="title caption-title"><?php the_title(); ?></h3>
                                            <div class="description">
                                                <?php
                                                $content = get_the_content();
                                                $trimmed_content = wp_trim_words( $content, 15, '...' );?>
                                                <p><?php echo $trimmed_content; ?></p>
                                            </div>
                                            <div class="btn btn-primary">Learn More</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>





                    </div>
                </div>
            </div>
        </div>
    </div>







<?php get_footer();