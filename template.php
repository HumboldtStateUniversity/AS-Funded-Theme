<?php

	
	# loading external stylesheet

	function astemplate_preprocess_html(&$variables) {
		drupal_add_css('http://fonts.googleapis.com/css?family=Alegreya:400,700', array('type' => 'external'));
	}


	# menu tree style navigation
	
	function astemplate_preprocess_page(&$variables) {
		$main_menu_tree = menu_tree_all_data('main-menu', $link = NULL, $max_depth = 3);
		$variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
	}


	# feed icon

	function astemplate_feed_icon($variables) {
	  $text = t('Subscribe to @feed-title', array('@feed-title' => $variables['title']));
	  if ($image = theme('image', array('path' => drupal_get_path('theme', 'astemplate') . '/_/img/rss.png', 'alt' => $text))) {    return l($image, $variables['url'], array('html' => TRUE, 'attributes' => array('class' => array('feed-icon'), 'title' => $text)));
	  }
	}