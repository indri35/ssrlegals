<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
	function azkia_menu_tree__secondary(&$variables) {
  		return '<ul class="menu nav navbar-nav secondary navbar-right">' . $variables['tree'] . '</ul>';
	}
	function azkia_preprocess_html(&$variables) {
        drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array('type' => 'external'));
    }
?>
