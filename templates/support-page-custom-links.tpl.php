<?php

/**
 * @file
 *  Displays the support centre page.
 *
 * Available variables:
 * - $heading: Title of the current custom link.
 * - $main_attributes: Main HTML attributes for the custom links.
 * - $links: The list of support page links.
 */
?>
<div class="accordion-group" id="term-<?php echo $main_attributes['id']?>">
  <div class="accordion-heading">
    <?php echo '<span class="' . $main_attributes['classes'] . '"></span><' . $heading['level'] . '>'?>
    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $main_attributes['id']?>" href="#collapse-<?php echo $main_attributes['id']?>">
      <?php echo $heading['text']?>
    </a>
    <?php echo '</'.$heading['level'].'>'?>
  </div>
  <div class="accordion" id="accordion<?php echo $main_attributes['id']?>">
    <div id="collapse-<?php echo $main_attributes['id']?>" class="accordion-body collapse in">
    <?php foreach ($links as $key => $value): ?>
      <div id="node-<?php print $value['attributes']['id']; ?>" class="accordion-inner">
      <?php echo '<a href="#" onclick="Drupal.theme(\'refreshSupportContent\', ' . $value['attributes']['id'] . ')">'. $value['title'] .'</a>';?>
      </div>
    <?php endforeach;?>
    </div>
  </div>
</div>
