<?php
global $base_url;
$short_title = $node->field_guide_short[0]['value'];
$img_desc = $node->field_guide_image[0]['data']['description'];
$image = theme('imagecache','book-img', $node->field_guide_image[0]['filepath'], $title, $img_desc);

$id_title_left = ($node->field_guide_image[0]['filepath']) ? "title-left-side" : "title-wide";
?>
<div id="<?php print $id_title_left;?>">

<?php if($title): ?>
  <h1 class="library-long-title" align="center"><?php print $title;?></h1>
<?php endif;?>
<?php if($short_title): ?>
  <h2 class="library-short-title" align="center"><i>Short Title:&nbsp; </i><?php print $short_title; ?></h2>
<?php endif; ?>
</div>

<?php if($node->field_guide_image[0]['filepath']):?>
<div id="title-right-side">
  <?php print l($image, $node->field_guide_image[0]['filepath'],array('html'=> TRUE, 'attributes'=>array('rel'=>'lightbox'))); ?>
</div>
<?php endif; ?>

<div class="clear"></div><Br>

<div class="blk-fb-like">
	<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=216824158349546&amp;xfbml=1"></script><fb:like href="" send="false" width="500" show_faces="true" font=""></fb:like>
</div>
<div id="themedlinks">
<?php print  theme('links', $node->links); ?>
</div>
<div class="clear"></div>
<?php if ($node->editable): ?>
  <div class="link"><?php print l('Edit', 'node/' . $nid . '/edit'); ?></div>
<?php endif; ?>
<div class="body-content content">
    <?php print $node->content['body']['#value']; ?>
    <div class="library-seperator"></div>
<?php if($node->field_guide_info[0]['value']): ?>

  <h4 class="library-field-label-large"><?php print t("Background & Information") ?></h4>
<?php print $node->field_guide_info[0]['value']; ?>
<?php endif; ?>
<div class="library-seperator"></div>
<?php if($node->field_guide_feat_comm[0]['value']): ?>
<h4 class="library-field-label-large">Featured Comments</h4>
<?php print $node->field_guide_feat_comm[0]['value']; ?>
<?php endif; ?>
</div>
<?php if ($node->field_guide_related[0]['nid'] !=null): ?>
<div class="blk-relatated">
<div class="library-field-label-large field-label"><?php print t("RELATED CONTENT") ?>:</div>
<ul>
<?php foreach($node->field_guide_related as $related): ?>
<li>
<?php print l(t($related['safe']['title']), "node/".$related['nid']); ?>
</li>
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
<?php //p2_test($node); ?>
