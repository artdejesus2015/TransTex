<?php
get_header();

$banner_img = get_field('banner_image_home', 'option');
// thumbnail
$size = 'banner-img';
$banner_bg = $banner_img['sizes'][ $size ];
?>

        <div class="banner bg-r-overlay banner-home animatedParent" style="background-image: url('<?php echo $banner_bg; ?>')">
            <div class="banner_container">
                <div class="banner-cap-right animated fadeInDownShort">
                    <div class="banner-title">
                        <?php the_field('banner_title_home', 'option') ?>
                    </div>
                    <a href="<?php the_field('banner_button_link_home', 'option') ?>" class="btn btn-primary btn-bordered-white"><?php the_field('banner_button_name_home', 'option') ?></a>
                </div>

                <div class="banner-cap-left animated fadeInUpShort">
                    <div class="description">
                        <?php the_field('banner_description_home', 'option') ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-intro section-intro-home animatedParent">
            <div class="container-fluid">
                <div class="grid grid-box grid-intro-home animated fadeInUpShort">
                    <div class="row">

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


                            <div class="col-md-4">
                                <a href="<?php echo get_term_link( $term ); ?>">
                                    <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo $category_img; ?>')">
                                        <h3 class="title grid-title"><?php echo $term->name; ?></h3>
                                        <div class="grid-caption">
                                            <h3 class="title caption-title"><?php echo $term->name; ?></h3>
                                            <div class="description">
                                                <?php
                                                $content = get_field('category_description', $term);
                                                $trimmed_content = wp_trim_words( $content, 20, '...' );?>
                                                <p><?php echo $trimmed_content; ?></p>
                                            </div>
                                            <div class="btn btn-primary">Learn More</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>




                    </div>
                </div>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.png" class="logo-icon-img animated fadeIn">

                <div class="content">
                   <div class="container">
                       <h2 class="title section-title after-line animated fadeInUpShort"><?php the_field('section_title_home_intro', 'option') ?></h2>

                       <div class="description animated fadeInUpShort">
                           <?php the_field('section_description_home', 'option') ?>
                       </div>

                       <a href="<?php the_field('section_button_link_home', 'option') ?>" class="btn btn-primary animated fadeInDownShort">Learn More</a>
                   </div>
                </div>
            </div>
        </div>

        <div class="section bg-r-overlay bg-fixed section-we-do animatedParent" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg-we-do.jpg')">
            <div class="container">
                <div class="content">
                    <h2 class="title section-title title-white animated fadeInDownShort">watch how we do it</h2>

                    <div class="bg-r-overlay video-wrap animated fadeInUpShort" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/video-img.jpg')">
                        <div class="play-button">
                            <div class="triangle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-equipment section-equipment-home animatedParent">
            <div class="container-fluid">
                <div class="grid grid-box grid-intro-home2 animated fadeInUpShort">
                    <div class="row">


                        <?php
                        $args = array(
                                        'post_type' => 'equipments',
                                        'meta_key'		=> 'featured_equipment',
                                        'meta_value'	=> '1',
                                        'posts_per_page' => 3 );
                        $loop = new WP_Query( $args );

                        while ( $loop->have_posts() ) : $loop->the_post();
                            $post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img', false, '' );
                            ?>

                            <div class="col-md-4">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo $post_img[0]; ?>')">
                                        <h3 class="title grid-title"><?php the_title(); ?></h3>
                                        <div class="grid-caption">
                                            <h3 class="title caption-title"><?php the_title(); ?></h3>
                                            <div class="description">
                                                <?php
                                                $content = get_the_content();
                                                $trimmed_content = wp_trim_words( $content, 20, '...' );?>
                                                <p><?php echo $trimmed_content; ?></p>
                                            </div>
                                            <div class="btn btn-primary">Learn More</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <?php endwhile; ?>



                    </div>
                </div>
            </div>
        </div>

        <div class="section section-news section-news-home animatedParent">
            <div class="container">
                <div class="content">
                    <h2 class="title section-title animated fadeInDownShort">recent news</h2>
                </div>

                <ul class="list list-news animated fadeInUpShort">

                    <?php
                    $args = array( 'post_type' => 'news', 'posts_per_page' => 3 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>

                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <div class="list-item">
                                    <span class="list-date"><?php the_time('M j, Y'); ?></span>

                                    <h3 class="list-title"><?php the_title(); ?></h3>
                                    <div class="description">
                                        <p><?php echo excerpt(25); ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>

                    <?php endwhile; ?>

                </ul>
            </div>
        </div>

        <?php
            $section_bg = get_field('contact_section_background', 'option');
            // thumbnail
            $size_bg = 'background-img';
            $section_bg_img = $section_bg['sizes'][ $size_bg ];
        ?>

        <div class="section bg-r-overlay bg-fixed section-contact section-contact-home animatedParent" style="background-image: url('<?php echo $section_bg_img;?>')">
            <div class="container">
                <div class="content">
                    <h2 class="title slug-title animated fadeInDownShort"><?php the_field('contact_section_title', 'option') ?></h2>

                    <div class="description animated fadeInDownShort">
                        <?php the_field('contact_section_description', 'option') ?>
                    </div>
                    <a href="<?php the_field('contact_section_button_link', 'option') ?>" class="btn btn-primary animated fadeInUpShort">Contact Us</a>
                </div>
            </div>
        </div>

<?php get_footer();