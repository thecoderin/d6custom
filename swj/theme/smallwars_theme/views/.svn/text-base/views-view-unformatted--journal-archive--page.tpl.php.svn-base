<div class="interior-page-heading">
  <h1><?php print $title; ?></h1>
</div>
<?php foreach ($rows as $id => $row): ?>
  <?php $class = ($id) ? $classes[$id] : 'featured-view-item clearfix'; ?>
  <div about="<?php print $rdfa_about_links[$id]; ?>" class="<?php print $class; ?>">
    <?php print $row; ?>
  </div>
  <?php if (stripos($classes[$id],'views-row-last') === false): ?><div class="views-separator"></div><?php endif; ?>
<?php endforeach; ?>

