<div class="blurb-top">
	<?php 
	print views_embed_view('tags_landing_top_blurb', 'default');
	?>
</div>
<?php $count = count($tags); 
$third = $count/3;
$i = 0;
 foreach($tags as $r) {
   if ($i < $third) {
     $one[] = $r;
   }
   elseif($i < 2*$third) {
     $two[] = $r;
   }
   else {
     $three[] = $r;
   }
  $i++;
 }
?>
<div id="sort-by"><p class="sort small">Sort By: <?php print $links ?></p></div>
<div class="blk-grid">
	<div id="library-col-1">
	  <div class="group-container">
	    <ul>
	     <?php foreach($one as $r): ?>
	       <li class="small"><?php print l($r['name'].' ('.$r['count'].')', "taxonomy/".$r['name']) ?></li>
	     <?php endforeach; ?>      
	    </ul>
	  </div>
	</div>

	<div id="library-col-2">
	  <div class="group-container">
	    <ul>
	     <?php foreach($two as $r): ?>
	       <li class="small"><?php print l($r['name'].' ('.$r['count'].')', "taxonomy/".$r['name']) ?></li>
	     <?php endforeach; ?>      
	    </ul>
	  </div>
	</div>

	<div id="library-col-3">
	  <div class="group-container">
	    <ul>
	     <?php foreach($three as $r): ?>
	       <li class="small"><?php print l($r['name'].' ('.$r['count'].')', "taxonomy/".$r['name']) ?></li>
	     <?php endforeach; ?>      
	    </ul>
	  </div>
	</div>
</div>
<?php
menu_set_active_item('lib/tags');
?>
