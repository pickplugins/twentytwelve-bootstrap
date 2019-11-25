<?php

if ( ! defined('ABSPATH')) exit;  // if direct access

if ( ! function_exists( 'PickPlugins_color_theme' ) ) :

function PickPlugins_color_theme(){

	$header_bg_color = get_theme_mod('header_bg_color');
	$header_text_color = get_theme_mod('header_text_color');
	$header_link_color = get_theme_mod('header_link_color');

	$footer_bg_color = get_theme_mod('footer_bg_color');
	$footer_text_color = get_theme_mod('footer_text_color');
	$footer_link_color = get_theme_mod('footer_link_color');
//
//	$site_wrapper_width = get_theme_mod('site_wrapper_width');
//	$site_wrapper_bg_color = get_theme_mod('site_wrapper_bg_color');
//	$container_width = get_theme_mod('container_width');


    ?>

	<style type="text/css">
        .site-header{
            <?php if(!empty($header_bg_color)):?>
            background-color: <?php echo esc_attr($header_bg_color); ?>;
            <?php endif; ?>

            <?php if(!empty($header_text_color)):?>
            color: <?php echo esc_attr($header_text_color); ?>;
            <?php endif; ?>
        }

        .site-header p{
            <?php if(!empty($header_text_color)):?>
            color: <?php echo esc_attr($header_text_color); ?>;
            <?php endif; ?>
        }

        .site-header a{
            <?php if(!empty($header_link_color)):?>
            color: <?php echo esc_attr($header_link_color); ?> !important;
            <?php endif; ?>
        }

        .main-navigation li ul li a, .main-navigation li ul li a:hover, .main-navigation li ul li a:focus{
        <?php if(!empty($header_bg_color)):?>
            background-color: <?php echo esc_attr($header_bg_color); ?>;
        <?php endif; ?>
        }





        .site-footer{
            <?php if(!empty($footer_bg_color)):?>
            background-color: <?php echo esc_attr($footer_bg_color); ?>;
            <?php endif; ?>

        <?php if(!empty($footer_text_color)):?>
            color: <?php echo esc_attr($footer_text_color); ?>;
            <?php endif; ?>
        }

        .site-footer p,  .site-footer .widget-title{
            <?php if(!empty($footer_text_color)):?>
            color: <?php echo esc_attr($footer_text_color); ?>;
            <?php endif; ?>
        }

        .site-footer a{
            <?php if(!empty($footer_link_color)):?>
            color: <?php echo esc_attr($footer_link_color); ?> !important;
            <?php endif; ?>
        }
        /**/
        /**/
        /*.site-wrapper{*/
        /*    */<?php //if(!empty($site_wrapper_width)):?>
        /*    width: */<?php //echo esc_attr($site_wrapper_width); ?>/* !important;*/
        /*    */<?php //endif; ?>
        <!---->
        <!--    --><?php //if(!empty($site_wrapper_bg_color)):?>
        /*    background-color: */<?php //echo esc_attr($site_wrapper_bg_color); ?>/*;*/
        /*    */<?php //endif; ?>
        /*    margin: 0 auto;*/
        /*}*/
        /**/
        /**/
        /*.container{*/
        /*    */<?php //if(!empty($container_width)):?>
        /*    width: */<?php //echo esc_attr($container_width); ?>/* !important;*/
        /*    */<?php //endif; ?>
        /*}*/
        /**/
        /*.menu .sub-menu:before , .menu .sub-menu:after{*/
        /*    border-bottom-color: */<?php //echo esc_attr($header_bg_color); ?>/*;*/
        /*}*/
        /**/
        /*.slicknav_nav{*/
        /*    background-color: */<?php //echo esc_attr($header_bg_color); ?>/*;*/
        /*}*/
        /**/
        /*.menu .sub-menu, .menu .children {*/
        /*    background-color: */<?php //echo esc_attr($header_bg_color); ?>/*;*/
        /*}*/
        /*ul.menu ul a, .menu ul ul li a {*/
        /**/
        /*    border-top: 1px solid */<?php //echo esc_attr($header_bg_color); ?>/*;*/
        /*}*/
        /**/
        /**/
        /*.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .btn-primary{*/
        /*    background-color: */<?php //echo esc_attr($header_bg_color); ?>/*;*/
        /*}*/
        /*.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{*/
        /*    background-color: */<?php //echo esc_attr($header_bg_color); ?>/*;*/
        /*    opacity: 0.8;*/
        /*}*/
        /**/
        /**/
        /**/
        /*.btn-primary, .btn-secondary{*/
        /*    background-color: */<?php //echo esc_attr($header_bg_color); ?>/*;*/
        /*    border-color:rgba(0,0,0,0);*/
        /*}*/

	</style>
<?php
}
add_action('wp_head', 'PickPlugins_color_theme');

endif;
