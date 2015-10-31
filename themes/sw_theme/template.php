<?php


function sw_theme_preprocess_page(&$vars) {
    // To display sublinks.
    $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
    $vars['main_menu'] =  $main_menu_tree;
}

function sw_theme_menu_tree__main_menu(&$vars) {
    // To add CSS class to the main menu ul
    return '<ul class="nav primary-nav">' . $vars['tree'] . '</ul>';
}


//function sw_theme_preprocess_page(&$variables) {
//    // Get the entire main menu tree
//    $main_menu_tree = menu_tree_all_data('main-menu', NULL, 3); // Provide max-depth.
//    // Add the rendered output to the $main_menu_expanded variable
//    $variables['main_menu_expanded'] = menu_tree_output($main_menu_tree);
//    if (isset($variables['main_menu'])) {
//        $variables['primary_nav'] = theme('links__system_main_menu', array(
//            'links' => $variables['main_menu'],
//            'attributes' => array(
//                'class' => array('links', 'inline', 'main-menu'),
//            ),
//            'heading' => array(
//                'text' => t('Main menu'),
//                'level' => 'h2',
//                'class' => array('element-invisible'),
//            )
//        ));
//    }
//    else {
//        $variables['primary_nav'] = FALSE;
//    }
//}
//function sw_theme_links($variables) {
//    if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
//        $pid = variable_get('menu_main_links_source', 'main-menu');
//        $tree = menu_tree($pid);
//        return drupal_render($tree);
//    }
//    return theme_links($variables);
//}



/*
function sw_theme_preprocess_page(&$vars, &$form){
  $vars['sw_theme'][] = array();
  $vars['sw_theme']['base_url'] = 'http://localhost/curriculum-decisions/web/';

}

function sw_theme_preprocess_node(&$vars){

  $vars['sw_theme_test'] = "testing to see if this works";
  //dpm($vars['sw2015_test']);
}

function sw_theme_form_alter(&$form, &$form_state, $form_id ){
    if ($form_id == 'search_block_form') {
        $form['actions']['submit'] = array('#type' => 'image_button',
		  '#src' => base_path() . path_to_theme() . '/assets/img/search-icon.png');
    }
}

function sw_theme_home_panel_list($items){

  var_dump($items);
  $content = $items['items'];
  $output = '123';
  /*if (!$content) {
	foreach ($content as $item) {
	  $output .= '<a class="clearfix swActionPanel" href="';
	  $output .= $item['img'];
	  $output .= $item['title'];
	  $output .= '</a>';
	}
	$output .= '</ul>';
  }
  else {
	$output = '<p>' . t('You have not created any content types yet. Go to the <a href="@create-content">content type creation page</a> to add a new content type.', array('@create-content' => url('admin/structure/types/add'))) . '</p>';
  }
  return $output;


}
*/