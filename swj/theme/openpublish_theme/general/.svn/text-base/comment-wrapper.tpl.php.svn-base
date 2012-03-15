<?php if (!$content || $node->type == 'forum'): ?>
  <div id="comments"><?php print $content; ?></div>
<?php else: ?>
  <div id="comments">
 <?php if ($node->comment_count > 0): ?>
    <div class="comment-header clearfix">
    <h2 class="comments"><?php print t('Comments'); ?></h2>
    <div class="add-comment"><?php print l(t('Add New Comment'), 'comment/reply/' . $node->nid, array( 'fragment' => 'comment-form')); ?>
    </div><!--/add comment-->
    </div><!--/comment-header-->
    <div class="clear"></div>
<?php endif; ?>
    <?php print $content; ?>
  </div>
  <div class="add-comment"><?php print l(t('Add New Comment'), 'comment/reply/' . $node->nid, array( 'fragment' => 'comment-form')); ?></div>
<?php endif; ?>    