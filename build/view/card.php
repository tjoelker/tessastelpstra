<!-- card.php -->
<?php
  $path_cases = "/assets" . "/case" . "/$case" . "/";
  $case = str_replace(
    "_",
    " ",
    $case,
  );
  $image = $path_cases . $image[1];
?>
<section class="row">
  <div class="card card-case">
    <a href="<?php print_r($path_cases); ?>">
      <figure class="image-wrapper">
        <img class="image" alt="" src="<?php print_r($image); ?>">
      </figure>
      <div>
        <h2 class="heading"><?php print_r($case); ?></h2>
      </div>
    </a>
  </div>
</section>
