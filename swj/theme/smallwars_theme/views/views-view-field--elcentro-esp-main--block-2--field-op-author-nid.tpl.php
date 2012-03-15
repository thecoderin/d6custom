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
$arr = explode("</div>", $output);
  $count = count($arr) -1;
  $out = "";
  if($count == 0 ) $out = "<span class=\"auth-name\">".strip_tags($arr[0], "<a>")."</span>";
  else if($count == 2 ) $out =  "<span class=\"auth-name\">". strip_tags($arr[0], "<a>")."</span> and  <span class=\"auth-name\">".strip_tags($arr[1], "<a>")."</span>";
  else if($count >2 ) {
    unset($arr[$count]);
	for($i=0; $i < count($arr) -2; $i++) {
	$out .=  "<span class=\"auth-name\">".strip_tags($arr[$i], "<a>")."</span>, ";
	}
	$out .=  "<span class=\"auth-name\">".strip_tags($arr[$i], "<a>")."</span> and <span class=\"auth-name\">".strip_tags($arr[$i + 1], "<a>" )."</span>";
  }
  else $out = implode(",", $arr);
?>
<p class="byline"> by <?php print $out; ?> </p>