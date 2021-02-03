<?php
  function remove_page_attribute_meta_box() {
    remove_meta_box('pageparentdiv', 'page', 'normal');
  }

  add_action('admin_menu', 'remove_page_attribute_meta_box');
?>