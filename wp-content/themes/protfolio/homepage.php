<?php

/**
 * Template Name: Home
 * The template for displaying the main page
 *
 * 
 *
 */
get_header();
?>
<!-- hero section -->
<div class="_header_portfolio_content_wrap">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
				<div class="_header_portfolio_contents">
					<div class="_header_portfolio_content">
						<h6 class="_header_portfolio_content_txt1"><?php echo the_field('sub-title-hero'); ?></h6>
						<h1 class="_header_portfolio_content_txt2"><?php echo the_field('title-hero'); ?></h1>
						<p class="_header_portfolio_content_para"><?php echo the_field('Desc-hero'); ?></p>
					</div>
					<div class="_header_portfolio_content_btns">
						<div class="_header_portfolio_content_btn1">
							<a href="tel:<?php echo the_field('phone_number'); ?>" class="_header_portfolio_content_btn1_contact">Contact Me</a>
						</div>
						<div class="_header_portfolio_content_btn2">
							<?php $cv_url = get_field('download_cv'); ?>
							<a href="<?php echo $cv_url ?>" attributes-list class="_header_portfolio_content_btn2_download">Download CV
								<span class="_header_portfolio_content_btn1_ic">
									<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 14 14">
										<path stroke="#130F26" stroke-linecap="round" stroke-linejoin="round" d="M6.92 8.86V.834M8.864 6.91L6.92 8.862 4.976 6.91" />
										<path stroke="#130F26" stroke-linecap="round" stroke-linejoin="round" d="M9.914 3.84c2.386.22 3.253 1.112 3.253 4.666 0 4.733-1.54 4.733-6.167 4.733s-6.166 0-6.166-4.733c0-3.554.866-4.447 3.253-4.667" />
									</svg>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
				<div class="_header_portfolio_content_r8">
					<?php $img_hero = get_field('img_hero'); ?>
					<img src="<?php echo $img_hero['url']; ?>" alt="<?php echo $img_hero['alt']; ?>" class="_header_portfolio_content_r8_img">
				</div>
			</div>
		</div>
	</div>
</div>


<!--about us portfolio wrapper -->
<?php
$about_title = get_field('about_title');
$about_desc = get_field('about_desc');
$about_email = get_field('about_email');
?>

<section class="_about_us_portfolio_wrapper" id="about">
	<div class="_about_us_portfolio_wrap">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
					<div class="_about_us_portfolio_head_txt">
						<h2 class="_about_us_portfolio_head_txt1"> <?php echo $about_title; ?></h2>
					</div>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 ms-auto">
					<div class="_about_us_portfolio_head_cont">
						<?php echo $about_desc; ?>
						<p class="_about_us_portfolio_head_cont_para1"><?php echo $about_email; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--about us portfolio wrapper -->


<!--services prof wrapper-->
<section class="_services_prof_wrapper" id="service">
	<div class="_services_prof_wrap">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 col-lg-5 col-md-12">
					<div class="_services_prof_lft_wrap">
						<h3 class="_header_portfolio_content_txt2"><?php the_field('service-title') ?></h3>
						<p class="_header_portfolio_content_para">
							<?php the_field('service-desc'); ?>
						</p>

					</div>
				</div>
				<div class="col-xl-7 col-lg-7 col-md-12">
					<div class="_services_prof_r8_wrap">
						<div class="row align-items-center">
							<div class="col-xl-6 col-lg-6 col-md-6">
								<?php
								$service_card1_head = get_field('service_card1_head');
								$service_card1_desc = get_field('service_card1_desc');
								$service_card2_head = get_field('service_card2_head');
								$service_card2_desc = get_field('service_card2_desc');
								$service_card3_head = get_field('service_card3_head');
								$service_card3_desc = get_field('service_card3_desc');

								?>
								<div class="_services_prof_crd_wrap">
									<div class="_services_prof_crd_ic">
										<i class="bi bi-file-earmark-slides"></i>
									</div>
									<div class="_services_prof_crd_cont">
										<h5 class="_services_prof_crd_cont_t"><?php echo  $service_card1_head; ?></h5>
										<p class="_services_prof_crd_cont_p"><?php echo  $service_card1_desc; ?></p>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="_services_prof_crd_wrap1">
									<div class="_services_prof_crd_ic">
										<i class="bi bi-wordpress"></i>
									</div>
									<div class="_services_prof_crd_cont">
										<h5 class="_services_prof_crd_cont_t"><?php echo  $service_card2_head; ?> </h5>
										<p class="_services_prof_crd_cont_p"><?php echo  $service_card2_desc; ?></p>
									</div>
								</div>
								<div class="_services_prof_crd_wrap2">
									<div class="_services_prof_crd_ic">
										<i class="bi bi-filetype-html"></i>
									</div>
									<div class="_services_prof_crd_cont">
										<h5 class="_services_prof_crd_cont_t"><?php echo  $service_card3_head; ?></h5>
										<p class="_services_prof_crd_cont_p"><?php echo  $service_card3_desc; ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--services prof wrapper end-->


