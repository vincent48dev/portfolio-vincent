<?php 

/** Ajouter un menu à son site */
function register_my_menu(){
  register_nav_menu( 'main-menu', 'Menu principal' );
}
add_action( 'after_setup_theme', 'register_my_menu' );

/**brief4 

function velo_register_post_types(){
  //CPT velo
  $labels = array(
    'name'=> 'Vélo',
    'all_items'=> 'tous les vélos',
    'singular_name'=>'vélo',
    'add_new_items'=> 'ajouter un vélo',
    'edit_item'=> 'modifier le vélo',
    'menu_name'=> 'Vélo',

  );

  $args = array(
    'labels'=> $labels,
    'public'=> true,
    'show_in_rest'=> true,
    'has_archive'=> true,
    'supports'=> array('title','editor','thumbnail'),
    'menu_position'=> 20,
    'menu_icon'=> 'dashicons_admin_customizer',

  );

  //déclaration du post type
  register_post_type('velo', $args);

  //Déclaration de la taxonomie
  $labels = array(
    'name'=> 'Marque de vélos',
    'new_item_name' =>'Nom de la marque',
    'parent_item'=> 'Marques de vélos parents',
  );
  
  $args = array(
    'labels'=> $labels,
    'public'=> true,
    'show_in_rest'=> true,
    'hierarchical'=> true,
  );
  register_taxonomy('marque_de_velos','velo', $args);

}
//déclenchememt de la fonction dans le hook init
add_action('init','velo_register_post_types');

*/

function apprenants_2_register_post_types(){
  //cpt apprenants
  $labels = array(
    'name'=> 'Apprenants-2',
    'all_items'=> 'tous les apprenants-2',
    'singular_name'=> 'Apprenant-2',
    'add_new_item'=> 'Ajouter un apprenant',
    'edith_item'=>'modifier apprenant',
    'menu_name'=>'Apprenants-2',
  );

  $args = array(
    'labels'=>$labels,
    'public'=> true,
    'show_in_rest'=> true,
    'has_archive'=> true,
    'support'=> array('title','editor','thumbnail'),
    'menu_position'=> 20,
    'menu_icon'=> 'dashicons-admin-customizer',
    
  );
  register_post_type('apprenants_2',$args);

  //déclaration de la taxonomie

  $labels=array(
    'name'=> 'Formation',
    'new_item_name'=> 'intitulé formation',
    'parent_item'=> 'formation parent',
  );

  $args = array(
    'labels'=>$labels,
    'public'=> true,
    'show_in_rest'=> true,
    'hierarchical'=> true,

  );
  register_taxonomy('formation2','apprenants_2',$args);

  $labels=array(
    'name'=> 'Promotion',
    'new_item_name'=> 'année promotion',
    'parent_item'=> 'promotion parent',
  );

  $args = array(
    'labels'=>$labels,
    'public'=> true,
    'show_in_rest'=> true,
    'hierarchical'=> true,

  );
  register_taxonomy('promotion2','apprenants_2',$args);

  $labels=array(
    'name'=> 'Compétences',
    'new_item_name'=> 'intitulé compétences',
    'parent_item'=> 'compétence parent',
  );

  $args = array(
    'labels'=>$labels,
    'public'=> true,
    'show_in_rest'=> true,
    'hierarchical'=> true,

  );
  register_taxonomy('competences2','apprenants_2',$args);
}
add_action('init','apprenants_2_register_post_types');


?>
<?php
        wp_enqueue_script(
            'monjs',
            get_template_directory_uri(). '/js/script.js'
        )
?>

