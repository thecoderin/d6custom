<?php
// $Id: node-blog.tpl.php,v 1.1.2.9 2010/10/26 21:17:19 jec006 Exp $
/**
 * @file
 * Template for blog content type.
 * 
 * Available variables:
 * - $authors: List of authors.
 * - $node_created: The blog post's date.
 * - $node_created_timestamp: The blog post's date in timestamp format.
 * - $body: Actual body content of the blog post.
 * - $authors: Array of author objects. Each $author in $authors contains:
 *   - $author->title: Author's name.
 *   - $author->jobtitle: Author's job title.
 *   - $author->teaser: Author's teaser text. 
 *   - $author->photo: Author's photo thumbnail. 
 * - $calais_geo_map: Calais geomapping data.
 * - $related_terms_links: Related taxonomy links.
 * - $themed_links: Themed links.
 * 
 * @see openpublish_node_blog_preprocess()
 
 print "<pre>";print_r($node);print "</pre>";exit;**/
 
 $show_author = $node->field_show_author_info[0]['value'];
 $author = $node->author_profile;
 $count = count($author);
 $auth = "";
 if($node->taxo_terms) $terms = $node->taxo_terms;
 if( $count === 1) $auth = $author[0]->title;
 elseif($count == 2) $auth = $author[0]->title. " and ".$author[1]->title;
 elseif($count > 2) {
   for($i = 0; $i < $count -2; $i++) {
		$auth .= $author[$i]->title.", ";
	}
	$auth .= $author[$i]->title." and ".$author[$i + 1]->title;
 }
 $field_deck_value = $node->field_deck[0][value];
$add_to_any = module_invoke('addtoany', 'block', 'view', 0);
$plural = (($count > 1) ? false : true);
 
  ?>
<?php if (node_access('update', $node)): ?>
  <div class="link"><?php print l('Edit', 'node/' . $nid . '/edit'); ?></div>
<?php endif; ?>
<div id="blog-body">
<?php if (!empty($field_deck_value)): ?>
<h2 class="deck"><?php print $field_deck_value; ?></h2>
<?php endif; ?>
<?php if ($authors): ?>
<h3 class="byline">by <?php print $auth; ?></h3>
<?php endif; ?>
<p class="meta-data"><?php print t('SWJ Blog Post'); ?> | <?php print $node_created_rdfa; ?></p>
<div class="blk-fb-like">
	<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=216824158349546&amp;xfbml=1"></script><fb:like href="" send="false" width="500" show_faces="true" font=""></fb:like>
</div>
<div id="themedlinks">
<?php print $themed_links; ?></div>
<div class="body-content">
  <div property="dc:description"><?php print $body; ?></div>
   
  <?php if ($documentcloud_doc): ?>
    <h2><?php print t("Source Documents");?></h2>
    <?php foreach ($documentcloud_doc as $doc) : ?>
      <?php print $doc['view']; ?>
    <?php endforeach; ?>
  <?php endif; ?>
  <?php if ($terms): ?>
    <span class="terms">Tags : <?php print $terms ?></span>
  <?php endif;?>

  
<?php if ($node->author_profile && $show_author): ?>
    <div class="user-profile">
    <h3><?php print format_plural($plural, 'About the Author', 'About the Authors'); ?></h3>      
	<?php foreach($node->author_profile as $author): ?>
		<?php
			if($author->link){
				//"More..." link get tacked onto the end of the short bio.
				// Append in the last para rather than a new paragraph.
				$pos = strrpos($author->bio, "</p>");
				$more = "&nbsp;&nbsp;&nbsp;&nbsp;".$author->link;
				$auth_bio=substr_replace($author->bio, $more, $pos, 0);
				
			 } else {
			 $auth_bio = $author->bio;
			 }
		?>
		<div class="blk-pic">
			<?php if ($author->image): ?>
			  <?php print $author->image; ?>
			<?php endif; ?>
		</div>
        <div class="blk-info">
          <div class="user-name"><?php print $author->title; ?></div>
          <div class="user-bio"><?php print $auth_bio; ?>
		  </div>
        </div>
		<div class="clear"></div>
	<?php endforeach; ?>
    </div><!-- /.user-profile -->
<?php endif; ?>
</div><!-- /.body-content -->
</div>
<?php if ($node->comment_count == 0): ?>
 <div id="comments">
  <div class="comment-header clearfix">
    <h2 class="comments"><?php print t('Comments'); ?></h2>
    <div class="add-comment"><?php print l(t('Add New Comment'), 'comment/reply/' . $node->nid, array( 'fragment' => 'comment-form')); ?></div>
  </div>
</div>
<?php endif; ?>