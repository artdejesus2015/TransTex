<?php
/**
 * Template Name: About Us Page
 */
get_header();

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img', false, '' );
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <div class="banner bg-r-overlay bg-fixed banner-sub banner-about animatedParent" style="background-image: url('<?php echo $bg_img[0]; ?>')">
        <div class="banner_container">
            <div class="banner-caption animated fadeInDownShort"><?php the_title(); ?></div>
        </div>
    </div>

    <div class="section section-sub section-intro section-intro-sub animatedParent">
        <div class="container">
            <div class="content">
                <h2 class="title secondary-title animated fadeInDownShort"><?php the_field('section_title'); ?></h2>

                <div class="description animated fadeInUpShort">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg-r-overlay bg-fixed section-sub section-management animatedParent" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/management-team-bg.jpg')">
        <div class="container">
            <div class="content">
                <h2 class="title secondary-title animated fadeInDownShort">Management Team</h2>
                <ul class="list-inline team-list animated fadeInUpShort">
                    <li>
                        <a href="#">
                            <div class="list-item">
                                <div class="bg list-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/team1.jpg')"></div>

                                <div class="list-description">
                                    <h3 class="list-name">Stephen Morgan</h3>
                                    <p class="list-position">Vice President of Business Development</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="list-item">
                                <div class="bg list-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/team1.jpg')"></div>

                                <div class="list-description">
                                    <h3 class="list-name">Robert Shimek</h3>
                                    <p class="list-position">Vice President of Operations</p>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <div class="list-item">
                                <div class="bg list-img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/team1.jpg')"></div>

                                <div class="list-description">
                                    <h3 class="list-name">Josh Smith</h3>
                                    <p class="list-position">Director of Construction</p>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="section section-sub section-values animatedParent">
        <div class="container">
            <div class="content">
                <h2 class="title secondary-title animated fadeInDownShort">Core Values</h2>
                <ul class="list-inline values-list animated fadeInUpShort">
                    <li>
                        <div class="list-item">
                            <h3 class="title list-title">safety</h3>

                            <div class="description">
                                <p>We are committed to safety, providing ongoing training, materials and tools to promote and maintain a safe working environment.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="list-item">
                            <h3 class="title list-title">communication</h3>

                            <div class="description">
                                <p>Key to any good working relationship is communication. We pride ourselves in being good listeners, open to negotiation, available for our customers and we communicate at all levels within our organization. </p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="list-item">
                            <h3 class="title list-title">Integrity </h3>

                            <div class="description">
                                <p>We are trustworthy and we operate in our daily activities with integrity, holding ourselves to the
                                    highest level of honor.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="list-item">
                            <h3 class="title list-title">Respect</h3>

                            <div class="description">
                                <p>Respect is a mutual quality that we adhere to, with each other, our customers and our community.</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="list-item">
                            <h3 class="title list-title">reliable</h3>

                            <div class="description">
                                <p>Understanding that our customer comes first, we are reliable and dependable in maintaining our equipment and we respond quickly when called.</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="section bg-r-overlay bg-fixed section-sub section-employee animatedParent" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/employee-bg.jpg')">
        <div class="container">
            <div class="content">
                <h2 class="title secondary-title title-white animated fadeInDownShort">Employee Spotlight</h2>
                <div class="employee-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content-left animated fadeInUpShort">
                                <div class="col-md-4">
                                    <div class="bg employee-img" style="background-image: url('')"></div>
                                </div>
                                <div class="col-md-8">
                                    <div class="employee-description">
                                        <h3 class="employee-name">John Doe</h3>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="qoute-wrap animated fadeInUpShort">
                                <p class="qoute">“</p>

                                <div class="description">
                                    <p>We’re proud to say that a significant portion of our business is made up of repeat customers. To many of our clients, we’re thought of as a long term partner that’s dedicated to their success and growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php endwhile;?>
<?php endif; ?>
<?php get_footer();