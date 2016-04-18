<?php
/**
 * Template Name: News Page
 */
get_header();

global $post;
$post_slug=$post->post_name;

if ( have_posts() ) : while ( have_posts() ) : the_post();
    $banner_bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-img', false, '' );
?>

    <div class="banner bg-r-overlay banner-sub banner-<?php echo $post_slug;?>" style="background-image: url('<?php echo $banner_bg[0]; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_title(); ?></div>
        </div>
    </div>

    <div class="section section-sub section-grid">
        <div class="container">
            <div class="grid-news">

                <?php
                $args = array( 'post_type' => 'news', 'posts_per_page' => -1 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    $post_bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-img', false, '' ); ?>

                    <div class="grid-item">
                        <div class="bg col-md-5 grid-img" style="background-image: url('<?php echo $post_bg[0]; ?>')"></div>
                        <div class="col-md-7">
                            <div class="grid-desription text-left">
                                <h3 class="grid-title secondary-grid-title"><?php the_title(); ?></h3>
                                <p class="post-date">mar 08, 2016</p>

                                <div class="description">
                                    <p><?php the_excerpt();?></p>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="btn btn-transparent">Read More</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </div>


<?php endwhile;?>
<?php endif; ?>
<?php get_footer();