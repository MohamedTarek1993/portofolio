<?php 

if(!function_exists('add_footer_widgets'))
{
    function add_footer_widgets(){
        register_sidebar( array(
            'name'          => 'Footer Col #1',
            'id'            => 'footer_col1',
			'class'         => 'footer-col1',
            'description'   => 'Belongs To footer1',
            'class'         => 'blog-sidebar',
            'before_widget' => '<div id="%1$s" class="_footer_portfolio_cont">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="_footer_portfolio_cont_txt">',
            'after_title'   => '</h6>',
        ) );

        // register_sidebar( array(
        //     'name'          => 'Footer Col #2',
        //     'id'            => 'footer_col2',
		// 	'class'         => 'footer-col2',
        //     'description'   => 'Belongs To footer2',
        //     'class'         => 'blog-sidebar',
        //     'before_widget' => '<div id="%1$s" class="_footer_portfolio_cont">',
        //     'after_widget'  => '</div>',
        //     'before_title'  => '<h6 class="_footer_portfolio_cont_txt">',
        //     'after_title'   => '</h6>',
        // ) );

        // register_sidebar( array(
        //     'name'          => 'Footer Col #3',
        //     'id'            => 'footer_col3',
		// 	'class'         => 'footer-col3',
        //     'description'   => 'Belongs To footer3',
        //     'class'         => 'blog-sidebar',
        //     'before_widget' => '<div id="%1$s" class="_footer_portfolio_cont">',
        //     'after_widget'  => '</div>',
        //     'before_title'  => '<h6 class="_footer_portfolio_cont_txt">',
        //     'after_title'   => '</h6>',
        // ) );
    }

    add_action( 'widgets_init' ,'add_footer_widgets' );
}
