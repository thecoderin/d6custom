<?php
//$Id//
?>
<?php menu_set_active_item('blog/latest'); ?>
<div id="journal-issue">

	<div class="nav-control">
			<?php if ($output->prev): ?> <span class="prev"><?php print $output->prev ?></span> |<?php endif; ?><?php if($output->next): ?> <span class="prev"><?php print $output->next ?></span><?php endif;?>
	</div>
	<p class="date"><?php print $output->title; ?></p>
	<div class="table-contents">
		<div class="table-archives">
			<?php print $output->blogs; ?>
			<div class="clear"></div>
			<div class="nav-control">
			<?php if ($output->prev): ?> <span class="prev"><?php print $output->prev ?></span> |<?php endif; ?><?php if($output->next): ?> <span class="prev"><?php print $output->next ?></span><?php endif;?>
		</div>
		<p class="date"><?php print $output->title; ?></p>
			<div class="sep-thick"></div>
			<?php print $output->excerpt; ?>
			<div class="clear"></div>
			<div class="nav-control">
			<?php if ($output->prev): ?> <span class="prev"><?php print $output->prev ?></span> |<?php endif; ?><?php if($output->next): ?> <span class="prev"><?php print $output->next ?></span><?php endif;?>
			<p class="date"><?php print $output->title; ?></p>
		</div>
			<div class="sep-thick"></div>
		</div>
	</div>
</div>