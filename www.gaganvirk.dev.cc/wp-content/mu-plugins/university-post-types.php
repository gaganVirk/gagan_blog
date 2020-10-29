<?php 
function book_post_types() {
	// Event post type
	register_post_type('book', array(
	  'show_in_rest' => true,
	  'supports' => array('title', 'editor', 'thumbnail'),
	  'rewrite'=> array('slug' => 'books'),
	  'has_archive' => true,
	  'public' => true,
	  'labels' => array(
	    'name' => 'Books',
	    'add_new_item' => 'Add New Book',
	    'edit_item' => 'Edit Book',
	    'all_items' => 'All Books',
	    'singular_name' => 'Book'
	  ),
	  'menu_icon' => 'dashicons-calendar'));

	//Professor post type
	register_post_type('professor', array(
	  'show_in_rest' => true,
	  'supports' => array('title', 'editor', 'thumbnail'),
	  'public' => true,
	  'labels' => array(
	    'name' => 'Professors',
	    'add_new_item' => 'Add New Professor',
	    'edit_item' => 'Edit Professor',
	    'all_items' => 'All Professors',
	    'singular_name' => 'Professor'
	  ),
	  'menu_icon' => 'dashicons-welcome-learn-more'));
}

add_action('init', 'book_post_types');

?>
