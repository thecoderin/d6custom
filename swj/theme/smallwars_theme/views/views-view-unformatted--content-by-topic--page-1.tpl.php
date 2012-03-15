<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 $arg = arg(1);
?>

<?php if (!empty($arg)): ?>
  <h1 class="main-title"><?php print $arg; ?></h1>
<?php endif; ?>
<div class='tag-desc'><?php print views_embed_view('term_description', 'block_1'); ?></div>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
