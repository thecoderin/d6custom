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
  

  if ($row->node_data_field_news_url_field_news_author_value!='') {
	  $by[]=$row->node_data_field_news_url_field_news_author_value;
  }
  if ($row->node_data_field_news_url_field_news_source_value!='') {
	  $by[]="<i>".$row->node_data_field_news_url_field_news_source_value."</i>";
  }
   
   $byline = implode(", ", $by);

    $lk_cnt_cmt = ($row->node_comment_statistics_comment_count > 0) ?
		l('('.$row->node_comment_statistics_comment_count.')',"node/".$row->nid, array( 'fragment'=>'comments')):
		l('('.$row->node_comment_statistics_comment_count.')',"node/".$row->nid);
?>
<?php //print $output; ?>
<h3 class="news">
	<?php print l($row->node_title,$row->node_data_field_news_url_field_news_url_url,array('attributes'=>array('target'=>'_blank')));?>
	  <?php if ($byline!=''): print '<span class="by-line">by ' . $byline . '</span>'; endif; ?>    
<?php print  $lk_cnt_cmt ;?> 
<?php if($row->node_data_field_news_url_field_news_ed_comment_value !=''): ?>
		<?php print l(' ',"node/".$row->nid, array( 'attributes' => array('class'=>'lk-ed-cmt')));?>
	  <?php endif; ?>
	 </h3>