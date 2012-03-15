<?php if (count($data) > 0): ?>
<div class="block-right">
  <div class="side-c-header">
	<?php print  t('Related News'); ?>
  </div>
  <div class="article-heading">
	<ul>
	<?php foreach ($data as $row): ?>

		<?php 
			$by = array();
			if ($row['author']!='') {
				$by[]=$row['author'];
			}
			if ($row['source']!='') {
				$by[]="<i>".$row['source']."</i>";
			}   
			$byline = implode(", ", $by);
		?>
      <li ><?php print $row['link']; ?><?php if ($byline!=''): print '<span class="by-line"> by ' . $byline . '</span>'; endif; ?> <?php print $row['comment'].$row['ed_cmt']; ?>
	 
	  </li>
    <?php endforeach; ?>
    </ul>
  </div>
 </div>
<?php endif; ?>
