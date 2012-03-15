<div class="group-container">
<?php if (!empty($title)): ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>

<?php foreach ($data as $row): ?>
<p class="recent-comments"><?php print $row ?></p>
<?php endforeach; ?>
</div>