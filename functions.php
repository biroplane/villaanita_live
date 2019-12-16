<?PHP
add_theme_support( 'post-thumbnails' );

function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Name of Widgetized Area',
'before_widget' => '<div class="widgetizedArea">',
  'after_widget' => '</div>',
'before_title' => '<h3>',
  'after_title' => '</h3>',
)
);

function home_menu(){
  $home_menu = wp_get_nav_menu_items( 'transparent_menu' );
  //print_r($home_menu);
  return $home_menu;
}