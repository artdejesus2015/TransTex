<?php
/**
 * Template Name: Operations Page
 */
get_header();

$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img', false, '' );
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


    <div class="banner bg-r-overlay bg-fixed banner-sub banner-operations" style="background-image: url('<?php echo $bg_img[0]; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_title(); ?></div>
        </div>
    </div>

<div class="section-map">
    <div class="map-wrap">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/map.png">

        <div class="operation-wrap operation-wrap1">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">3 GPM Pneumatic Amine Unit</p>
                <p class="operation-location">Maintenance <br/> Turnkey Installation <br/> Val Verde Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap2">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">10 GPM Pneumatic Amine Unit </p>
                <p class="operation-location">Maintenance <br/> Turnkey Installation <br/> La Salle Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap3">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">7 GPM Amine Unit </p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Zapata Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap4">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">60 GPM Amine Unit</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Tilden, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap5">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">70 GPM Amine Unit </p>
                <p class="operation-location">Freer, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap6">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">60 GPM Amine Unit</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Live Oak Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap7">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">25 GPM Amine Unit</p>
                <p class="operation-location">Operation & Maintenance <br/> Turnkey Installation <br/> Lavaca Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap8">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">10 GPM Amine Unit</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Kenedy, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap9">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">20 GPM Amine Plant <br/> 10 GPM Amine Plant</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Wilson Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap10">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">7 GPM Amine Unit</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Sheperd, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap11">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">5 GPM Amine Unit</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Cheapside, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap12">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">7 GPM Amine Unit</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Poth, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap13">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">3.5 GPM Amine Unit</p>
                <p class="operation-location">Maintenance <br/> Halletsville, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap14">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">15 GPM Amine Unit</p>
                <p class="operation-location">Maintenance <br/> Turnkey Installation <br/> Dinero, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap15">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">10 GPM Amine Unit</p>
                <p class="operation-location">Austin Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap16">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">10 GPM Amine Unit</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Robertson Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap17">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">3 GPM Pneumatic Amine Unit</p>
                <p class="operation-location">Maintenance <br/> Turnkey Installation <br/> Coldspring, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap18">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">10 GPM Pneumatic Amine Unit</p>
                <p class="operation-location">Maintenance <br/> Turnkey Installation <br/> Galveston Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap19">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">40 GPM Amine Plants</p>
                <p class="operation-location">Operations & Maintenance <br/> Turnkey Installation <br/> Hunstville, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap20">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">5 GPM Amine Unit</p>
                <p class="operation-location">Maintenance <br/> Turnkey Installation <br/> Riverside, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap21">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">7.5 GPM Pneumatic Amine Unit</p>
                <p class="operation-location">Maintenance <br/> Turnkey Installation <br/> Jefferson Country, TX</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap22">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">10 GPM Pneumatic</p>
                <p class="operation-location">Cameron Parish, LA</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap23">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">40 GPM Amine Unit</p>
                <p class="operation-location">Turnkey Installation <br/> McNarry, LA</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap24">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">3 GPM Amine Unit</p>
                <p class="operation-location">Crowley, LA</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap25">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">12.5 GPM Amine Unit</p>
                <p class="operation-location">Turnkey Installation <br/> Lake Arthur, LA</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap26">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">3 GPM Amine Unit</p>
                <p class="operation-location">Houma LA</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap27">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">(2)10 MM JT <br>(1) 5 MM JT</p>
                <p class="operation-location">Tyler Country, WV</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap28">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">60 GPM Amine Unit</p>
                <p class="operation-location">Operation & Amine Unit <br/> West Virginia</p>
            </div>
        </div>

        <div class="operation-wrap operation-wrap29">
            <div class="operation-circle"></div>
            <div class="operation-description">
                <div class="triangle-left"></div>
                <p class="operation-title">jt plant</p>
                <p class="operation-location">Operations & Maintenance <br/> Wheerler Country, TX</p>
            </div>
        </div>

    </div>
</div>

    <div class="section section-sub section-intro section-intro-sub">
        <div class="container">
            <div class="content">
                <h2 class="title secondary-title">How We Operate</h2>
                <div class="description">
                    <?php the_content(); ?>
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
            </div>
        </div>
    </div>
<?php endwhile;?>
<?php endif; ?>
<?php get_footer();