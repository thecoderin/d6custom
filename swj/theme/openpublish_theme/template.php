<?php
// $Id: template.php,v 1.1.2.6 2010/08/16 18:38:48 tirdadc Exp $
global $base_url;
function openpublish_theme_theme() {
  return array(
    // The form ID.
    'search_theme_form' => array(
      // Forms always take the form argument.
      'arguments' => array('form' => NULL),
    ),
  );
}

function openpublish_theme_search_theme_form($form) {
  $output = '<div id="search" class="clearfix">';
  unset($form['submit']);
  unset($form['search_theme_form']['#title']);
  $form['submit'] = array(
    '#type' => 'submit',
    '#name' => 'op', 
    '#prefix' => '<div id="top-search-button">',
    '#suffix' => '</div>',
    '#button_type' => 'submit',
    '#value' => t('search'), 
    '#submit' => TRUE,
   
  );
  $output .= drupal_render($form);
  $output .= '</div>';
  return $output;
}

/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return 
 *   a string containing the breadcrumb output.
 */
function openpublish_theme_breadcrumb($breadcrumb) {
  return theme('op_breadcrumb', $breadcrumb);
}


/**
 * Override or insert PHPTemplate variables into the templates.
 */
function openpublish_theme_preprocess_page(&$vars) {
  // Override core Blog module's breadcrumb
  if ($vars['node']->type == 'blog') {
    $breadcrumb = array(
      l(t('Home'), NULL),
      l(t('Blogs'), 'blogs'),
    );
    if ($vars['node']->field_op_author[0]['view']) {
      $breadcrumb[] = $vars['node']->field_op_author[0]['view'];
    }
    $vars['breadcrumb'] = theme('op_breadcrumb', $breadcrumb);
  }
  
  $vars['tabs2'] = menu_secondary_local_tasks();

  // Hook into color.module
  if (module_exists('color')) {
    _color_page_alter($vars);
  }
   /*Added By Anish on 04/26/11 to remove title of journal content types on loading the page and issue SWJ-83 */
  $vars['original_title'] = check_plain($vars['title']);
  if (in_array($vars['node']->type, array('journal','news_category','news', 'lib_book','lib_readlist','lib_report_art','lib_guides')) || in_array($vars['template_files'][0], array('page-news', 'page-lib'))) {
     $vars['title'] = NULL;

  }
  if(!empty($vars['node']) && in_array($vars['node']->type, array('page')) && $vars['node']->field_page_title_hide[0]['value'] == 1) {
    $vars['title'] = NULL;
	if ($vars['node']->field_page_title_b[0]['value']) {
	$site_name = variable_get('site_name','');
	  $vars['head_title'] = check_plain($vars['node']->field_page_title_b[0]['value']).' | '. $site_name;
	}
	
  }
if ($GLOBALS['user']->uid == 0 && $_GET['q'] == 'user') {
      $vars['title'] = 'User account';
      $vars['head_title']="User account | Smallwarsjournals";
   
    }
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function openpublish_theme_menu_local_tasks() {
  return menu_primary_local_tasks();
}

function openpublish_theme_comment_submitted($comment) {
  return t('by <strong>!username</strong> | !datetime',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

function openpublish_theme_node_submitted($node) {
  return t('by <strong>!username</strong> | !datetime',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}


/**
 * Adds even and odd classes to <li> tags in ul.menu lists
 */ 
function openpublish_theme_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
  static $zebra = FALSE;

  $zebra = !$zebra;
  $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  if (!empty($extra_class)) {
    $class .= ' '. $extra_class;
  }
  if ($in_active_trail) {
    $class .= ' active-trail';
  }
  if ($zebra) {
    $class .= ' even';
  }
  else {
    $class .= ' odd';
  }
  return '<li class="'. $class .'">'. $link . $menu ."</li>\n";
}

function openpublish_theme_preprocess_views_view_row_rss(&$vars)  {
$view = &$vars['view'];
$options = &$vars['options'];
$item = &$vars['row'];
// Use the [id] of the returned results to determine the nid in [results]
$result	= &$vars['view']->result;
$id	 = &$vars['id'];
$node	 = node_load( $result[$id-1]->nid );
$auth_count = count($node->field_op_author);
$author = "";
$i =1;
foreach ($node->field_op_author as $op_author) {
	$user_node = node_load($op_author['nid']);
	$author .= $user_node->title;
	$i++;
	if ($auth_count == $i) {
		$author .= " and ";
	}
	elseif($auth_count > 1 && $auth_count > $i) {
		$author .= ", ";
	}
	
  }
$vars['title'] = check_plain($item->title);
$vars['link'] = check_url($item->link);
$vars['description'] = $item->description;
$vars['author'] = $author;
$vars['node'] = $node;
$vars['item_elements'] = empty($item->elements) ? '' : format_xml_elements($item->elements);
}


function openpublish_theme_menu_item_link($link) {
	global $base_url;
  if (preg_match('/\.(png|gif|jpg)$/', $link['title']) ) {
   $link['localized_options']['html'] = TRUE;
   $image_path = '<img src="'.$base_url.'/'.path_to_theme().'/'. $link['title'].'" />';
   $link_path = $link['link_path'];
   $link['title'] = theme_image($image_path, $title, $title);
   return l($image_path, $link_path, array('html'=> TRUE) );
  }

  else {
  return theme_menu_item_link($link);
  }
}


function openpublish_theme_links($links, $attributes = array('class' => 'links')) {
  //print_r($links);
  unset($links['blog_usernames_blog']);
  return theme_links($links, $attributes);
}
