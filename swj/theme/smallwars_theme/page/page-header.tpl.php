<?php
// $Id: page-header.tpl.php,v 1.1.2.15 2010/12/01 18:00:38 tirdadc Exp $
/**
 * @file page-header.tpl.php
 * Header template.
 *
 * For the list of available variables, please see: page.tpl.php
 *
 * @ingroup page
 */
 global $user;
 global $base_url;
 
 if ($user->uid) {
 $lnk = "user/".$user->uid;
 $name = "Hello ".$user->name;
 }
 else {
    $lnk = $base_url."/user?".drupal_get_destination();
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html 
     xmlns="http://www.w3.org/1999/xhtml"      
     xmlns:dc="http://purl.org/dc/terms/" 
     xmlns:dcmitype="http://purl.org/dc/terms/DCMIType/"
     xmlns:ctag="http://commontag.org/ns#"
     xmlns:foaf="http://xmlns.com/foaf/0.1/"      
     xmlns:v="http://rdf.data-vocabulary.org/#"
     xmlns:fb="http://www.facebook.com/2008/fbml"
     lang="<?php print $language->language; ?>" 
     dir="<?php print $language->dir; ?>"
     version="XHTML+RDFa 1.0" >
<head>
<?php if ($head_title): ?>
  <title><?php print $head_title ?></title>
<?php elseif ($original_title): ?>
  <title><?php print $original_title ?></title>
<?php endif; ?>
  <?php print $op_head; ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if gte IE 6]><?php print openpublish_get_ie_styles(); ?><![endif]-->  
  <!--[if IE 6]><?php print openpublish_get_ie6_styles(); ?><![endif]-->
</head>

<body <?php print openpublish_body_classes($left, $right, $body_classes); ?> >
<div id="wrapper">
	<div id="header">
		<div id="header-left">
			<a href="<?php print check_url($front_page); ?>" title="<?php print check_plain($site_name); ?>"><img src="<?php print check_url($logo); ?>" alt="<?php print check_plain($site_name); ?>" /></a>
		</div>
		<div id="header-right">
			<?php if (menu_tree('menu-top-menu')): ?>
			  <div id="utilities">
			    <ul class="menu"> 
			    <?php if ($user->uid):?>
				  <li><?php print l($name, $lnk); ?></li>
				  <li><?php print l(t("Logout"), $base_url."/logout"); ?></li> 
				  <?php if(!in_array ('Subscriber',$user->roles)) :  ?>
					<li><?php print l(t("Become a Member"), $base_url."/subscribe/membership"); ?></li>
				  <?php else: ?>
					<li><?php print l(t("Your Membership"), $base_url."/subscribe/membership"); ?></li>
				  <?php endif; ?>
				<?php else: ?>
				  <li><?php print l(t("Login"), $lnk) ?></li>
  				 <?php endif; ?>			 
				  </ul>
				
				<?php print menu_tree('menu-top-menu'); ?>
			  </div>
			<?php endif; ?>
			<?php if ($search_box): ?><?php print $search_box; ?><?php endif; ?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<div id="nav">
	  <?php if (isset($expanded_primary_links)): ?>
		<?php print theme('openpublish_menu', $expanded_primary_links); ?>
	  <?php else: ?> 
	    <?php if (isset($primary_links)) : ?>
		  <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
           <?php endif; ?>
           <?php if (isset($secondary_links)) : ?>
		  <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
           <?php endif; ?>
         <?php endif; ?>      
	</div>
	<div class="clear"></div>
	<div id="content-container">