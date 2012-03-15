<?php
// $Id: node.tpl.php,v 1.2 2009/10/19 20:49:23 mcrittenden Exp $

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_user().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>

<div class="node <?php echo $classes; ?>" id="node-<?php echo $node->nid; ?>">

  <?php if ($page == 0): ?>
    <h2><a href="<?php echo $node_url; ?>"><?php echo $title; ?></a></h2>
  <?php endif; ?>
  <div id="carousel">
  	<ul class="features clearfix">
    <?php 
		drupal_set_title('');
		$controls = '';
		foreach($node->field_pagerolls as $k => $item) {
			$img = '/'.$item['filepath'];
			$link = $link = url($item['data']['link']['body']);
			$output = '';
			$controls .= '<a href="#" id="button-'.($k+1).'"><span>'.$item['data']['buttonlabel']['body'].'</span></a>';
			$output .= '<li style="background: url('.$img.') no-repeat;" class="clearfix">';
			$output .= '<a href="'.$link.'"><div class="text-wrapper">';
			if($item['data']['headline']['body']):
				$output .= '<div class="headline">'.$item['data']['headline']['body'].'</div>';
			endif;
			if($item['data']['subhead']['body']):
				$output .= '<div class="subhead">'.$item['data']['subhead']['body'].'</div>';
			endif;
			if($item['data']['linktext']['body']):
				$output .= '<div class="linktext">'.$item['data']['linktext']['body'].'</div>';
			endif;
			$output .= '</div></a>';
			$output .= '</li>'."\n";
			echo $output;
			/*
    	echo '<pre>';
			print_r($item);
			echo '</pre>';
			*/
     } ?>
    </ul>
    <div class="jcarousel-control">
    <?php echo $controls; ?>
    </div>
  <?php
		drupal_add_js(path_to_theme().'/js/pageroll.js');
		$options = array(
			'scroll' => 1,
			'initCallback' => 'pageroll_callback',
			'auto' => 5,
			'wrap' => 'last',
			'animation' => 300,
			'buttonNextHTML' => NULL,
			'buttonPrevHTML' => NULL,
			//'itemVisibleInCallback' => array('onBeforeAnimation' => 'pageroll_set_active',),
			//'itemVisibleInCallback' => 'pageroll_set_active', //onBeforeAnimation: 
			'itemFirstInCallback' => 'pageroll_set_active',
		);
		drupal_add_css(path_to_theme().'/css/pageroll.css');
		jcarousel_add("#carousel", $options); 
		?>	
  </div>

</div> <!-- /node-->
