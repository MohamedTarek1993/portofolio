<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package protfolio
 */
?>

<div class="widget">
	<h2 class="widget-title">Search</h2>
	<form class="form-inline search-form">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Search on the site">
		</div>
		<button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
	</form>
</div><!-- end widget -->
<div class="widget">
	<h2 class="widget-title">Recent Posts</h2>
	<div class="blog-list-widget">
		<div class="list-group">
			<?php
			$recent_posts = get_posts([
				'numberposts' => 3,
			]);
			foreach ($recent_posts as $post) :
			?>
				<a href="<?php echo get_permalink($post); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
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
<div class="widget">
	<h2 class="widget-title">Popular Categories</h2>
	<div class="link-widget">

		<ul>
			<?php $popular_categories = get_terms([
				'taxonomy' => 'category',
				'orderby' => 'count',
				'order'   => 'DESC',
				'hide_empty' => true
			]);
			if (is_array($popular_categories)) {
				foreach ($popular_categories as $category) {
					echo ' <li><a href="' . get_term_link($category) . '">' . $category->name . ' <span>(' . $category->count . ')</span></a></li>';
				}
			}
			?>


		</ul>
	</div><!-- end link-widget -->
</div><!-- end widget -->