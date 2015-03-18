<?php

/**
 * @file
 *  Displays the support centre page.
 *
 * Available variables:
 *  $form: The form to dinamically filter the support pages.
 *  $support_pages: The list of support page links.
 */
?>
<div id="support-page">
  <div id="support-body" class="row-fluid">
    <div id="support-search" class="span3">
      <?php print $form; ?>
    <div id="support-links"><?php print $support_pages; ?></div>
  </div>
  <div id="support-content" class="span9"></div>
  </div>
</div>
