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
  $node_id = $row->nid;
  $view_name = 'journal_current_issue_sub_view';
  $date = $row->node_created;
  $body = $row->node_revisions_body;
?>
<div class="table-contents">
   <h3>Table of Contents</h3>
<?php print $body ?>
<?php if (module_exists('journal_mgt')): ?>
<?php print journal_mgt_getArticles($date); ?>
<?php print journal_mgt_getExcerpt($date); ?>
<?php endif; ?>
</div>
