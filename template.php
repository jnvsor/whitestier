<?php
/**
 * @file
 * this is a template file
 */

/**
 * This is for maintenance page.
 *
 * Implements hook_preprocess_HOOK()
 *
 * The name of the template being rendered ("maintenance_page" in this case.)
 */
function whitestier_preprocess_maintenance_page(&$variables) {
  if (!$variables['db_is_active']) {
    unset($variables['site_name']);
  }
  drupal_add_css(drupal_get_path('theme', 'whitestier') . '/styles/maintenance.css');
}

/**
* Implements hook_menu_local_tasks_alter()
*/
function whitestier_menu_local_tasks_alter(&$data, $router_item, $root_path) {
// If we're at the forum base or in a container remove the new forum post link
  if( $root_path == "forum" ||
      (
	$root_path == "forum/%" && isset($router_item['page_arguments'][0]->container)
      )
    ){
      unset($data['actions']['output']['forum']);
  }
}

/**
 * Implements template_preprocess_node()
 */
function whitestier_preprocess_node(&$vars){
  $vars['submitted'] = t('published by !username on !datetime',
        array('!username' => $vars['name'], '!datetime' => $vars['date']));
}
