<?php
  function remove_page_attribute_meta_box() {
    remove_meta_box('pageparentdiv', 'page', 'normal');
  }
  add_action('admin_menu', 'remove_page_attribute_meta_box');

  function remove_editor_from_post_type() {
    remove_post_type_support( 'page', 'editor' );
  }
  add_action('init', 'remove_editor_from_post_type');
?>