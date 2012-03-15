<?php if (count($data) > 0): ?>
<div class="block-right">
  <div class="side-c-header">
	<?php print  t('Recent Related SWJ Content'); ?>
  </div>
  <div class="article-heading">
	<ul>
	<?php foreach ($data as $row): ?>

		<?php 
			$by = array();
			if ($row['author']!='') {
				$by[]=$row['author'];
			}
			$byline = implode(", ", $by);
		?>
      <li >
           <?php print $row['content']?> <?php print t(' by ')?><?php print $byline ?> 
	  </li>
    <?php endforeach; ?>
    </ul>
  </div>
 </div>
<?php endif; ?>
