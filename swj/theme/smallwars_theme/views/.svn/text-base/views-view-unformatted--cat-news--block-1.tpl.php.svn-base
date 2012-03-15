<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php
$spliter = ceil(count($rows)/2);
$c =0;
?>
<div id="side-a">
	<div class="group-container">
	<?php foreach ($rows as $id => $row): ?>
		<?php 	if ($spliter==$c):?>
	</div>
</div>
<div id="side-b">				
	<div class="group-container">
		<?php  endif; ?>    
  <div class="<?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </div>
		<?php $c++;	?>
	<?php endforeach; ?>
	</div>
</div>