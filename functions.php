<?php

/**

 * @author Divi Space

 * @copyright 2017

 */

if (!defined('ABSPATH')) die();


function ds_ct_enqueue_parent() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }

function ds_ct_loadjs() {
	wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/ds-script.js',
        array( 'jquery' )
    );
	// wp_enqueue_script( 'fa-pro', 'https://kit.fontawesome.com/cff905c27f.js',
  //       array( 'jquery' )
  //   );
		wp_enqueue_style( 'slick-styles', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array());
    wp_enqueue_style( 'slick-theme-styles', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array());

    wp_enqueue_script( 'slick-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array());


	wp_enqueue_script( 'fontawesome-script', 'https://kit.fontawesome.com/11031dbfde.js', '1', true );
}


add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );
add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );
include('login-editor.php');

remove_action('wp_head', 'wp_generator');

function s21_arrows()
{
	ob_start();
	get_template_part( 'templates/s21_arrows' );
	return ob_get_clean();
}

add_shortcode('s21_arrows', 's21_arrows');

function s21_blocks()
{
	ob_start();
	get_template_part( 'templates/s21_blocks' );
	return ob_get_clean();
}

add_shortcode('s21_blocks', 's21_blocks');