<!--counter-->
<section class="counter-rang">
	<div class="container">
		<div class="boxes">
			<?php $loop = new WP_Query(array(
				'post_type' => 'counter',
				'orderby' => 'post_id',
				'order' => 'ASC'
			)); ?>
			<?php while ($loop->have_posts()) : $loop->the_post();
				$head_count = get_field('head_count');
				$number_count = get_field('number_count');
			?>
				<div class="box">
					<i class="bi bi-plus-lg"></i>
					<div class="counter" data-target="<?php echo $number_count; ?>"> </div>
					<h4 class="head-categ"><?php echo $head_count ?> </h4>
				</div>
			<?php endwhile;
			wp_reset_query(); ?>

		</div>


	</div>
</section>


<!-- skills section -->
<section id="skill-section">
	<h2 class="_blog_portfolio_head_txt1">Skills</h2>
	<div class="container">
		<?php $loop = new WP_Query(array(
			'post_type' => 'skills',
			'orderby' => 'post_id',
			'posts_per_page' => -1,
			'order' => 'ASC'
		));
		while ($loop->have_posts()) : $loop->the_post();
			$skill_number = get_field('skill_number');

		?>
			<p><?php the_title(); ?></p>
			<div class="progress">
				<div class="progress-bar" data-progress="<?php echo $skill_number; ?>">
					<span> <?php echo $skill_number; ?>%</span>
				</div>
			</div>
		<?php endwhile;
		wp_reset_query(); ?>
	</div>

</section>

<!--experience prof wrapper-->
<section class="_experience_prof_wrapper">
	<div class="_experience_prof_wrap">
		<?php $loop = new WP_Query(array(
			'post_type' => 'experience',
			'orderby' => 'post_id',
			'posts_per_page' => -1,
			'order' => 'ASC'
		));
		while ($loop->have_posts()) : $loop->the_post();
			$company_name_exp = get_field('company_name_exp');
			$date_start_exp = get_field('date_start_exp');
			$date_finish_exp = get_field('date_finish_exp');
			$position_exp = get_field('position_exp');
			$positon_desc = get_field('positon_desc');
			$color_hint_exp = get_field('color_hint_exp');
			$image_hint_exp = get_field('image_hint_exp');
		?>
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="_experience_prof_cont_warp">
							<h3 class="_header_portfolio_content_txt2">My Work Experience</h3>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12">
						<div class="_experience_prof_lft_wrap">
							<div class="_experience_prof_lft_card">
								<h5 class="_experience_prof_lft_card_t"><?php echo $company_name_exp; ?></h5>
								<p class="_experience_prof_lft_card_p"><?php echo $date_start_exp; ?> - <?php echo $date_finish_exp; ?></p>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12">
						<div class="_experience_prof_r8_wrap">
							<div class="_experience_prof_r8_card">
								<span class="_experience_prof_lft_card_sp">
									<img src="<?php echo $image_hint_exp['url']; ?>" alt="icon" class="_experience_prof_lft_card_sp_ic">
								</span>
								<div class="_experience_prof_r8_card_ic">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="none" viewBox="0 0 26 26">
										<circle cx="13" cy="13" r="13" fill="<?php echo $color_hint_exp; ?>" />
									</svg>
								</div>
								<div class="_experience_prof_r8_card_cnt">
									<h4 class="_experience_prof_r8_card_t"><?php echo $position_exp; ?></h4>
									<p class="_experience_prof_r8_card_p"><?php echo $positon_desc; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile;
		wp_reset_query(); ?>
	</div>
</section>
<!--experience prof wrapper end-->

