<?php
get_header();

global $post;
$post_slug=$post->post_name;

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
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
                        <div class="col-md-4">
                            <a href="#">
                                <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/grid-intro-home1.jpg')">
                                    <h3 class="title grid-title">Gas Treating</h3>
                                    <div class="grid-caption">
                                        <h3 class="title caption-title">Gas Treating</h3>
                                        <div class="description">
                                            <p>Our understanding of and expertise in the natural gas industry goes much farther than just amine treating plants. TransTex employees have decades of experience ...</p>
                                        </div>
                                        <div class="btn btn-primary">Learn More</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#">
                                <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/grid-intro-home2.jpg')">
                                    <h3 class="title grid-title">gas processing</h3>
                                    <div class="grid-caption">
                                        <h3 class="title caption-title">gas processing</h3>
                                        <div class="description">
                                            <p>Our understanding of and expertise in the natural gas industry goes much farther than just amine treating plants. TransTex employees have decades of experience ...</p>
                                        </div>
                                        <div class="btn btn-primary">Learn More</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-md-4">
                            <a href="#">
                                <div class="bg-r-overlay grid-item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/grid-intro-home3.jpg')">
                                    <h3 class="title grid-title">production equipment</h3>
                                    <div class="grid-caption">
                                        <h3 class="title caption-title">production equipment</h3>
                                        <div class="description">
                                            <p>Our understanding of and expertise in the natural gas industry goes much farther than just amine treating plants. TransTex employees have decades of experience ...</p>
                                        </div>
                                        <div class="btn btn-primary">Learn More</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.png" class="logo-icon-img">

                <div class="content">
                   <div class="container">
                       <h2 class="title section-title after-line">about transtex treating</h2>

                       <div class="description">
                           <p>We specialize in the leasing and sale of amine treating plants of all sizes, as well as other gas processing equipment. TransTex is located in Houston, TX and has equipment operating across the Southern and Northeastern United States. We have a vast inventory of
                               <a href="#">gas treating</a> and <a href="#">processing</a>, and <a href="#">production equipment</a> for all types of projects.</p>
                           <p>With collective decades of field experience behind us, and the business savvy that comes from heading up successful ventures around the world, TransTex has become the go-to service provider in the natural gas industry.</p>
                       </div>

                       <a href="#" class="btn btn-primary">Learn More</a>
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
                    <li>
                        <div class="list-item">
                            <span class="list-date">mar 08, 2016</span>

                            <h3 class="list-title">Shale gas proves more resilient than U.S. government expected</h3>
                            <div class="description">
                                <p>WASHINGTON, D.C. (Bloomberg) — America’s energy explorers have become so good at pulling natural gas out of the ground that government ...</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="list-item">
                            <span class="list-date">jan 12, 2016</span>

                            <h3 class="list-title">US Shale Output To Fall 116,000 Bpd mo/mo In Feb.</h3>
                            <div class="description">
                                <p>NEW YORK, Jan 11 (Reuters) – U.S. shale oil production is expected to fall for a seventh month in a row in February, declining at about the same ...</p>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="list-item">
                            <span class="list-date">nov 18, 2016</span>

                            <h3 class="list-title">North Dakota’s Bakken pumps less oil for first time in decade</h3>
                            <div class="description">
                                <p>HOUSTON (Bloomberg) — The shale boom in North Dakota has softened to a whisper. The state’s Bakken oil region produced less oil ...</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="section bg-r-overlay bg-fixed section-contact section-contact-home" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/contact-home-bg.jpg')">
            <div class="container">
                <div class="content">
                    <h2 class="title slug-title">Need more information?</h2>

                    <div class="description">
                        <p>Get access to expert assessments. Give us a Call.</p>
                    </div>
                    <a href="#" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>

<?php endwhile;?>
<?php endif; ?>

<?php get_footer();