<?php 
$post_id = get_the_ID();
$post_link = get_permalink($post_id);
$categories = get_the_terms($post_id , 'category');
?>
<div class="pitem item-w1 item-h1">
<div class="blog-box">
    <div class="post-media">
        <a href="<?php echo $post_link ; ?>" title="">
            <img src="<?php echo get_the_post_thumbnail_url( null, 'blog-img' )?>" alt="" class="img-fluid">
            <div class="hovereffect">
                <span></span>
            </div><!-- end hover -->
        </a>
    </div><!-- end media -->
    <div class="blog-meta">
        
        <?php if(is_array($categories) && count($categories)){
            echo '<span class="bg-grey"><a href="'.get_term_link( $categories[0] ).'" title="">'.$categories[0]->name .'</a></span>';
        } ?>
        <h4 class="blog_title_post"><a href="<?php echo $post_link ; ?>" title=""> <?php the_title() ;?> </a></h4>
        <small><?php the_author_posts_link(  ); ?> </small>
        <small><a href="<? echo get_month_link(get_the_date('Y') , get_the_date('m')); ?>" title=""><?php echo get_the_date('d M, Y'); ?></a></small>
    </div><!-- end meta -->
</div><!-- end blog-box -->
</div>