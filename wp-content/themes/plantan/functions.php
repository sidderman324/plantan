<?
if(function_exists('register_nav_menus')){
	register_nav_menus(
		array( // создаём любое количество областей

		)
	);
}

add_action( 'init', 'blog' ); // Использовать функцию только внутри хука init
function blog() {
  $labels = array(
    'name' => 'Статья',
    'singular_name' => 'Статья',
    'add_new' => 'Добавить статью',
    'add_new_item' => 'Добавить статью',
    'edit_item' => 'Редактировать статью',
    'new_item' => 'Новая статья',
    'all_items' => 'Все статьи',
    'view_item' => 'Просмотр статей',
    'search_items' => 'Искать статьи',
    'not_found' => 'Статей не найдено',
    'not_found_in_trash' => 'В корзине нет статей',
    'menu_name' => 'Статьи'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'menu_icon' => 'dashicons-analytics',
    'menu_position' => 5,
    'has_archive' => true,
    'show_in_rest' => false,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    'rewrite' => array( 'pages' => true ),
    // 'taxonomies' => array('post_tag','category')
  );
  register_post_type( 'blog', $args);
}


?>
