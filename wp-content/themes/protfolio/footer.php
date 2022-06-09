<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protfolio
 */

?>

<!--footer portfolio wrapper -->
<footer class="_footer_portfolio_wrapper">
	<div class="_footer_portfolio_wrap">
		<div class="container">
			<div class="row">
				<div class=" col-12">
					<div class="_footer_portfolio">
						<div class="_footer_portfolio_shape">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/footer-shape.svg" alt="icon" class="_footer_portfolio_shape_ic">
						</div>
					</div>
					<div class="row">
						<div class=" col-12 mx-auto">
							<div class="row justify-content-center">
								<?php if (is_active_sidebar('footer_col1')) : ?>
									<div class="col-xl-4 col-lg-4 col-md-12 c0l-sm-12">
										<?php dynamic_sidebar('footer_col1') ?>

									</div>
								<?php endif; ?>

								<div class=" col-lg-4 col-md-6 col-sm-12">
									<div class="_footer_portfolio_cont">
										<div class="widget">
											<h6 class="_footer_portfolio_cont_txt">Recent Posts</h6>
											<div class="blog-list-widget">
												<div class="list-group">
													<?php
													$recent_posts = get_posts([
														'numberposts' => 3,
													]);
													foreach ($recent_posts as $post) :
													?>
														<a href="<?php echo get_permalink($post); ?>" class="list-group-item list-group-item-action flex-row align-items-start">
															<div class="w-100 justify-content-between">
																<?php echo get_the_post_thumbnail($post, 'thumbnail', ['class' => 'img-fluid float-left']); ?>
																<h5 class="mb-1"><?php echo $post->post_title; ?></h5>
																<small> <?php echo get_the_date('d M, Y', $post->ID); ?></small>
															</div>
														</a>
													<?php endforeach; ?>

												</div>
											</div><!-- end blog-list -->
										</div><!-- end widget -->
									</div>
								</div>

								<div class=" col-lg-4 col-md-6 col-sm-12">
									<div class="_footer_portfolio_cont">
										<div class="widget">
										<h6 class="_footer_portfolio_cont_txt">Recent projects</h6>
											<div class="blog-list-widget">
												<div class="list-group">

													<?php $loop = new WP_Query(array(
														'post_type' => 'project',
														'orderby' => 'post_id',
														'posts_per_page' => 3,
														'order' => 'ASC'
													));
													while ($loop->have_posts()) : $loop->the_post();
													?>
														<a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action flex-row align-items-start">
															<div class="w-100 justify-content-between">
															<img src="<?Php  echo the_post_thumbnail_url();  ?>" alt="" class="img-fluid float-left">

																<h5 class="mb-1"><?php the_title(); ?></h5>
																<small> <?php echo get_the_date('d M, Y', $loop->ID); ?></small>
															</div>
														</a>
													<?php endwhile;
													wp_reset_postdata();
													?>

												</div>
											</div><!-- end blog-list -->
										</div><!-- end widget -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-11 col-lg-11 col-md-12 col-sm-12 me-auto">
					<div class="_header_logo">

					</div>
					<div class="_footer_portfolio_copyright">
						<p class="_footer_portfolio_copyright_para"><?php echo get_theme_mod('footer_copy_rights', ''); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--footer portfolio wrapper end -->
<!-- <script src="assets/js/glide.min.js"></script>
		<script src="assets/js/custom.js"></script> -->

<?php wp_footer(); ?>

</body>

</html>