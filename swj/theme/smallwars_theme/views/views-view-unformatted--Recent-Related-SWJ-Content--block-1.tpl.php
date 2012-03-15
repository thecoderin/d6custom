<div class="block-right">
  <div class="side-c-header">
	<?php print  t('Recent Related SWJ Content'); ?>
  </div>
  <div class="article-heading">
  <ul>

<?php foreach ($rows as $id => $row): ?>
  <li  class="<?php print $classes[$id]; ?>">
    <?php print $row; ?>
	</li>
 
  <?php if (stripos($classes[$id],'views-row-last') === false): ?><?php endif; ?>
<?php endforeach; ?>
</ul>
</div>
</div>
