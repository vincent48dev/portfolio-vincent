<?php 

/** Ajouter un menu à son site */
function register_my_menu(){
  register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );


?>
<?php
        wp_enqueue_script(
            'monjs',
            get_template_directory_uri(). '/js/script.js'
        )
?>