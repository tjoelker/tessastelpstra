<!-- case.php -->
<section class="row component-case">
  <div class="content-wrapper content-horizontal-<?php print_r(($horizontal_index % 2) ? 'left' : 'right'); ?> content-vertical-<?php print_r($vertical_index ? 'top' : 'bottom'); ?>">
    <div class="card card-case">
      <a class="card-wrapper" href="<?php /* print_r($cases_path); */ ?>">
        <figure class="image-wrapper">
          <img class="image" alt="" src="<?php print_r($case_path . $thumbnail); ?>">
        </figure>
        <h2 class="heading"><?php print_r($heading); ?></h2>
      </a>
    </div>
  </div>
</section>
