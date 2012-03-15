<?php
//Template file for Authors Sidebar Management Section.
?>

<?php print $form ?>
<?php if ($data): ?>
<div id='authors-sidebar-list'>
	<h2><?php print t("Authors Sidebar List") ?></h2>
	<table id="authors-sidebar-table">
	  <tr>
		<th><?php print t("Author") ?></th>
		<th colspan="2"><?php print t("Operations") ?></th>
	<?php foreach ($data as $datum) : ?>
	  <tr>
		<td><?php print $datum['author'] ?></td>
		<td><?php print $datum['edit'] ?></td>
		<td><?php print $datum['delete'] ?></td>
	  </tr>
	<?php endforeach; ?>
	  </tr>
	</table>
</div>
<?php endif; ?>