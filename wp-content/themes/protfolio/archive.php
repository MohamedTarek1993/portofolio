<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package protfolio
 */

get_header();
?>


<div class="page-title wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active"><?php echo get_the_archive_title(); ?></li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end page-title -->
<?php
if (have_posts()) {
?>
    <section class="section wb">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="page-wrapper">
                        <div class="portfolio row">
                            <?php
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();
                            ?>
                                <?php get_template_part('template-parts/post-card'); ?>
                            <?php
                            endwhile;

                            ?>

                        </div><!-- end portfolio -->
                    </div><!-- end page-wrapper -->

                    <div class="row">
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
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </section>

<?php
} else {
    echo  'No Post Found';
}
get_footer();
