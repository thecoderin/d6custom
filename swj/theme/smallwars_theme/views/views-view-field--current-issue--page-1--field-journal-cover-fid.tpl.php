<?php
// $Id: views-view-field.tpl.php,v 1.1 2008/05/16 22:22:32 merlinofchaos Exp $
 /**
  * This template is used to print a single field in a view. It is not
  * actually used in default Views, as this is registered as a theme
  * function which has better performance. For single overrides, the
  * template is perfectly okay.
  *
  * Variables available:
  * - $view: The view object
  * - $field: The field handler object that can process the input
  * - $row: The raw SQL result that can be used
  * - $output: The processed output that will normally be used.
  *
  * When fetching output from the $row, this construct should be used:
  * $data = $row->{$field->field_alias}
  *
  * The above will guarantee that you'll always get the correct data,
  * regardless of any changes in the aliasing that might happen if
  * the view is modified.
  */
  //print_r($row);
  $fid = $row->node_data_field_journal_desc_field_journal_pdf_fid;
  if (module_exists(journal_mgt)) {
  $pdf = journal_mgt_getMeFile($fid);
  }
  $link = $row->node_data_field_journal_desc_field_journal_link_url;
?>
<?php //print $output ?>
<?php if ($pdf): ?>
<a href="<?php print $pdf?>" target="_blank">
<?php elseif (!empty($link)): ?>
<a href="<?php print $link?>" target="_blank">
<?php endif; ?>
<img src="<?php print strip_tags($output); ?>" class="journal-issue-img" >
<?php if ($pdf || (!empty($link))): ?>
  </a>
<?php endif; ?>