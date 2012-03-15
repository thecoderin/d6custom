<div class="blurb-top">
	<?php 
	print views_embed_view('reading_list_landing_top_blurb', 'default');
	?>
</div>
<div class="<?php print $data['type'];?>">
	<div id="side-a">
		<div class="group-container">
			<h2>New Reading Lists</h2>
			<?php print views_embed_view('lib_new_items', 'block_1',$data['type']); ?>
		</div>
		<div class="group-container">
			<h2>From The Vault</h2>
			<?php print views_embed_view('lib_from_vault', 'block_1',$data['type']); ?>
		</div>
	  </div>
	  <div id="side-b">
		<div class="group-container">
			<h2>Comments</h2>
			<?php print views_embed_view('lib_comments', 'block_1',$data['type']); ?>
		</div>
		<div class="group-container">
			<h2>Most Popular</h2>
			<?php print views_embed_view('lib_most_popular_main', 'block_1',$data['type']); ?>
		</div>
	</div>
</div>

<div class="blurb-bot"  id="welcome-container">
	<?php 
	print views_embed_view('reading_list_landing_bot_blurb', 'default');
	?>
</div>
