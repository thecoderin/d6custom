<?php // $Id: page.tpl.php,v 1.1 2009/06/11 16:54:36 mcrittenden Exp $
 
/**
 * @file
 * Theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $css: An array of CSS files for the current page.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $body_classes_array: Array of the body classes. It is flattened
 *   into a string within the variable $classes.
 * - $is_front: TRUE if the current page is the front page. Used to toggle the mission statement.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Page metadata:
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $head_title: A modified version of the page title, for use in the TITLE tag.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $body_classes: String of classes that can be used to style contextually through
 *   CSS. It should be placed within the <body> tag. When selecting through CSS
 *   it's recommended that you use the body tag, e.g., "body.front". It can be
 *   manipulated through the variable $classes_array from preprocess functions.
 *   The default values can be one or more of the following:
 *   - front: Page is the home page.
 *   - not-front: Page is not the home page.
 *   - logged-in: The current viewer is logged in.
 *   - not-logged-in: The current viewer is not logged in.
 *   - node-type-[node type]: When viewing a single node, the type of that node.
 *     For example, if the node is a "Blog entry" it would result in "node-type-blog".
 *     Note that the machine name will often be in a short form of the human readable label.
 *   The following only apply with the default 'primary' and 'secondary' block regions:
 *     - two-sidebars: When both sidebars have content.
 *     - no-sidebars: When no sidebar content exists.
 *     - one-sidebar and sidebar-primary or sidebar-secondary: A combination of
 *       the two classes when only one of the two sidebars have content.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $mission: The text of the site mission, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $search_box: HTML to display the search box, empty if search has been disabled.
 * - $primary_links (array): An array containing the Primary menu links for the
 *   site, if they have been configured.
 * - $secondary_links (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $left: The HTML for the primary sidebar.
 * - $title: The page title, for use in the actual HTML content.
 * - $messages: HTML for status and error messages. Should be displayed prominently.
 * - $tabs: Tabs linking to any sub-pages beneath the current page (e.g., the view
 *   and edit tabs when displaying a node).
 * - $help: Dynamic help text, mostly for admin pages.
 * - $content: The main content of the current Drupal page.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $right: The HTML for the secondary sidebar.
 *
 * Footer/closing data:
 * - $footer_message: The footer message as defined in the admin settings.
 * - $footer : The footer region.
 * - $closure: Final closing markup from any modules that have altered the page.
 *   This variable should always be output last, after all other dynamic content.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">

<head>
	
  <title><?php echo $head_title; ?></title>
	
  <?php echo $head; ?>
  <?php echo $styles; ?>
  
  <!--[if lte IE 6]>
    <style type="text/css" media="all">@import "<?php echo $base_path . path_to_theme() ?>/css/ie6.css";</style>
  <![endif]-->
  <!--[if IE 7]>
    <style type="text/css" media="all">@import "<?php echo $base_path . path_to_theme() ?>/css/ie7.css";</style>
  <![endif]-->
  
  <?php echo $scripts; ?>
	
</head>

<body class="<?php echo $body_classes; ?>">
<div class="container">
  <div class="header">
<!-- LOGO -->
<?php if (!empty($logo)): ?>
   <div class="logo">
	<a href="<?php echo $front_page; ?>" title="<?php echo t('Home'); ?>" rel="home">
      	<img src="<?php echo $logo; ?>" alt="<?php echo t('Home'); ?>" />
    </a>
   </div>
<?php endif; ?>
<?php if($top_links): ?>
<div class="top-link"><?php print $top_links ?></div>
<?php endif; ?>
<!-- SEARCH -->
<?php if($searching): ?>
   <div class="search">
      <div class="searchBox"><?php echo $searching; ?></div>
	</div>
<?php endif; ?>
<div class="clear"></div>
 	<!-- PRIMARY LINKS -->
<?php if ($main_menu): ?>
<?php print $main_menu; ?>
<?php endif; ?>
 </div>
<!--content starts here-->
<div class="clear"></div>
 <div class="innerContentContainer">
 	<!-- STATUS MESSAGES -->
  <?php echo $messages; ?>
	<!-- HELP TEXT -->
  <?php echo $help; ?> 
   <div class="innerContent">
	<!-- BREADCRUMB -->
  <?php //echo $breadcrumb; ?>
	<!-- PAGE TITLE -->
  <?php if ($title): ?>
    <div class="innerHeadFirst"><h1><?php echo $title; ?></h1></div>
  <?php endif; ?>
  <!-- language Flag Comes Here -->
  <?php if ($language_bar): ?>
  <div class="language-bar"><?php print $language_bar ?></div>
  <?php endif; ?>
	<!-- MENU TABS -->
  <?php if ($tabs): ?>
    <div class="tabs"><?php echo $tabs; ?></div>
  <?php endif; ?>
 
 	<!-- MAIN CONTENT -->
  <?php echo $content; ?>
 </div>

	<!-- RIGHT SIDEBAR REGION -->
  <?php if ($right): ?>
    <div class="innerRight"><?php echo $right; ?></div>
  <?php endif; ?>
</div>
<!--content ends here -->
  <div class="clear"></div>
</div>
	<!-- FOOTER -->
  <?php if(!empty($footer_message) || !empty($footer_block)): ?>
    <?php echo $footer_message; ?>
<div class="footer">
  <div class="footerContainer">
   <?php print $footer_block; ?>
   </div>
</div>
  <?php endif; ?>
</body>
</html>