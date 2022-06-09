<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package protfolio
 */

$post_id = get_the_ID();
$link = get_permalink($post_id);
 $post_meta = get_post_meta($post_id);
 $visit_count = ((int)($post_meta['wpc_post_views'][0])) +1 ;
 update_post_meta($post_id, 'wpc_post_views' , $visit_count);
 

get_header();

if (have_posts()) :
	while (have_posts()) : the_post();
?>

	  <!-- start single section -->
      <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="<?php is_home(  ); ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active"><?php the_title(); ?></li>
                            </ol>

                           <!-- catgory -->
								<?php
								$catgories = get_the_terms($post_id, 'category');
								if (is_array($catgories)) {
									foreach ($catgories as $catgory) {
										echo '<span class="color-aqua"><a href="' . get_term_link($catgory) . '" title="">' . $catgory->name . '</a></span>';
									}
								}

								?>
								<!-- catgory -->
                            <h3><?php echo get_the_title(); ?></h3>

                            <div class="blog-meta big-meta">
                            <small><a href="<? get_year_link(get_the_date('Y')); ?>" title=""><?php echo get_the_date('d M, Y', $post_id); ?></a></small>

                            <small><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title=""><?php echo get_the_author_meta('display_name'); ?></a></small>
                                <small><a href="#" title=""><i class="bi bi-eye"></i> <?php echo $visit_count; ?></a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a target="__blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $args['post_link']; ?>" class="fb-button btn btn-primary"><i class="bi bi-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a target="__blank" href="https://twitter.com/intent/tweet?url=<?php echo $args['post_link']; ?>" class="tw-button btn btn-primary"><i class="bi bi-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                </ul>
                            </div><!-- end post-sharing -->

                        </div><!-- end title -->
                        <?php if (has_post_thumbnail($post->ID)) : ?>
                        <div class="single-post-media">
                       
                        <?php the_post_thumbnail(); ?>
                            
                        </div><!-- end media -->
                        <?php endif ?>
                        <div class="blog-content">
                            <?php the_content(); ?>
                        </div><!-- end content -->

                        <div class="blog-title-area py-4">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                              <!-- tags -->
									<?php the_tags('<small><a>', '</a> <a>', '</a></small>'); ?>
									<!-- tags -->
                            </div><!-- end meta -->

                          
                        </div><!-- end title -->
                        <?php
							$next_post = get_next_post();
							$previous_post = get_previous_post();
							?>
                        <div class="custombox prevnextpost clearfix my-5">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php if (is_object($previous_post)) : ?>
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="<?php echo get_permalink( $previous_post->ID ); ?>"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between text-right">
                                                   <?php echo get_the_post_thumbnail( $previous_post , 'thumbnail' ); ?>
                                                    <h5 class="mb-1"> <?php echo $previous_post->post_title ; ?>
                                                    </h5>
                                                    <small>Prev Post</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                </div><!-- end col -->

                                <div class="col-lg-6">
                                <?php if (is_object($next_post)) : ?>
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="<?php echo get_permalink( $next_post->ID ); ?>"
                                                class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <?php echo get_the_post_thumbnail( $next_post , 'thumbnai');  ?>
                                                    <h5 class="mb-1"> <?php echo $next_post->post_title ; ?></h5>
                                                    <small>Next Post</small>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                       
                        <?php comments_template( ); ?>
                    </div><!-- end page-wrapper -->
                </div> <!-- end col -->

                <!-- sidebar -->
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                      <?php get_sidebar(  ); ?>
                    </div><!-- end sidebar -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <!-- finish single section -->	

<?php
endwhile;
endif;
get_footer();
