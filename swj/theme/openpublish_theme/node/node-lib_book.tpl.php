<?php
   // menu_set_active_item('lib');

?>
<?php
global $base_url;
$short_title = $node->field_book_short_title[0]['value'];
$author = $node->field_book_author[0]['value'];
$image = theme('imagecache','book-img', $node->field_book_feat_img[0]['filepath'], $title, $title);
$id_title_left = ($image!='' ||$node->field_book_avail[0]['value']!='') ? "title-left-side" : "title-wide";

?>
<div id="<?php print $id_title_left;?>">
<?php if($node->title): ?>
  <h1 class="library-long-title" align="center"><?php print $node->title;?></h1>
<?php endif;?>
<?php if($short_title): ?>
  <h2 class="library-short-title" align="center"><i>Short Title:&nbsp; </i><?php print $short_title; ?></h2>
<?php endif; ?>
<?php if($author): ?>
  <h3 class="library-byline byline">by <?php print $author; ?></h3>
<?php endif; ?>

</div>


<?php if($image!='' ||$node->field_book_avail[0]['value']!=''):?>
<div id="title-right-side">
	<?php if($node->field_amazon[0]['value']!='') :?>
		<div class="blk-amazon">
			<?php print $node->field_amazon[0]['value']; ?>
		</div>
	<?php else: ?>
  		<?php print $image; ?>
  	<?php endif; ?>
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
<?php if (user_access('administer nodes')): ?>
  <div class="link"><?php print l('Edit', 'node/' . $nid . '/edit'); ?></div>
<?php endif; ?>
<div class="body-content content">
    <?php print $node->content['body']['#value']; ?>
    <div class="library-seperator"></div>
      <ul id="library-fields">
<?php if($node->field_book_pubdate[0]['value'] > 0): ?>
        <li><strong><?php print t('Date');?>:</strong> <?php print date('m/d/Y', $node->field_book_pubdate[0]['value']); ?></li>
<?php endif; ?>
        <li>
<?php if($node->field_book_pub_by[0]['value']): ?>
             <strong><?php print t('Published By')?>:</strong><?php print strip_tags($node->field_book_pub_by[0]['value'],'<a>'); ?>
<?php endif; ?>
<?php if ($node->field_book_isbn[0]['value']): ?>
            <strong><?php print t('ISBN')?></strong>&nbsp;<?php print $node->field_book_isbn[0]['value']; ?>
<?php endif; ?>
        </li>
<?php if($node->field_book_avail[0]['value']): ?>
        <li>
            <div class="avail-label"><strong><?php print t('Available At')?>: </strong></div>
            <div class="avail-val"> <?php print $node->field_book_avail[0]['value']; ?></div>
            <div class="clear"></div>
             
        </li>
<?php endif; ?>
<?php if(!empty($node->field_book_site[0]['url'])): ?>
        <li>
         <?php print l($node->field_book_site[0]['display_title'], $node->field_book_site[0]['url'], $node->field_book_site[0]['attributes'], $node->field_book_site[0]['html']); ?>
        </li>
<?php endif; ?>
      </ul>
<?php if($node->field_book_ed_comment[0]['value']): ?>
<div class="library-seperator"></div>
  <h4 class="library-field-label-large"><?php print t("Editor's Comments") ?></h4>
<?php print $node->field_book_ed_comment[0]['value']; ?>
<?php endif; ?>
<?php if($node->field_book_feature_comm[0]['value']): ?>
<h4 class="library-field-label-large">Featured Comments</h4>
<?php print $node->field_book_feature_comm[0]['value']; ?>
<?php endif; ?>
</div>
<?php if ($node->field_book_related[0]['nid'] !=null): ?>
<div class="blk-relatated">
<div class="library-field-label-large field-label"><?php print t("RELATED CONTENT") ?>:</div>
<ul>
<?php foreach($node->field_book_related as $related): ?>
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
<?php //p2_test($node); ?>
