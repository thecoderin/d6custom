<?php 
$news_url = $node->field_news_url[0]['url'];
$node_created = date('F d, Y - h:ia', $node->created);

if ($node->field_news_author[0]['value']!='') {
	$by[]=$node->field_news_author[0]['value'];
}
if ($node->field_news_source[0]['value']!='') {
	$by[]="<i>".$node->field_news_source[0]['value']."</i>";
}   
$byline = implode(", ", $by);

$swjwf = SWJcontent_updates($node->nid);
if ( $swjwf !== false && !empty($swjwf)) {
  $node_created .= ', <i> Updated: '.date('F d, Y - h:ia', $swjwf).'</i>';
}
?>
<h1 class="main-title"><a href="<?php print $news_url?>"><?php print $title?></a></h1>
<?php if ($byline!=''):?>
	<h3 class="byline">by <?php print $byline?></h3>
<?php endif; ?>

<p class="meta-data"><?php print t('Posted to SWJ on ');  print $node_created; ?></p>

<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">


<div class="blk-fb-like">
	<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=216824158349546&amp;xfbml=1"></script><fb:like href="" send="false" width="500" show_faces="true" font=""></fb:like>
</div>
<div id="themedlinks">
<?php print  theme('links', $node->links); ?>
</div>
  <div class="body-content content">
    <?php //print $content ?>
	<?php print ($node->content['body']['#value']);?>
  </div>
	<?php if($node->field_news_ed_comment[0]['value']!=''):?>
	<div id="editor-comment-block">
		<h3>Editor's Comment</h3>
		<div class="editor-comment-content">
		<?php print $node->field_news_ed_comment[0]['value']?>		
		</div>
	</div>
	<?php endif;?>
</div>
<?php if ($node->comment_count == 0): ?>
 <div id="comments">
  <div class="comment-header clearfix">
    <h2 class="comments"><?php print t('Comments'); ?></h2>
    <div class="add-comment"><?php print l(t('Add New Comment'), 'comment/reply/' . $node->nid, array( 'fragment' => 'comment-form')); ?></div>
  </div>
</div>
<?php endif; ?>
