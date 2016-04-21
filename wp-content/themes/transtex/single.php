<?php
get_header();

$banner_img = get_field('news_banner_background', 'option');
// thumbnail
$size = 'banner-img';
$banner_bg = $banner_img['sizes'][ $size ];
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <div class="banner bg-r-overlay bg-fixed banner-sub banner-news" style="background-image: url('<?php echo $banner_bg; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_field('news_banner_title', 'option'); ?></div>
        </div>
    </div>

    <div class="section section-sub section-single section-single-news">
        <div class="container">
            <div class="content">
                <div class="single-img">
                    <?php the_post_thumbnail('gallery-large'); ?>
                </div>
                <div class="single-description">
                    <h2 class="title secondary-title"><?php the_title(); ?></h2>

                    <div class="description">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php endwhile;?>
<?php endif; ?>
<?php get_footer();
