<?php

/**
 * The template for displaying all protfolio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package protfolio
 */
$post_id = get_the_ID();
$link = get_permalink($post_id);

//  $project_meta = get_post_meta($post_id(  ));


get_header();
?>

<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="header">
            <h1 class="project-details__title"><?php the_title(); ?></h1>
        </div>
        <div class="row">

            <div class=" col-lg-4 col-12">
                <div class="project-details__right">

                    <div class="project-details__info">
                        <div class="blog-title-area py-2">
                            <div class="tag-cloud-single">
                                <h4>Type</h4>
                                <?php
                                $projects = get_the_terms($post_id, 'projects_categories');
                                if (is_array($projects)) {
                                    foreach ($projects as $project) {
                                        echo '<span ><a href="' . get_term_link($project) . '" title="">' . $project->name . '</a></span>';
                                    }
                                }

                                ?>
                            </div>
                        </div>
                        <!-- category -->
                        <div class="blog-title-area py-2">
                            <div class="tag-cloud-single">
                                <h4>Category</h4>
                                <?php
                                $catgories = get_the_terms($post_id, 'category');
                                if (is_array($catgories)) {
                                    foreach ($catgories as $catgory) {
                                        echo '<span "><a href="' . get_term_link($catgory) . '" title="">' . $catgory->name . '</a></span>';
                                    }
                                }

                                ?>
                            </div>
                        </div>
                        <!-- category -->

                        <div class="blog-title-area py-2">
                            <div class="tag-cloud-single">
                                <h4>Date</h4>
                                <a href="<? get_year_link(get_the_date('Y')); ?>" title=""><?php echo get_the_date('d M, Y'); ?></a>
                            </div>
                        </div>

                        <!-- tags -->
                        <div class="blog-title-area py-2">
                            <div class="tag-cloud-single">
                                <h4>Tags</h4>
                                <!-- tags -->
                                <?php the_tags('<small><a>', '</a> <a>', '</a></small>'); ?>
                                <!-- tags -->
                            </div><!-- end meta -->


                        </div><!-- end title -->
                        <!-- tags -->
                    </div>
                </div>
            </div>
            <div class=" col-lg-8 col-12">

                <div class="project-details__components">

                    <?php if (has_post_thumbnail($post->ID)) : ?>
                        <div class="img_project">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                     <!-- <div class="project_compnents">
                        <h5> This is Html Theme Bulid By Html5 , CSS3 , SCSS, Bootstrap,Jquery and Javascript .</h5> <br>
                        <h5> responsive to all mobile and labtop size .</h5> <br>
                        <h5> contain Homepage && categories page && products page && product page && profile page && cart page && track order page && blog page &&  .</h5> <br>
                        <h3 class="compntets">Components: </h3>
                        <ul>
                            <li> <strong>HomePage :</strong> include megamenu for categories  Navbar section , Footer Section , adverisment section . <br>
                                <a href=""> <strong>Link page:</strong>  </a>
                            </li>
                            <li> <strong>categories page:</strong> contain information about category product .<br>
                                <a href=""><strong>Link page:</strong>  </a>
                            </li>
                            <li> <strong>products page:</strong> contain information about products && samailler product .<br>
                                <a href=""><strong>Link page:</strong>  </a>
                            </li>
                            <li> <strong>products page:</strong> user can choise size , color and number of product and can put it in cart .<br>
                                <a href=""><strong>Link page:</strong>  </a>
                            </li>
                            <li> <strong> Blog page:</strong> contain all blogs .<br>
                                <a href=""><strong>Link page:</strong> </a>
                            </li>
                           <li> <strong>single Blog page:</strong> contain blog about the company , Category ,tags , and samealir blog.<br>
                                <a href=""><strong>Link page:</strong> </a>
                            </li> 
                            <li> <strong> about page :</strong> user can know information about website . <br>
                                <a href=""><strong>Link page:</strong>  </a>
                            </li>
                            <li> <strong>contact page :</strong> user can send what he want and know connect information . <br>
                                <a href=""> <strong>Link page:</strong>  </a>
                            </li>

                            <li> <strong>search page :</strong> user can know what he search . <br>
                                <a href=""> <strong>Link page:</strong>  </a>
                            </li>

                            <li> <strong> login && register page:</strong>
                                user can login or register to website easily.<br>
                                <a href=""><strong>Link login page:</strong>  </a> <br>
                                <a href=""><strong>Link register page:</strong>  </a>
                            </li>
                            <li> <strong> reset password page:</strong>
                                user can reset password by mobile number  easily.<br>
                                <a href=""><strong>Link reset password page:</strong>  </a> <br>
                            </li>
                          
                            <li> <strong> account  page: </strong>  user can change personal information , password , know his order ,update his location and know his notifcation .<br>
                            <a href=""><strong>Link page:</strong> </a>
                            </li>
                           
                            <li> <strong> cart  page: </strong> user can buy what he want in easy way   .<br>  
                            <a href=""><strong>Link page:</strong> </a>
                            </li>
                            <li> <strong> cart  page: </strong> user can buy what he want in easy way   .<br>  
                            <a href=""><strong>Link page:</strong> </a>
                            </li>

                            <li> <strong>  track order page: </strong>  user can tarck his order  .<br>  
                            <a href=""><strong>Link page:</strong> </a>
                            </li>

                            <li> <strong>  detials order page: </strong>  user can know his order detials  .<br>  
                            <a href=""><strong>Link page:</strong> </a>
                            </li>

                            <li> <strong> policy condition  && use condition  pages: </strong>  .<br>  
                            <a href=""><strong>Link policy condition page:</strong> </a> <br> 
                            <a href=""><strong>Link use condition page:</strong> </a> <br>   
                            </li>
                        </ul>

                    </div>   -->
                    <?php the_content(); ?>
                   
                </div>
            </div>
        </div>

    </div>
</section>
<!--Project Details End-->

<?php get_footer();
