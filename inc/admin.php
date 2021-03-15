<?php
  // Remove 'Page attributes' widget
  function remove_page_attribute_meta_box() {
    remove_meta_box('pageparentdiv', 'page', 'normal');
  }

  add_action('admin_menu', 'remove_page_attribute_meta_box');

  // Remove default editor from pages
  // function remove_editor_from_post_type() {
  //   remove_post_type_support( 'page', 'editor' );
  // }

  // add_action('init', 'remove_editor_from_post_type');

  // Set custom logo for the login screen
  function custom_login_logo() {
?>
    <style type="text/css">
      #login h1 a,
      .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/studio-logo.svg);
      }
    </style>
<?php
  }

  add_action('login_enqueue_scripts', 'custom_login_logo');

  // Add a custom widget to the dashboard
  function custom_dashboard_widgets() {
    global $wp_meta_boxes;
  
    wp_add_dashboard_widget('custom_help_widget', 'Gude!', 'custom_widget');
  }
  
  function custom_widget() {
    echo '<p>Wenn du hier gelandet bist, willst du wahrscheinlich was an der Website ändern. Falls dabei was nicht klappt, meld dich einfach bei uns.</p><ul><li>Mail: <a href="mailto:support@connect2.studio?subject=WordPress%20Support%20('. get_bloginfo('url') .')&body=Hi%2C%20wir%20haben%20folgendes%20Problem%20mit%20unserer%20WordPress%20Seite%3A">support@connect2.studio</a></li></ul></p>';
  }

  add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
?>