<!--portfolio wrapper wrapper -->
<section class="_blog_portfolio_wrapper">
	<div class="_blog_portfolio_wrap">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="_blog_portfolio_head">
						<div class="_blog_portfolio_head_txt">
							<h3 class="_blog_portfolio_head_txt1"><?php the_field('protfolio_title'); ?></h3>
							<p class="_blog_portfolio_head_cont"><?php the_field('portfolio_desc'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="_portfolio_slider">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="_blog_portfolio_slider_btn">
							<div class="glide__arrows" data-glide-el="controls">
								<button class="glide__arrow glide__arrow--left _prev_arrow" data-glide-dir="<">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
										<path fill="#F64D5E" fill-rule="evenodd" d="M10.7.527a1.93 1.93 0 00-2.65 0l-7.5 7.2a1.75 1.75 0 000 2.546l7.5 7.2a1.93 1.93 0 002.65 0 1.75 1.75 0 000-2.546L6.403 10.8h21.723C29.16 10.8 30 9.994 30 9s-.84-1.8-1.875-1.8H6.402L10.7 3.073a1.75 1.75 0 000-2.546z" clip-rule="evenodd" opacity=".3" />
									</svg>
								</button>
								<button class="glide__arrow glide__arrow--right _next_arrow" data-glide-dir=">">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
										<path fill="#F64D5E" fill-rule="evenodd" d="M19.3.527a1.93 1.93 0 012.65 0l7.5 7.2a1.75 1.75 0 010 2.546l-7.5 7.2a1.93 1.93 0 01-2.65 0 1.75 1.75 0 010-2.546l4.298-4.127H1.875C.839 10.8 0 9.994 0 9s.84-1.8 1.875-1.8h21.723L19.3 3.073a1.75 1.75 0 010-2.546z" clip-rule="evenodd" opacity=".3" />
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="glide__track" data-glide-el="track">
					<div class="row glide__slides">
						

<?php $loop = new WP_Query(array(
	'post_type' => 'project',
	'orderby' => 'post_id',
	'posts_per_page' => -1,
	'order' => 'ASC'
));
while ($loop->have_posts()) : $loop->the_post();
?>
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="_blog_portfolio_card glide__slide">
										<div class="_blog_portfolio_card_inner">
											<div class="_blog_portfolio_card_img">
												<img src="<?php echo the_post_thumbnail_url(); ?>" alt="image" class="_blog_portfolio_card_ic">
											</div>
											<div class="_blog_portfolio_card_content">
												<h6 class="_blog_portfolio_card_content_txt1">
													<span class="_blog_portfolio_card_content_span">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
															<path fill="#FF6879" fill-rule="evenodd" d="M3 16.87V9.257h18v7.674C21 20.07 19.024 22 15.863 22H8.127C4.996 22 3 20.03 3 16.87zm4.96-2.46a.822.822 0 01-.85-.799c0-.46.355-.84.81-.861.444 0 .81.351.82.8a.822.822 0 01-.78.86zm4.06 0a.822.822 0 01-.85-.799c0-.46.356-.84.81-.861.445 0 .81.351.82.8a.822.822 0 01-.78.86zm4.03 3.68a.847.847 0 01-.82-.85.831.831 0 01.81-.849h.01c.465 0 .84.38.84.849 0 .47-.375.85-.84.85zm-4.88-.85c.02.46.395.821.85.8a.821.821 0 00.78-.859.817.817 0 00-.82-.801.855.855 0 00-.81.86zm-4.07 0c.02.46.395.821.85.8a.821.821 0 00.78-.859.817.817 0 00-.82-.801.855.855 0 00-.81.86zm8.14-3.639c0-.46.356-.83.81-.84.445 0 .8.359.82.8a.82.82 0 01-.79.849.814.814 0 01-.84-.799v-.01z" clip-rule="evenodd" />
															<path fill="#FF6879" d="M3.003 9.257c.013-.587.063-1.752.155-2.127.475-2.11 2.085-3.45 4.387-3.64h8.91c2.283.2 3.913 1.55 4.387 3.64.092.365.142 1.539.154 2.127H3.003z" opacity=".4" />
															<path fill="#F64D5E" d="M8.305 6.59c.435 0 .76-.329.76-.77V2.771A.748.748 0 008.306 2c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77zM15.695 6.59c.425 0 .76-.329.76-.77V2.771a.754.754 0 00-.76-.771c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77z" />
														</svg>
													</span>
													<?php echo get_the_date('M d Y') ?>
												</h6>
												<h5 class="_blog_portfolio_card_content_txt2"><?php the_title(); ?></h5>
												<p class="_blog_portfolio_card_content_para"><?php echo get_the_excerpt(); ?> </p>
												<div class="_blog_portfolio_card_content_btns">
													<a href="<?php the_permalink(); ?>" class="_blog_portfolio_card_content_btn">READ MORE</a>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php endwhile;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12 xol-lg-12 col-md-12 col-sm-12">
			<div class="_feature_portfolio_card_links">
				<?php $project_url = get_field('protfolio_link_button'); ?>
				<a href="<?php echo $project_url ?>" class="_feature_portfolio_card_link"><?php the_field('protfolio_name_button'); ?></a>
			</div>
		</div>
	</div>
</section>

<!--portfolio wrapper end-->


<!---blog portfolio wrapper -->
<section class="_blog_portfolio_wrapper">
	<div class="_blog_portfolio_wrap">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
					<div class="_blog_portfolio_head">
						<div class="_blog_portfolio_head_txt">
							<h3 class="_blog_portfolio_head_txt1"><?php the_field('title_blog'); ?></h3>
							<p class="_blog_portfolio_head_cont"><?php the_field('desc_blog'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="_blog_slider">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						<div class="_blog_portfolio_slider_btn">
							<div class="glide__arrows" data-glide-el="controls">
								<button class="glide__arrow glide__arrow--left _prev_arrow" data-glide-dir="<">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
										<path fill="#F64D5E" fill-rule="evenodd" d="M10.7.527a1.93 1.93 0 00-2.65 0l-7.5 7.2a1.75 1.75 0 000 2.546l7.5 7.2a1.93 1.93 0 002.65 0 1.75 1.75 0 000-2.546L6.403 10.8h21.723C29.16 10.8 30 9.994 30 9s-.84-1.8-1.875-1.8H6.402L10.7 3.073a1.75 1.75 0 000-2.546z" clip-rule="evenodd" opacity=".3" />
									</svg>
								</button>
								<button class="glide__arrow glide__arrow--right _next_arrow" data-glide-dir=">">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
										<path fill="#F64D5E" fill-rule="evenodd" d="M19.3.527a1.93 1.93 0 012.65 0l7.5 7.2a1.75 1.75 0 010 2.546l-7.5 7.2a1.93 1.93 0 01-2.65 0 1.75 1.75 0 010-2.546l4.298-4.127H1.875C.839 10.8 0 9.994 0 9s.84-1.8 1.875-1.8h21.723L19.3 3.073a1.75 1.75 0 010-2.546z" clip-rule="evenodd" opacity=".3" />
									</svg>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="glide__track" data-glide-el="track">
					<div class="row glide__slides">
						<?php

						$args_post	 = array(
							'post_type' => 'post',
							'orderby'   => 'date',
							'posts_per_page' => -1,
							'order'  => 'desc',
						);
						$the_post = new WP_Query('$args_post');
						if ($the_post->have_posts()) :
							while ($the_post->have_posts()) : $the_post->the_post();
						?>
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
									<div class="_blog_portfolio_card glide__slide">
										<div class="_blog_portfolio_card_inner">
											<div class="_blog_portfolio_card_img">
												<img src="<?php echo the_post_thumbnail_url(); ?>" alt="image" class="_blog_portfolio_card_ic">
											</div>
											<div class="_blog_portfolio_card_content">
												<h6 class="_blog_portfolio_card_content_txt1">
													<span class="_blog_portfolio_card_content_span">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
															<path fill="#FF6879" fill-rule="evenodd" d="M3 16.87V9.257h18v7.674C21 20.07 19.024 22 15.863 22H8.127C4.996 22 3 20.03 3 16.87zm4.96-2.46a.822.822 0 01-.85-.799c0-.46.355-.84.81-.861.444 0 .81.351.82.8a.822.822 0 01-.78.86zm4.06 0a.822.822 0 01-.85-.799c0-.46.356-.84.81-.861.445 0 .81.351.82.8a.822.822 0 01-.78.86zm4.03 3.68a.847.847 0 01-.82-.85.831.831 0 01.81-.849h.01c.465 0 .84.38.84.849 0 .47-.375.85-.84.85zm-4.88-.85c.02.46.395.821.85.8a.821.821 0 00.78-.859.817.817 0 00-.82-.801.855.855 0 00-.81.86zm-4.07 0c.02.46.395.821.85.8a.821.821 0 00.78-.859.817.817 0 00-.82-.801.855.855 0 00-.81.86zm8.14-3.639c0-.46.356-.83.81-.84.445 0 .8.359.82.8a.82.82 0 01-.79.849.814.814 0 01-.84-.799v-.01z" clip-rule="evenodd" />
															<path fill="#FF6879" d="M3.003 9.257c.013-.587.063-1.752.155-2.127.475-2.11 2.085-3.45 4.387-3.64h8.91c2.283.2 3.913 1.55 4.387 3.64.092.365.142 1.539.154 2.127H3.003z" opacity=".4" />
															<path fill="#F64D5E" d="M8.305 6.59c.435 0 .76-.329.76-.77V2.771A.748.748 0 008.306 2c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77zM15.695 6.59c.425 0 .76-.329.76-.77V2.771a.754.754 0 00-.76-.771c-.435 0-.76.33-.76.771V5.82c0 .441.325.77.76.77z" />
														</svg>
													</span>
													<?php echo get_the_date('M d Y') ?>
												</h6>
												<h5 class="_blog_portfolio_card_content_txt2"><?php the_title(); ?></h5>
												<p class="_blog_portfolio_card_content_para"><?php echo get_the_excerpt(); ?> </p>
												<div class="_blog_portfolio_card_content_btns">
													<a href="<?php the_permalink(); ?>" class="_blog_portfolio_card_content_btn">READ MORE</a>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php endwhile;
						endif;
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12 xol-lg-12 col-md-12 col-sm-12">
			<div class="_feature_portfolio_card_links">
				<?php $blog_url = get_field('link_know_more'); ?>
				<a href="<?php echo $blog_url ?>" class="_feature_portfolio_card_link"><?php the_field('button_blog_text'); ?></a>
			</div>
		</div>
	</div>
</section>
<!---blog portfolio wrapper end -->

<!--newsletter portfolio wrapper -->
<section class="_newsletter_portfolio_wrapper" id="contact">
	<div class="_newsletter_portfolio_wrap">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

					<div class="_newsletter_portfolio_bg" style="background-color: <?php the_field('background_color'); ?>;">
						<div class="_newsletter_portfolio_bg_shape">
							<?php $newsletter_img = get_field('img_newsletter'); ?>
							<img src="<?php echo $newsletter_img['url'];  ?>" alt="image" class="_newsletter_portfolio_bg_shape_img">
						</div>
						<div class="row align-items-center">
							<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
								<div class="_newsletter_portfolio_left">
									<h3 class="_newsletter_portfolio_left_txt"><?php the_field('title_newsellter'); ?></h3>
								</div>
							</div>
							<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
								<div class="_newsletter_portfolio_r8">
									<a href="tel:<?php the_field('telephone_number'); ?>" class="_newsletter_portfolio_r8_btn"><?php the_field('sub_title_newsellter_copy'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--newsletter portfolio wrapper end -->



<?php
get_footer();
?>
<script>
	 
let config = {
    type: 'carousel',
    perView: 3,
    breakpoints: {
        767: {
            perView: 1
        },
        992: {
            perView: 2
        }
    }
};
new Glide('._blog_slider', config).mount();
</script>

<script>
// slider Protfolio
let config1 = {
    type: 'carousel',
    perView: 3,

    breakpoints: {
        767: {
            perView:1,
            
        },
        992: {
            perView:2
        }
    }
};
new Glide('._portfolio_slider', config1).mount();
 </script>

 <script>

const skillsSection = document.getElementById('skill-section');
const progressBar = document.querySelectorAll('.progress-bar');


function showProgress() {
    progressBar.forEach(progressBars=> {
     const value = progressBars.dataset.progress ;
     progressBars.style.opacity = 1;
     progressBars.style.width = `${value}%`;
    });
  }
//hide heading
  function hideProgress(){
    progressBar.forEach(p => {
      p.style.opacity = 0 ;
      p.style.width = 0;
    })
  }
//make function when scroll
window.addEventListener('scroll', () => {
  const sectionPos = skillsSection.getBoundingClientRect().top;
  const screenPos = window.innerHeight / 2;      
  if (sectionPos < screenPos) {
    showProgress();
  } else {
    hideProgress();
  }
});

 </script>
