<!-- image.php -->
<picture class="image-wrapper">
  <img class="image" alt="<?php print_r(trim($image, '.jpg')); ?>" src="<?php print_r($case->path . $image); ?>" draggable="false">
</picture>
