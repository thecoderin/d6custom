<div class="blurb-top">
	<?php 
	print views_embed_view('toc_landing_top_blurb', 'default');
	?>
</div>
<?php 

	$links = "<i><b>TOC</b></i>";
	$links .= " | ".l(t("Alphabetical"), "lib/toc2");
	$links .= " | ".l(t("Top Rated"), "lib/toc3");
	$links .= " | ".l(t("Recently Updated"), "lib/toc4");
?>
<div id="author-sort-by"><p class="small">Sort by:</p>
  <p class="sort small">
  	<?php print $links ?>
  </p>
</div>
<div class="content" id="toc-richtext">
<?php if (user_access('edit table of content')): ?><div class="link"><?php print l(t('Edit'), "node/".$node->nid."/edit") ?></div><?php endif; ?>
<?php print $node->body; ?>
</div>
<div class="blurb-bot"  id="welcome-container">
	<?php 
	print views_embed_view('toc_landing_bottom_blurb', 'default');
	?>
</div>
