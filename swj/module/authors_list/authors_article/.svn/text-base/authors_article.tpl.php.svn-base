<?php
global $base_url;
$pager = $data[0]['pager'];

?>

<?php print views_embed_view('article_author_blurb', 'block_1'); ?>
<div class="interior-page-heading"><h1><?php print $data[0]['title']; ?></h1></div>
<div id="author-sort-by"><p class="small">Sort by:</p>
  <p class="sort small"><?php print $data[0]['links'] ?></p>
</div>
<?php
	$cols = 3;
	$listlen = count( $data['authors'] );
    $partlen = floor( $listlen / $cols )+1;
?>
<div class="author-grid normal">
<?php foreach(array_chunk($data['authors'], $partlen) as $row): ?>
		<dl class="author-grid-list">
		<?php foreach($row as $authors): ?>
				<dt class="author-grid-name">
					<?php print l(t($authors['name']),"node/".$authors['id'])." (".$authors['posts'].")"; ?>
				</dt>
		<?php endforeach; ?>
		</dl>
<?php endforeach; ?>
</div>
<h1>Author Bios </h1>
<?php foreach($data as $datum): ?>
<?php if(!empty($datum['name'])): ?>
<div class="author-list-row">
<?php if($datum['image']): ?>
  <?php print $datum['image'] ?> 
<?php endif; ?>
<?php
	if($datum['link']){
		//"More..." link get tacked onto the end of the short bio.
		// Append in the last para rather than a new paragraph.
		$pos = strrpos($datum['short_bio'], "</p>");
		$more = "&nbsp;&nbsp;&nbsp;&nbsp;".$datum['link'];
		$auth_bio=substr_replace($datum['short_bio'], $more, $pos, 0);
		
	 } else {
	 $auth_bio = $datum['short_bio'];
	 }
?>
<div class='blk-author-info'>
	<p class="author-name"><?php print $datum['name'] ?></p>
	<div class="auth-shot-bio normal">
	  <?php if($auth_bio): ?>
		<?php print $auth_bio ?>
	   <?php endif; ?>
	</div>
</div>
<div class="clear"></div> 
</div>
<?php endif; ?>
<?php endforeach; ?>
<?php print $pager ?>
