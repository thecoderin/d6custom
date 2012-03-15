<?php

global $base_url;
$short_title = $node->field_read_short_title[0]['value'];
$author = $node->field_read_author[0]['value'];
?>


<?php if($node->title): ?>
  <h1 class="library-long-title" align="center"><?php print $node->title;?></h1>
<?php endif;?>
<?php if($short_title): ?>
  <h2 class="library-short-title" align="center"><i>Short Title:&nbsp; </i><?php print $short_title; ?></h2>
<?php endif; ?>
<?php if($author): ?>
  <h3 class="library-byline byline"><?php print $author; ?></h3>
<?php endif; ?>


<div class="clear"></div><Br>

<div class="blk-fb-like">
	<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=216824158349546&amp;xfbml=1"></script><fb:like href="" send="false" width="500" show_faces="true" font=""></fb:like>
</div>
<div id="themedlinks">
<?php print  theme('links', $node->links); ?>
</div>
<div class="clear"></div>
<div class="body-content content">
<?php if (user_access('administer nodes')): ?>
  <div class="link"><?php print l('Edit', 'node/' . $nid . '/edit'); ?></div>
<?php endif; ?>
    <?php print $node->content['body']['#value']; ?>
    
    <?php if($node->field_read_ed_comment[0]['value']): ?>

	<h4 class="library-field-label-large"><?php print t("Editor's Comments") ?></h4>
	<?php print $node->field_read_ed_comment[0]['value']; ?>
	<?php endif; ?>
	<?php if($node->field_read_feature_comm[0]['value']): ?>
	<h4 class="library-field-label-large">Featured Comments</h4>
	<?php print $node->field_read_feature_comm[0]['value']; ?>
	<?php endif; ?>
	
    <div class="library-seperator"></div>
    <div class="blk-read-list">
	<h4 class="library-field-label-large"><?php print t("Reading List") ?></h4>
	<ul>
	<?php foreach($node->field_read_list as $list_book): ?>
	<li><?php print $list_book['view']; ?></li>
	<?php endforeach; ?>
	</ul>
	</div>
    
    <div class="library-seperator"></div>
      <ul id="library-fields">
<?php if($node->field_read_date[0]['value'] > 0): ?>
        <li><strong><?php print t('Date');?>:</strong> <?php print date('m/d/Y', $node->field_read_date[0]['value']); ?></li>
<?php endif; ?>
        <li>
<?php if($node->field_read_pub_by[0]['value']): ?>
             <strong><?php print t('Reading List By')?>: </strong><?php print strip_tags($node->field_read_pub_by[0]['value'],'<a>'); ?>
<?php endif; ?>
<?php if ($node->field_read_isbn[0]['value']): ?>
            <strong><?php print t('ISBN')?></strong>&nbsp;<?php print $node->field_read_isbn[0]['value']; ?>
<?php endif; ?>
        </li>
<?php if($node->field_read_avail[0]['value']): ?>
        <li>
            <div class="avail-label"><strong><?php print t('Available At')?>: </strong></div>
            <div class="avail-val"> <?php print $node->field_read_avail[0]['value']; ?></div>
            <div class="clear"></div>
        </li>
<?php endif; ?>
<?php if(!empty($node->field_read_website[0]['url'])): ?>
        <li>
        	<?php print l($node->field_read_website[0]['display_title'], $node->field_read_website[0]['url'], $node->field_read_website[0]['attributes'], $node->field_read_website[0]['html']); ?>
        </li>
<?php endif; ?>
      </ul>
</div>
<?php if ($node->field_read_related[0]['nid'] !=null): ?>
	<div class="blk-relatated">
	<div class="library-field-label-large field-label"><?php print t("RELATED CONTENT") ?>:</div>
		<ul>
		<?php foreach($node->field_read_related as $related): ?>
		<li><?php print $related['view']; ?></li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif;?>
<div id="comment-block">
  <?php print $node->content['fivestar_widget']['#value']; ?>
</div>

<?php if ($terms): ?>
   <div class="related-terms"> Tags: <?php print $node->terms ?></div>
  <?php endif;?>
<?php if ($node->comment_count == 0): ?>
 <div id="comments">
  <div class="comment-header clearfix">
    <h2 class="comments"><?php print t('Comments'); ?></h2>
    <div class="add-comment"><?php print l(t('Add New Comment'), 'comment/reply/' . $node->nid, array( 'fragment' => 'comment-form')); ?></div>
  </div>
</div>
<?php endif; ?>

