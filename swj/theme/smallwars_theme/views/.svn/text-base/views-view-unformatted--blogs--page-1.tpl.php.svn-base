<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates

 $odd = array();
 $even = array(); */
 $total = count($rows);
 /*
foreach ($rows as $id => $row){
  if($id & 1) $even[] = $row;
  else $odd[] = $row;
}*/
for($i = 0; $i < ($total/2); $i++) {
  $left []= $rows[$i];
}
for($j = $i; $j < $total; $j++) {
  $right[] = $rows[$j];
} 
?>
<?php if($title): ?>
<div class="interior-page-heading">
  <h1><?php print $title; ?></h1>
</div>
<?php endif;?>
<div id="side-a">
  <div class="group-container">
    <?php foreach ($left as $id => $row): ?>
	<?php print $row; ?>
	<?php endforeach;?>
  </div>
</div>
<div id="side-b">
  <div class="group-container">
    <?php foreach ($right as $id => $row): ?>
	<?php print $row; ?>
	<?php endforeach;?>
  </div>
</div>
