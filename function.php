<?php
function code_data(){
    wr_enqueue_style('coding_is_fun_styles',get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','code_data');
function pagetitle(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','pagetitle');



?>