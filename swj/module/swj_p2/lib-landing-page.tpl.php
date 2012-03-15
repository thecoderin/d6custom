<div class="blurb-top">
	<?php 
	print views_embed_view('library_main_top_blurb', 'default');
	?>
</div>
<div class="blk-lib-main">
	<div id="side-a">
		<div class="group-container">
			<?php print views_embed_view('lib_new_items_all', 'block_1'); ?>
		</div>
		<div class="group-container">
			<?php print views_embed_view('lib_from_vault_all', 'block_1'); ?>
		</div>
	  </div>
	  <div id="side-b">
		<div class="group-container">
			<?php print views_embed_view('lib_comments_all', 'block_1'); ?>
		</div>
		<div class="group-container">
			<?php print views_embed_view('lib_most_viewed_all', 'block_1'); ?>
		</div>
	</div>
</div>

<div class="blurb-bot"  id="welcome-container">
	<?php 
	print views_embed_view('library_main_bottom_blurb', 'default');
	?>
</div>
<div class="blurb-bot clear" id="about-library">
	<?php 
	print views_embed_view('library_main_bottom_blurb2', 'default');
	?>
</div>
