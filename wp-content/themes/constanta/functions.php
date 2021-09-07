<?php
//Functions EvertonM

//*************URL theme [ get_template_directory_uri() ]
define('SITEPATH', '/wp-content/themes/constanta/');


//************* Login_redirect
function admin_default_page()
{
  return '/wp-admin';
}
add_filter('login_redirect', 'admin_default_page');


//************* Admin Login Logo
function tf_wp_admin_login_logo()
{ ?>
  <style type="text/css">
    #login h1 a {
      background-image: url('<?php echo SITEPATH; ?>assets/img/logo.png');
      background-size: 250px 250px;
      width: 250px;
      height: 250px;
    }
    #login .galogin-powered {
      display: none;
    }
  </style>
<?php }
add_action('login_enqueue_scripts', 'tf_wp_admin_login_logo');


//************* Admin Login Logo Link URL
function tf_wp_admin_login_logo_url()
{
  return home_url();
}
add_filter('login_headerurl', 'tf_wp_admin_login_logo_url');


//************* Admin Login Logo's Title
function tf_wp_admin_login_logo_title($headertext)
{
  $headertext = esc_html__(get_bloginfo('name'), 'plugin-textdomain');
  return $headertext;
}
add_filter('login_headertext', 'tf_wp_admin_login_logo_title');


/************* Hide admin bar for users
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
  if (current_user_can('administrator') || is_admin()) {
    show_admin_bar(false);
  }
}*/

//************* URL from breadcrumbs
function url_active()
{
  return explode("/", $_SERVER['REQUEST_URI']);
}
add_action('url_active', 'url_active');


//************* Remove tags support from posts
function myprefix_unregister_tags()
{
  unregister_taxonomy_for_object_type('post_tag', 'post');
}
add_action('init', 'myprefix_unregister_tags');


//************* Add thumbnails
add_theme_support('post-thumbnails', array('post'));


/************* Add Menu
function register_my_menu()
{
  register_nav_menu('sibgrapi-nav', __('SIBGRAPI NAV'));
  register_nav_menu('sibgrapi-footer1', __('SIBGRAPI FOOTER1'));
  register_nav_menu('sibgrapi-footer2', __('SIBGRAPI FOOTER2'));
}
add_action('init', 'register_my_menu');

/************* Change Menu li id
function my_li_id_handler($id, $item, $args)
{
  if ($item->post_name == "portifolio") $id = "portfolio"; //uma correção
  else $id = $item->post_name;
  return $id;
}
add_filter('nav_menu_item_id', 'my_li_id_handler', 10, 3);

