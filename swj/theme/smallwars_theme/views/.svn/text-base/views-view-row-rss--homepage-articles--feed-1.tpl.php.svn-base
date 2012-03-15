<?php
// $Id: views-view-row-rss.tpl.php,v 1.1 2008/12/02 22:17:42 merlinofchaos Exp $
/**
 * @file views-view-row-rss.tpl.php
 * Default view template to display a item in an RSS feed.
 *
 * @ingroup views_templates
 */
 $dup = trim($node->field_teaser[0]['value']);
  if (empty($dup)) {
  $teaser = _getFirstWords($node->body, 30);
  }
  else {
	$teaser = _getFirstWords($dup, 30);
  }
?>
  <item>
    <title><?php print $title; ?></title>
    <link><?php print $link; ?></link>
    <description>
	<![CDATA[<?php if (!empty($author)): ?>
		<p>	<?php print "By: ".$author; ?></p>
		<?php endif; ?>
		<?php print trim($teaser); ?>]]>
	</description>
    <?php print $item_elements; ?>
  </item>
