<!--Adding wordpress resources-->

<?php
/* Adding Default Stylesheet with wp_enqueue*/

function adding_stylesheet(){
    wp_enqueue_style('style',get_stylesheet_uri());  
}

add_action('wp_enqueue_scripts', 'adding_stylesheet'); 

// Navigation Menus

register_nav_menus(array(
'primary' => __( 'Primary Menu'),
'footer' => __( 'Footer Menu'),   

)) ;


?>