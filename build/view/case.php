<!-- case.php -->
<section class="row component-case">
  <div class="content-wrapper content-horizontal-<?php print_r(($horizontal_index % 2) ? 'left' : 'right'); ?> content-vertical-<?php print_r($vertical_index ? 'top' : 'bottom'); ?>">
    <div class="card card-case">
      <a class="card-wrapper" href="/case/?page=<?php print_r($case->folder_name); ?>">
        <?php
          $image = $case->thumbnail;
          require('image.php');
        ?>
        <h2 class="heading"><?php print_r($case->title); ?></h2>
      </a>
    </div>
  </div>
</section>
