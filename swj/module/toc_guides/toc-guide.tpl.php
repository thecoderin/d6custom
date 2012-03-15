<div class="blurb-top">
	<?php 
	print views_embed_view('toc_landing_top_blurb', 'default');
	?>
</div>
<div id="author-sort-by"><p class="small">Sort by:</p>
  <p class="sort small">
  	<?php print $links ?>
  </p>
</div>
<div class="toc-grid">
<?php $half = count($data); ?>
<div id="side-a">
  <div class="group-container">
    <ul>
    <?php for($i=0; $i<$half; $i++): ?>
       <li class='small'><?php print $data[$i]; ?></li>
    <?php endfor; ?>
    </ul>
  </div>
</div>

<div id="side-b">
  <div class="group-container">
    <ul>
     <?php for($i=$half; $i<count($data); $i++): ?>
       <li class='small'><?php print $data[$i]; ?></li>
     <?php endfor; ?>
    </ul>
  </div>
</div>
</div>
<div class="blurb-bot"  id="welcome-container">
	<?php 
	print views_embed_view('toc_landing_bottom_blurb', 'default');
	?>
</div>
