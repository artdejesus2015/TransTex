<?php
get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <div class="banner bg-r-overlay banner-sub animatedParent" style="background-image: url('<?php echo $bg_img[0]; ?>')">
        <div class="banner_container">
            <div class="banner-caption animated fadeInDownShort"><?php the_title(); ?></div>
        </div>
    </div>

    <div class="section section-sub section-intro section-intro-sub section-intro-sub-<?php echo $post_slug;?>">
        <div class="container">
            <div class="content">
                <?php if($post->post_content=="") : ?>

                    <div class="description">
                        <p>Content Empty!</p>
                    </div>



                <?php else : ?>

                    <div class="description">
                        <?php the_content();?>
                    </div>

                    <div class="gallery-wrap">
                        <?php
                        if( have_rows('operation_gallery') ):
                            while( have_rows('operation_gallery') ): the_row();
                                $large_img = get_sub_field('large_image_operations');

                                // thumbnail
                                $size = 'gallery-large';
                                $large_img_thumb = $large_img['sizes'][ $size ];

                                ?>

                                <?php if ($large_img_thumb): ?>
                                    <div class="img-wrap img-full">
                                        <img src="<?php echo $large_img_thumb;?>">
                                    </div>
                                <?php endif; ?>

                                <div class="img-half-wrap">

                                    <?php
                                    if( have_rows('small_images_operations') ):
                                        while( have_rows('small_images_operations') ): the_row();
                                            $small_img = get_sub_field('small_image_operations');

                                            // thumbnail
                                            $size_small = 'gallery-small';
                                            $small_img_thumb = $small_img['sizes'][ $size_small ];?>
                                            <div class="img-wrap img-half">
                                                <img src="<?php echo $small_img_thumb;?>">
                                            </div>
                                        <?php  endwhile; endif;?>



                                </div>

                            <?php  endwhile; endif;?>

                    </div>

                <?php endif; ?>


            </div>
        </div>
    </div>

<?php endwhile;?>
<?php endif; ?>

<?php get_footer();