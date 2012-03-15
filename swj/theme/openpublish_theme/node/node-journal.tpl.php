<?php
global $base_url;
/*
print "<pre>";
print_r($node);
print "</pre>";
*/
$view_name = 'journal_current_issue_sub_view';
$journ['title'] = date("F, Y", $node->created);
$journ['node_id'] = $node->nid;
$journ['image'] = $base_url.'/'.$node->field_journal_cover[0][filepath];
$journ['issue'] = $node->field_journal_issue[0][value];
$journ['toc'] = $node->body;
$journ['date'] = $node->created;
//$journ['desc'] = $node->field_journal_desc[0][value];
if (module_exists('journal_mgt')) {
$prev = node_sibling($dir = 'previous', $node,'<<prev');
$next = node_sibling($dir = 'next', $node,'next>>');
}
if (!empty($node->field_journal_pdf[0][filepath])) {
  $journ['link'] = $base_url."/".$node->field_journal_pdf[0][filepath];
 }else if (!empty($node->field_journal_link[0][url])) {
  $journ['link'] = $node->field_journal_link[0][url];
 }
?>


<div id="journal-issue">
<!--  <div id="intro"><?php //print $journ['desc']; ?></div>-->
<?php if (user_access('edit any journal content')): ?>  
  <p><?php print l(t("[edit]"), 'node/'.$journ['node_id'].'/edit') ?></p>
<?php endif; ?>
<div class="nav-control">
 <?php if ($prev): ?> <span class="prev"><?php print $prev ?></span> |<?php endif; ?><?php if($next): ?> <span class="prev"><?php print $next ?></span><?php endif;?>
 </div>
  <p class="date">
    <?php if (!empty($journ['link'])) : ?>
		<a href="<?php print $journ['link'] ?>" target="_blank">
	<?php endif; ?>
		<?php print $journ['title']; ?>
	<?php if (!empty($journ['link'])) : ?>
			</a >
	<?php endif; ?>
  </p>
  <p class="meta-data"><?php print $journ['issue']; ?></p>

  <div class="table-contents">
	<div class="blk-cover">
		<?php if ($node->field_journal_cover[0]['default']!=1):?>
			<?php if (!empty($journ['link'])) : ?>
				<a href="<?php print $journ['link'] ?>" target="_blank">
			<?php endif; ?>
			<img class="journal-issue-img" src="<?php print $journ['image'] ?>" width="85px" height="116px"> 
			<?php if (!empty($journ['link'])) : ?>
				</a >
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<div class="table-contents-list">
		 <?php print $journ['toc'] ?>
	 </div>
	 <div class="clear"></div>
	 <div class="sep-thick"></div>
	 <div class="table-archives">
		 <?php if (module_exists('journal_mgt')): ?>
		   <?php print journal_mgt_getArticles($journ['date']); ?>
		   <div class="clear"></div>
		   <div class="sep-thick"></div>
		   <div class="nav-control">
			 <?php if ($prev): ?> <span class="prev"><?php print $prev ?></span> |<?php endif; ?><?php if($next): ?> <span class="prev"><?php print $next ?></span><?php endif;?>
		   </div>
		   <?php print journal_mgt_getExcerpt($journ['date']); ?>
		   <div class="sep-thick"></div>
			<div class="nav-control">
			<?php if ($prev): ?> <span class="prev"><?php print $prev ?></span> |<?php endif; ?><?php if($next): ?> <span class="prev"><?php print $next ?></span><?php endif;?>
			</div>
		<?php endif; ?>
	 </div>
	 
  </div>
 <div class="clear"></div>
</div>

<div class="clear"></div>
<?php//menu_set_active_item("jrnl/iss/latest"); ?>

<?php
if(!$next){
	menu_set_active_item("jrnl/iss/latest");
} else {
	menu_set_active_item("jrnl/iss/archive");
}
?>