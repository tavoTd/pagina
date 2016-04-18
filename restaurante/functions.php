<?php
function theme_styles()
{
    wp_enqueue_style('bs_css',get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts','theme_styles');	

function theme_scripts()
{
    wp_enqueue_script('jq',get_template_directory_uri().'/js/jquery.js');
    wp_enqueue_script('bs_js',get_template_directory_uri().'/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts','theme_scripts');	
?>
