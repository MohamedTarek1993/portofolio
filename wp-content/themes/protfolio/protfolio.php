<?php

/**
 * Template Name: Protfolio
 * The template for displaying the Protfolio page
 *
 * 
 *
 */
$post_id = get_the_ID();
$link = get_permalink($post_id);
get_header();
?>


<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php is_home(  ); ?>">Home</a></li>
                   
                    <li class="breadcrumb-item active"><?php the_title() ?></li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->

<section class="section wb">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="page-wrapper">
                    <div class="portfolio row">
                        <?php
                        /* Start the Loop */
                        $project = new WP_Query(array(
                            'post_type' => 'project',
                            'orderby' => 'post_id',
                            'posts_per_page' => -1,
                            'order' => 'ASC'
                        ));
                        if ($project->have_posts()) : //if condition
                            while ($project->have_posts()) : $project->the_post();  //while ondition
                        ?>
                                <!-- content -->
                                <?php
                                $post_link = get_permalink();
                                $projects = get_the_terms($post_id, 'project');
                                ?>
                                <div class="pitem item-w1 item-h1">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="<?php echo $post_link; ?>" title="">
                                                <img src="<?php echo get_the_post_thumbnail_url(null, 'blog-img') ?>" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">

                                            <?php if (is_array($projects) && count($projects)) {
                                                echo '<span class="bg-grey"><a href="' . get_term_link($projects[0]) . '" title="">' . $projects[0]->name . '</a></span>';
                                            } ?>
                                            <h4 class="blog_title_post"><a href="<?php echo $post_link; ?>" title=""> <?php the_title(); ?> </a></h4>
                                            <small><?php the_author_posts_link(); ?> </small>
                                            <small><a href="<? get_year_link(get_the_date('Y')); ?>" title=""><?php echo get_the_date('d M, Y'); ?></a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div>
                                <!-- content -->
                        <?php
                            endwhile;     //end while condition
                        endif;       //end if condition
                        wp_reset_query();  //end loop 
                        ?>

                    </div><!-- end portfolio -->
                </div><!-- end page-wrapper -->

                <!-- <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>  end col -->
                <!-- </div> end row -->
            </div><!-- end col -->


        </div><!-- end row -->
    </div><!-- end container -->

</section>




<?php
get_footer();
