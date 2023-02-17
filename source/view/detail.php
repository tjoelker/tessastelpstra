<!-- detail.php -->
<main>
  <section class='viewport'>
  <h1>
    <?php print_r($case->title); ?>
  </h1>
  <p>
    <?php print_r($case->paragraph); ?>
  </p>
  <figure>
    <?php
      foreach ($case->images as $image)
      {
        require(".." . "/view" . "/image.php");
      }
    ?>
  </figure>
  </section>
</main>
