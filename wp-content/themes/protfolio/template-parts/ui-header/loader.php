<?php
 /**
 * 
 * The belomgs to loader in header page
 *
 */
$loop = new WP_Query(array(
	'post_type' => 'loader', 
	 )); ?>
<?php while ($loop->have_posts()) : $loop->the_post();
$loader_background_image = get_field('loader_background_image');
$loader_background_color =get_field('loader_background_color');
?>

<div id="preloader" style="background-color:<?php echo $loader_background_color ;?> ; background-image:url(<?php echo $loader_background_image ;?>);"></div> 

<?php 
  endwhile;
  wp_reset_query(); 
  ?>