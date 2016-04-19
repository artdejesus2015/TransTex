<?php
/**
 * Template Name: Contact Page
 */
get_header();
$bg_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner-img', false, '' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

    <div class="banner bg-r-overlay bg-fixed banner-sub banner-contact" style="background-image: url('<?php echo $bg_img[0]; ?>')">
        <div class="banner_container">
            <div class="banner-caption"><?php the_title();?></div>
        </div>
    </div>

    <div class="section section-sub section-sub-contact">
        <div class="container">
           <div class="content-contact">
               <div class="row">
                   <div class="col-md-5">
                       <div class="content text-left">
                           <h2 class="title secondary-title">Visit Us</h2>
                           <div class="list list-places">
                               <div class="list-item">
                                   <h3 class="location-name">corporate headquarters</h3>
                                   <p class="location-address">1111 Louisiana Suite 4520, <br>
                                       Houston, TX 77002</p>
                                   <a href="#" class="location-link">Directions to Corporate Address <span class="icon-angle-right"></span></a>
                               </div>

                               <div class="list-item">
                                   <h3 class="location-name">fabrication facility</h3>
                                   <p class="location-address">1442 US Hwy 90A East<br>
                                       Hallettsville, TX  77964<br>
                                       361-798-9255</p>
                                   <a href="#" class="location-link">Directions to Fabircation Facility <span class="icon-angle-right"></span></a>
                               </div>

                               <div class="list-item">
                                   <h3 class="location-name">contact</h3>
                                   <p class="location-address"><span>Email:</span> <a href="#">info@transtexhunter.com</a></p>
                                   <p class="location-address"><span>Phone:</span> <a href="#">713-654-4440</a></p>
                               </div>

                           </div>
                       </div>
                   </div>
                   <div class="col-md-7">
                       <div class="content text-left">
                           <h2 class="title secondary-title">Get in Touch</h2>

                           <div class="form-wrap">
                               <form>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                                           </div>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone Number">
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <input type="file" name="file-7[]" id="file-7" class="inputfile inputfile-6" />
                                               <label for="file-7" class="form-control file-form-control"><span class="label-upload">Upload Gas Analysis</span> <span class="label-black">Upload</span></label>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-12">
                                           <select class="form-control">
                                               <option>Subject: Gas Processing</option>
                                               <option>Subject: Gas Processing</option>
                                               <option>Subject: Gas Processing</option>
                                           </select>

                                       </div>
                                   </div>

                                   <div class="row">
                                       <div class="col-md-12">
                                           <textarea class="form-control" rows="10" placeholder="Message"></textarea>
                                       </div>
                                   </div>

                                   <button type="submit" class="btn btn-primary">Submit</button>
                               </form>
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