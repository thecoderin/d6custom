<?php
global $base_url;
$auth_title = $node->title;
$auth_image = $base_url."/".$node->field_author_photo[0][filepath];

$node_user_id=$node->uid;
global $user;
$return_user_id=$user->uid;


/*$tags = array("<p>", "</p>");
$auth_bio = str_replace($tags, "", $node->field_short_bio[0][value]);*/
$auth_bio = $node->field_short_bio[0][value];
if (!empty($node->field_author_link[0][url])) {
  $link = $node->field_author_link[0][url];
}
$attrib = array('external'=>true,'attributes' => array('target'=>'_blank'));
?>
<pre>
<?php  //print_r($node); ?>
</pre>
<div class="author-list-row">
	<img class="author-img" src="<?php print $auth_image ?>">
	<div id="author-archive-top"  class='blk-author-info'>
		<p class="author-name"><?php print $auth_title; ?></p>
		<p class="private_message">
		<?php
		/*if (user_access('write privatemsg', $user)) 
		{
       		 echo l("Send a private message","messages/new/".$node_user_id, array('query' => 'destination=user/'. $return_user_id,'absolute' => TRUE));
		}	*/
		 ?>
		 </p>  	
		 <?php
			if($link){
				//"More..." link get tacked onto the end of the short bio.
				// Append in the last para rather than a new paragraph.
				$pos = strrpos($auth_bio, "</p>");
				$more = "&nbsp;&nbsp;&nbsp;&nbsp;".l(t('More..'),$link, $attrib);
				$auth_bio=substr_replace($auth_bio, $more, $pos, 0);
				
			 }

		?>
		<div class="auth-shot-bio normal">
			<?php print $auth_bio ?>
			
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>