<?php
// $Id: comment.tpl.php,v 1.2 2009/10/19 20:49:23 mcrittenden Exp $

/**
 * @file comment.tpl.php
 * Default theme implementation for comments.
 *
 * Available variables:
 * - $author: Comment author. Can be link or plain text.
 * - $content: Body of the post.
 * - $date: Date and time of posting.
 * - $links: Various operational links.
 * - $new: New comment marker.
 * - $picture: Authors picture.
 * - $signature: Authors signature.
 * - $status: Comment status. Possible values are:
 *   comment-unpublished, comment-published or comment-preview.
 * - $submitted: By line with date and time.
 * - $title: Linked title.
 *
 * These two variables are provided for context.
 * - $comment: Full comment object.
 * - $node: Node object the comments are attached to.
 *
 * @see template_preprocess_comment()
 * @see theme_comment()
 */
?>

<div class="comment <?php echo $classes . ' ' . $zebra; if ($unpublished) { echo 'comment-unpublished'; } ?> clear-block">

    <?php if ($title): ?>
      <h3><?php echo $title; if (!empty($new)): ?> <span class="new"><?php echo $new; ?></span><?php endif; ?></h3>
    <?php elseif (!empty($new)): ?>
      <?php echo $new; ?>
    <?php endif; ?>

    <?php if ($unpublished): ?>
      <?php echo t('Unpublished'); ?>
    <?php endif; ?>

    <?php if ($picture): ?>
	    <?php echo $picture; ?>
	  <?php endif; ?>

    <?php echo $submitted; ?>

    <?php echo $content ?>

    <?php if ($signature): ?>
    	<?php echo $signature; ?>
    <?php endif; ?>

    <?php if ($links): ?>
      <?php echo $links; ?>
    <?php endif; ?>

</div> <!-- /comment -->
