<?php

/**
 * 
 * The belomgs to stiky header in header page
 *
 */


$loop = new WP_Query(array(   //start loop
    'post_type' => 'stikey_header',
    'orderby' => 'post_id',
    'order' => 'ASC'
));
while ($loop->have_posts()) : $loop->the_post();  //start while condition   
?>
    <div class="stikey-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="social d-flex">


                        <?php
                        $first_icon_class = get_field('first_icon_class');
                        $first_icon_url = get_field('first_icon_url');
                        $second_icon_class = get_field('second_icon_class');
                        $second_icon_url = get_field('second_icon_url');
                        $third_icon_class = get_field('third_icon_class');
                        $third_icon_url = get_field('third_icon_url');
                        $fourth_icon_class = get_field('fourth_icon_class');
                        $fourth_icon_url = get_field('fourth_icon_url');
                        ?>


                        <li> <a target="__blank" href="<?php echo $first_icon_url;  ?>"> <i class="bi <?php echo $first_icon_class; ?>" style="font-size:1.3rem ;"></i></a></li>
                        <li> <a target="__blank" href="<?php echo $second_icon_url;  ?>"><i class="bi <?php echo $second_icon_class; ?> px-3" style="font-size:1.3rem; "></i></a></li>
                        <li> <a target="__blank" href="<?php echo $third_icon_url;  ?>"><i class="bi <?php echo $third_icon_class; ?>" style="font-size:1.3rem; "></i></a></li>
                        <li> <a target="__blank" href="<?php echo $fourth_icon_url;  ?>"><i class="bi <?php echo $fourth_icon_class; ?> px-3" style="font-size:1.3rem; "></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="connection d-flex justify-content-end text-align-center ">
                        <div class="adress ">
                            <?php $email_url = get_field('email_adress'); ?>
                            <a href="mailto:<?php echo $email_url; ?>"> <?php echo $email_url; ?> <i class="bi bi-envelope"></i></a>
                        </div>
                        <div class="adress  ">

                            <a href="tel:<?php the_field('telephone_number'); ?>"> <?php the_field('telephone_number'); ?> <i class="bi bi-telephone"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile; //end while condition
wp_reset_query();  //end loop
?>