<!--<pre><?php //print_r($node);?></pre>-->
<h3 class="rtecenter">News About:</h3>
<h1 class="main-title"><?php print $title ?></h1>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

  <div class="body-content content">
    <?php print $content ?>
  </div>

  <div class="blk-cat-news">
    <?php print views_embed_view('cat_news' ,'block_1',$node->nid); ?>
  </div>

</div>
