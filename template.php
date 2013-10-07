<?php

/*
 * HTML
 */

  function falcor_preprocess_html(&$variables) {
    if(drupal_is_front_page()) {
      $variables['head_title'] = $variables['head_title_array']['name'];
    }
  }

  function falcor_process_html(&$variables) {
    global $theme_path;
    
    // Constructing some resources for the <head>
    $html5head  = '<meta charset="utf-8">'.PHP_EOL;
    $html5head .= '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">'.PHP_EOL;
    $html5head .= '<link rel="shortcut icon" href="/'.$theme_path.'/favicon.ico?v=2">'.PHP_EOL;
    $html5head .= '<link rel="apple-touch-icon" href="/'.$theme_path.'/apple-touch-icon.png">'.PHP_EOL;
    // Add $html5head to $head since other modules use this (i.e. Meta Tags)
    $variables['head'] .= $html5head;

    // Modernizr
    // http://modernizr.com/
    $variables['modernizr'] = '<script src="/'.$theme_path.'/js/libs/modernizr.min.js"></script>';
  }
  
/*
 * Page
 */
  
  function falcor_preprocess_page(&$variables) {
    global $theme_path;

    // If tabs exist, add some classes to use in templating
    if( !empty($variables['tabs']['#primary']) || !empty($variables['tabs']['#secondary']) ) {
      $variables['tabs_classes'] = 'tabs-container';
    } else {
      $variables['tabs_classes'] = null;
    }
    
  }

/*
 * Regions
 */
  
  function falcor_preprocess_region(&$variables) {

  }

/*
 * Views
 */


/*
 * Blocks
 */
  
  function falcor_preprocess_block(&$variables, $hook) {

    switch($variables['block_html_id']) {
      case 'block-system-main':
        // Use a bare template for the page's main content.
        $variables['theme_hook_suggestions'][] = 'block__bare';
        break;
    }

    $variables['title_attributes_array']['class'][] = 'block__title';
  }

  function falcor_process_block(&$variables, $hook) {

    // Drupal 7 should use a $title variable instead of $block->subject.
    $variables['title'] = $variables['block']->subject;
  }

/*
 * Nodes
 */

  function falcor_preprocess_node($variables) {
    global $theme_path;
    $node_type = $variables['type'];

    $variables['submitted'] = t('@date', array('@date' => date("l, M jS, Y", $variables['created']) ) );
  }

/*
 * Terms
 */

  function falcor_preprocess_taxonomy_term(&$variables) {

  }

/*
 * Forms
 */


/*
 * Menus
 */

  function falcor_menu_tree__main_menu(&$variables) {
    return '<ul class="nav">' . $variables['tree'] . '</ul>';
  }

  function falcor_menu_link($variables) {
    $element = $variables['element'];

    $sub_menu = $element['#below'] ? drupal_render($element['#below']) : '';
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);

    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . '</li>';
  }

/* 
 * Links
 */