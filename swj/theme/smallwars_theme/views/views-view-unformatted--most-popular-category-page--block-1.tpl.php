<div class="block-right">
<?php if($title): ?>
  <div class="side-c-header">
	<?php print  $title; ?>
  </div>
<?php endif; ?>
  <div class="article-heading">
  <ul>
<?php foreach ($rows as $id => $row): ?>
  <li class="<?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </li>
<?php endforeach; ?>
</ul>
  </div>
</div>
