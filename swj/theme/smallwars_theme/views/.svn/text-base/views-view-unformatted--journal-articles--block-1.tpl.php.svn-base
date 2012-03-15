<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 $odd = array();
 $even = array();
foreach ($rows as $id => $row){
  if($id & 1) $even[] = $row;
  else $odd[] = $row;
}
?>
<div id="side-a">
  <div class="group-container">
    <?php foreach ($odd as $id => $row): ?>
	<?php print $row; ?>
	<?php endforeach;?>
  </div>
</div>
<div id="side-b">
  <div class="group-container">
    <?php foreach ($even as $id => $row): ?>
	<?php print $row; ?>
	<?php endforeach;?>
  </div>
</div>
