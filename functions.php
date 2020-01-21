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

function register_navwalker(){
  require_once get_template_directory() . '/wp_bootstrap_navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function villaanita_custom_logo_setup() {

 $defaults = array(
 'height'      => 50,
 'width'       => 50,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
}
add_theme_support( 'custom-logo');
//add_action( 'before_setup_theme', 'villaanita_custom_logo_setup' );


// function home_menu(){
//   return "Ciao";
// }
?>