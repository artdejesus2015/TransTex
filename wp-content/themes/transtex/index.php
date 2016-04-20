<?php
get_header();

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
?>

        <div class="banner bg-r-overlay banner-home" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-home.jpg')">
            <div class="banner_container">
                <div class="banner-cap-right">
                    <div class="banner-title">
                        <p><span class="white">Handling All Your</span></p>
                        <p><span class="red">Gas Treating</span> <span class="white">&</span></p>
                        <p><span class="red">Processing</span> <span class="white">Needs</span></p>
                    </div>
                    <a href="#" class="btn btn-primary btn-bordered-white">Contact Us</a>
                </div>

                <div class="banner-cap-left">
                    <div class="description">
                        <p>Discover how our experienced teams and
                            modern equipment can give you the edge.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-intro section-intro-home">
            <div class="container-fluid">
                <div class="grid grid-box grid-intro-home">
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
                                                $trimmed_content = wp_trim_words( $content, 25, '...' );?>
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
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.png" class="logo-icon-img">

                <div class="content">
                   <div class="container">
                       <h2 class="title section-title after-line"><?php the_field('section_title_home_intro', 'option') ?></h2>

                       <div class="description">
                           <?php the_field('section_description_home', 'option') ?>
                       </div>

                       <a href="<?php the_field('section_button_link_home', 'option') ?>" class="btn btn-primary">Learn More</a>
                   </div>
                </div>
            </div>
        </div>

        <div class="section bg-r-overlay bg-fixed section-we-do" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/bg-we-do.jpg')">
            <div class="container">
                <div class="content">
                    <h2 class="title section-title title-white">watch how we do it</h2>

                    <div class="bg-r-overlay video-wrap" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/video-img.jpg')">
                        <div class="play-button">
                            <div class="tringle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section section-equipment section-equipment-home">
            <div class="container-fluid">
                <div class="grid grid-box grid-intro-home2">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#">
                                <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/grid-equipment1.jpg')">
                                    <h3 class="title grid-title">amine plants</h3>
                                    <div class="grid-caption">
                                        <h3 class="title caption-title">amine plants</h3>
                                        <div class="description">
                                            <p>TransTex offers H2S Scavenger vessels to be used either in place of amine treating or in combination with amine treating. Scavengers offer producers and midstream  ...</p>
                                        </div>
                                        <div class="btn btn-primary">Learn More</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#">
                                <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/grid-equipment2.jpg')">
                                    <h3 class="title grid-title">jt plants</h3>
                                    <div class="grid-caption">
                                        <h3 class="title caption-title">jt plants</h3>
                                        <div class="description">
                                            <p>TransTex offers H2S Scavenger vessels to be used either in place of amine treating or in combination with amine treating. Scavengers offer producers and midstream  ...</p>
                                        </div>
                                        <div class="btn btn-primary">Learn More</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#">
                                <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/grid-equipment3.jpg')">
                                    <h3 class="title grid-title">h2s scavengers</h3>
                                    <div class="grid-caption">
                                        <h3 class="title caption-title">h2s scavengers</h3>
                                        <div class="description">
                                            <p>TransTex offers H2S Scavenger vessels to be used either in place of amine treating or in combination with amine treating. Scavengers offer producers and midstream  ...</p>
                                        </div>
                                        <div class="btn btn-primary">Learn More</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section section-news section-news-home">
            <div class="container">
                <div class="content">
                    <h2 class="title section-title">recent news</h2>
                </div>

                <ul class="list list-news">

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

        <div class="section bg-r-overlay bg-fixed section-contact section-contact-home" style="background-image: url('<?php echo $section_bg_img;?>')">
            <div class="container">
                <div class="content">
                    <h2 class="title slug-title"><?php the_field('contact_section_title', 'option') ?></h2>

                    <div class="description">
                        <?php the_field('contact_section_description', 'option') ?>
                    </div>
                    <a href="<?php the_field('contact_section_button_link', 'option') ?>" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

<?php get_footer();