<div id="sort-by">
	<p class="sort small">Sort by: <?php print $links;?></p>
</div>
<?php
$spliter = ceil(count($data)/2);
$c =0;
?>
<div id="side-a">
	<div class="group-container">
		<?php foreach ($data as $cat): ?>
			<?php 	if ($spliter==$c):?>
	</div>
</div>
<div id="side-b">				
	<div class="group-container">
			<?php  endif; ?>    
			<h3 class="news"><?php print $cat['link']." (".$cat['count'].")" ; ?></h3>
			<?php
				$c++;
			?>
		<?php endforeach; ?>
	</div>
</div>