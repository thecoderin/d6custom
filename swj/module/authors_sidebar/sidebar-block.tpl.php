
<?php foreach ($content as $piece): ?>
<?php if (!empty($piece['head'])): ?>
<div class="block-right">
	<div class="side-c-header"><?php print $piece['head'] ?></div>
	<div class="article-heading">
	  <?php print $piece['body']; ?>
	</div>
</div>
<?php else: ?>
<div class="sidebar-author">
	<div class="article-heading">
	  <?php print $piece['body']; ?>
	</div>
</div>
<?php endif;?>

<?php endforeach; ?>
