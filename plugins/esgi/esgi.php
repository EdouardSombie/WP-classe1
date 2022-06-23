<?php
/*
Plugin Name: Plugin ESGI
Plugin URI: https://esgi.fr
Description: Module WP
Author: ESGI team
Author URI: https://esgi.fr
Version: 1.0.0
*/


function esgi_custom_post_type() {
    $labels = [
	 'name' => __( 'Projets' ),
	 'singular_name' => __( 'Projet' ),
	 'all_items' => __( 'Tous les Projets' ),
	 'add_new' => _x( 'Ajouter un Projet', 'Projets' ),
	 'add_new_item' => __( 'Ajouter un Projet' ),
	 'edit_item' => __( 'Modifier un Projet' ),
	 'new_item' => __( 'Nouveaux Projets' ),
	 'view_item' => __( 'Voir le Projet' ),
	 'search_items' => __( 'Rechercher parmi les Projets' ),
	 'not_found' => __( 'Aucun Projet trouvé' ),
	 'not_found_in_trash' => __( 'Aucun Projet trouvé dans la corbeille' ),
	 'parent_item_colon' => ''
	 ];

	$args = [
	 'labels' => $labels,
	 'public' => true,
	 'has_archive' => true, 
	 'menu_icon' => 'dashicons-media-code', //pick one here ~> https://developer.wordpress.org/resource/dashicons/
	 'rewrite' => array( 'slug' => 'project' ),
	 //'taxonomies' => array( 'post_tag' ),
	 'query_var' => true,
	 'menu_position' => 1,
	 'publicly_queryable' => true,
	 'supports' => array( 'thumbnail', 'editor', 'title', 'revisions'),
	 'show_in_rest' => true
	 ];

    register_post_type('esgi_project', $args);

    // Enregistrer la taxonomie
    $labels = [
	 'name' => __( 'Skills' ),
	 'singular_name' => __( 'Skill' ),
	 'all_items' => __( 'Tous les Skills' ),
	 'add_new' => __( 'Ajouter un Skill', 'Skills' ),
	 'add_new_item' => __( 'Ajouter un Skill' ),
	 'edit_item' => __( 'Modifier un Skill' ),
	 'new_item' => __( 'Nouveaux Skills' ),
	 'view_item' => __( 'Voir le Skill' ),
	 'search_items' => __( 'Rechercher parmi les Skills' ),
	 'not_found' => __( 'Aucun Skill trouvé' ),
	 'not_found_in_trash' => __( 'Aucun Skill trouvé dans la corbeille' ),
	 'parent_item_colon' => ''
	 ];

	 $args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => ['slug' => 'skills'],
	);

    register_taxonomy('skills', 'esgi_project', $args);
}
add_action('init', 'esgi_custom_post_type');



